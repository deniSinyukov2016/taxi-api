<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;
use App\Http\Requests\FacebookLoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout', 'logoutFacebook');
    }

    protected function sendLoginResponse(Request $request)
    {
        if (isset($request->city) and isset($request->lat) and isset($request->lng)) {
            auth()->user()->update([
                'city' => $request->city,
                'lat' => $request->lat,
                'lng' => $request->lng
            ]);
        }

        if ($request->has('device_token') && auth()->user()->device_token !== $request->device_token) {
            auth()->user()->update(['device_token' => $request->device_token]);
        }

        $this->clearLoginAttempts($request);

        return response()->json($this->guard()->user()->makeVisible('api_token'));
    }

    protected function sendFailedLoginResponse()
    {
        return response()->json(['error' => 'Unauthenticated'], 401);
    }

    /** Facebook Authorization */
    public function handle(FacebookLoginRequest $request, string $token)
    {
        $socialUser = Socialite::driver('facebook')->userFromToken($token);
        $existingUser = User::query()
                            ->where('email', $socialUser->email)
                            ->orWhere('fb_id', $socialUser->id)
                            ->first();
        if ($existingUser) {
            $existingUser->update([
                'city' => $request->city,
                'lat' => $request->lat,
                'lng' => $request->lng,
                'fb_id' => $socialUser->id,
                'device_token' => $request->device_token
            ]);
            return response()->json($existingUser->makeVisible('api_token'));
        }
        if ($socialUser->email == null) {
            return RegisterController::facebookRegistrationWithoutEmail($socialUser, $request);
        }

        return RegisterController::facebookRegistration($socialUser, $request);
    }
}
