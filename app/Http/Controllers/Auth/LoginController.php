<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Config;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:gr')->except('logout');
        $this->middleware('guest:police')->except('logout');
    }


    protected function validator(Request $request)
    {
        return $this->validate($request, [
            'email'   => 'required',
            'password' => 'required'
        ]);
    }

    protected function guardLogin(Request $request, $guard)
    {
        $this->validator($request);
        return Auth::guard($guard)->attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ],
            $request->get('remember')
        );
    }


    public function showAdminLoginForm()
    {
        return view('auth.admin', [
            'url' => 'admin'
        ]);
    }


    public function showPoliceLoginForm()
    {
        return view('auth.police', [
            'url' => 'police'
        ]);
    }

    public function showGrLoginForm()
    {
        return view('auth.gr', [
            'url' => 'gr'
        ]);
    }


    public function adminLogin(Request $request)
    {
        if ($this->guardLogin($request, 'admin')) {
            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function grLogin(Request $request)
    {
        if ($this->guardLogin($request, 'gr')) {
            return redirect()->intended('/gr');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


    public function policeLogin(Request $request)
    {
        if ($this->guardLogin($request, 'police')) {
            return redirect()->intended('/police');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


}
