<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function registerUser(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            
            'password' => ['required', 'confirmed', Password::min(6)],

        ]);

        $user = [
            'username' => $request->username,
            'email' => $request->email,
            
            'password' => Hash::make($request->password),
        ];




        $res = User::create($user);

        if (!$res) {
            return back()->with('fail', 'something went wrong');
        }

        $this->guard()->login($res);

        return redirect('/')->with('success', 'Account successfully created',);
    }

    public function loginUser(Request $request)
    {
        $request->validate([

            'username' => 'required',
            'password' => 'required',

        ]);

        $user = User::where('username', '=', $request->username)->first();

        if (!$user) {
            return back()->with('fail', 'User not found');
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->with('fail', 'Incorrect password');
        }

        $this->guard()->attempt($this->credentials($request));

        return redirect('/')->with('success', 'Account successfully logged in');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();



        return  redirect('/');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        //
    }
    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }
}
