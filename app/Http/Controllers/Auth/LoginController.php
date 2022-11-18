<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

//    public function login(Request $request)
//    {
////        dd(request());
//        $input = request()->all();
//
//        $this->validate(request(), [
//            'mobile_no' => 'required',
//            'password' => 'required',
//        ]);
//$pass = Hash::make($input['password']);
//
//        $fieldType = filter_var(request()->mobile_no, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile_no';
////        dd($fieldType);
//        if(auth()->attempt(array($fieldType => $input['mobile_no'], 'password' => $pass)))
//        {
//            return redirect()->route('home');
//        }else{
//            dd('ok');
//            return redirect()->route('login')
//                ->with('error','Email-Address And Password Are Wrong.');
//        }
//
//    }
}
