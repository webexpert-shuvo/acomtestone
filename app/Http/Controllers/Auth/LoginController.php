<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = RouteServiceProvider::USERDASH;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    //User Login

    public function username()
    {

        $logdata =  request()->input('logdata');
        $phn =  substr( $logdata ,0, 4);

        if(filter_var($logdata , FILTER_VALIDATE_EMAIL)){

            $type  =  'email';

        }else if($phn == '8801' ){

            $type  = 'phone_number';

        }else{

            $type  =  'uname';
        }


        request()->merge([$type => $logdata ]);
        return  $type;
    }


    protected function loggedOut(Request $request)
    {

        return redirect()->route('login.form');

    }



}
