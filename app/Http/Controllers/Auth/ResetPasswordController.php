<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    protected function sendResetResponse($response)
    {
        return response()->json(['status' => trans($response)]);
    }

    protected function sendResetFailedResponse($response)
    {
        return response()->json(['email' => trans($response)]);
    }
}
