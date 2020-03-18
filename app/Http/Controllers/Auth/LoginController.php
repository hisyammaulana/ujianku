<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'kode_sekolah' => 'required',
            'password' => 'required',
        ]);

        $kode_sekolah = $request->get('kode_sekolah');
        $password = $request->get('password');

        $login_type = filter_var($kode_sekolah, FILTER_VALIDATE_EMAIL) ? 'email' : 'kode_sekolah';

        if (Auth::attempt([$login_type => $kode_sekolah, 'password' => $password])) {
            return redirect()->intended($this->redirectPath());
        }

        return redirect()->back()->withInput()->withErrors([
            'login_error' => 'These credentials do not match our records.',
        ]);
    }
}
