<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/nivelusuario/validar';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}


// public function login(Request $request){
//
//   $this->validate($request, [
//     'email' => 'required|email',
//     'password' => 'required|min:8'
//   ]);
//   // dd($request->all());
//   if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
//     return redirect()->intended(route('/home'));
//   }
//
//   return redirect()->back()->withInput($request->only('email', 'remember'));
// }
