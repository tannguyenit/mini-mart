<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLoginAdmin()
    {
        return view('admin.auth.login');
    }

    public function postLoginAdmin(Request $request)
    {
        $login = [
            'username' => $request->username,
            'password' => $request->password,
            'is_admin' => 1,
        ];

        if (Auth::attempt($login)) {
            return redirect()->action('admin\IndexController@index');
        } else {
            return redirect()->action('Auth\LoginController@getLoginAdmin')->with([
                'msg' => 'Dang nhap khong thanh cong',
            ]);
        }
    }

    public function login()
    {
        return view('user.login');
    }

    public function postLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(
            [
                'email' => $email,
                'password' => $password,
                'is_admin' => 2,
            ]
        )) {
            return redirect()->action('IndexController@index');
        } else {
            return redirect()->action('Auth\LoginController@login')
                ->with(['result' => 'Thông tin đăng nhập chưa chính xác']);
        }
    }
}
