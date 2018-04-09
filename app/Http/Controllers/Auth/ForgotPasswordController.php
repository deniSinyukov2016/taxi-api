<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function sendResetLinkResponse($response)
    {
        return response()->json(['status' => trans($response)]);
    }

    protected function sendResetLinkFailedResponse()
    {
        return response()->json(['success' => false, 'message' => 'Wrong email'], 422);
    }
}
