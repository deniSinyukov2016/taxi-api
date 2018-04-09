<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Http\Requests\AddMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use LaravelFCM\Facades\FCM;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;

use Illuminate\Http\JsonResponse as Json;

/** @resource Messages */
class MessageController extends Controller
{
    /** Store */
    public function store(AddMessageRequest $request) : Json
    {
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60*20);

        $user = User::find($request->receiver_id);

        $title = 'Guydi';
        $message = auth()->user()->first_name . ' write you: ' . $request->message;

        $notificationBuilder = new PayloadNotificationBuilder($title);
        $notificationBuilder->setBody($message)->setSound('default');

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'title' => $title,
            'body' => $message,
            'content-available' => '1',
            'sender' => [
                'id' => auth()->user()->id,
                'name' => auth()->user()->first_name,
                'avatar' => auth()->user()->avatar ? url(auth()->user()->avatar) : ''
            ],
            'type' => 'message'
        ]);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();

        $token = $user->device_token;

        FCM::sendTo($token, $option, $notification, $data);

        return response()->json(Message::create([
            'message' => $request->message,
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id
        ]));
    }

    /** Update */
    public function update(UpdateMessageRequest $request, Message $message) : Json
    {
        return response()->json($message->update($request->all()));
    }

    /** Destroy */
    public function destroy(Message $message) : Json
    {
        return response()->json($message->delete());
    }
}
