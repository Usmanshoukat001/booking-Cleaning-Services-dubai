<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

    protected function authenticated(Request $request, $user)
    {
        if ($user->blocked == 1) {
            $this->guard()->logout(); // Logout the user
            return Redirect::back()->with('error', 'Your account is blocked. Please contact the administrator.');
        }
    
        switch ($user->role) {
            case 'user':
                return Redirect::intended(RouteServiceProvider::HOME);
                break;
            case 'employee':
                return Redirect::intended(RouteServiceProvider::EMPLOYEE);
                break;
            case 'admin':
                return Redirect::intended(RouteServiceProvider::ADMIN);
                break;
            default:
                return Redirect::intended(RouteServiceProvider::HOME);
                break;
        }
    }
    
}
