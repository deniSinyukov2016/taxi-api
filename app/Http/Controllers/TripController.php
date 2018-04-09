<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use LaravelFCM\Facades\FCM;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use App\Http\Requests\AddTripRequest;
use App\Http\Requests\UpdateTripRequest;
use Illuminate\Http\JsonResponse as Json;

/** @resource Trips */
class TripController extends Controller
{
    /** Store */
    public function store(AddTripRequest $request) : Json
    {
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60*20);

        $user = User::find($request->acceptor_id);

        $notificationBuilder = new PayloadNotificationBuilder('Guydi');
        $notificationBuilder->setBody(
            auth()->user()->first_name . '  Asked for a ride'
            /*auth()->user()->first_name . ' invites you to trip.' .
            ' From: ' . $request->from .
            ' To: ' . $request->to .
            ' In: ' . $request->date*/
            //\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $request->date)->format('g:i A') . '.'
        )->setSound('default');

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'init_id' => auth()->user()->id,
            'description' => $request->description,
            'comment' => $request->comment,
            'type' => 'ride'
        ]);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();

        $token = $user->device_token;

        FCM::sendTo($token, $option, $notification, $data);

        $trip = auth()->user()->trips()->create([
            'init_id' => auth()->id(),
            'accept_id' => $request->acceptor_id,
            'from' => $request->from,
            'to' => $request->to,
            'comment' => $request->comment,
            'description' => $request->description,
            'date' => $request->date
        ]);

        $trip->users()->attach([$request->acceptor_id => ['role' => 'acceptor']]);

        return response()->json($trip);
    }

    /** Show */
    public function show(Trip $trip) : Json
    {
        return response()->json([
            'init' => User::query()->select('first_name', 'avatar')
                ->where('id', $trip->init_id)->get(),
            'accept' => User::query()->select('first_name', 'avatar')
                ->where('id', $trip->accept_id)->get(),
            $trip,
        ]);
    }

    /** Update */
    public function update(UpdateTripRequest $request, Trip $trip) : Json
    {
        if ($request->has('accepted') && $request->accepted) {
            $initiator = User::find($trip->init_id);
            Message::create([
                'message' => '#right-hand# Poked ' . $initiator->first_name,
                'sender_id' => auth()->id(),
                'receiver_id' => $initiator->id
            ]);
        }

        return response()->json($trip->update($request->all()));
    }

    /** Destroy */
    public function destroy(Trip $trip) : Json
    {
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60*20);

        $user = User::find($trip->init_id);

        $notificationBuilder = new PayloadNotificationBuilder('Taxi');
        $notificationBuilder->setBody(
            auth()->user()->first_name . ' declined your trip request.'
        )->setSound('default');

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'init_id' => auth()->user()->id,
            'type' => 'ride'
        ]);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();

        $token = $user->device_token;

        FCM::sendTo($token, $option, $notification, $data);

        return response()->json($trip->delete());
    }

    /** Send accepted notification */
    public function sendAcceptedNotification(User $user) : Json
    {
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60*20);

        $notificationBuilder = new PayloadNotificationBuilder('Taxi');
        $notificationBuilder->setBody(
            auth()->user()->first_name . ' accepted your trip request.'
        )->setSound('default');

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'init_id' => auth()->user()->id,
            'type' => 'ride'
        ]);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();

        $token = $user->device_token;

        return response()->json(FCM::sendTo($token, $option, $notification, $data));
    }
}
