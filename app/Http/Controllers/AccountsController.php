<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;

/** @resource Accounts */
class AccountsController extends Controller
{
    /** Store */
    public function store(AccountRequest $request)
    {
        $user = auth()->user();
        if (is_null($user->fb_id)) {
            $user->fb_id = $request->fb_id;
            $responseData = $user->save();
        } else {
            $responseData = false;
        }
        return response()->json($responseData);
    }

    /** Update */
    public function update(AccountRequest $request)
    {
        $user = auth()->user();
        $user->fb_id = $request->fb_id;
        return response()->json($user->save());
    }

    /** Delete */
    public function delete()
    {
        $user = auth()->user();
        $user->fb_id = null;
        return response()->json($user->save());
    }
}
