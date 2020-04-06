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
    protected $redirectTo;

    // protected function redirectTo()
    // {
    //     if (Auth::user()->role === '1') {
    //         return redirect('/dev/home');
    //     }elseif(Auth::user()->role === '2'){
    //         return redirect('/admin/home');
    //     }elseif(Auth::user()->role === '3'){
    //         return redirect('/cab/beranda');
    //     }elseif(Auth::user()->role === '4'){
    //         return redirect('/sekolah/beranda');
    //     }else {
    //         return redirect('/notfound');
    //     }
    // }


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
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->get('username');
        $password = $request->get('password');

        $login_type = filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$login_type => $username, 'password' => $password])) {
            return redirect()->intended($this->redirectPath());
        }

        return redirect()->back()->withInput()->withErrors([
            'login_error' => 'These credentials do not match our records.',
        ]);
    }
}
