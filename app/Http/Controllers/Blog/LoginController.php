<?php

namespace App\Http\Controllers\Blog;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function LoginForm()
    {
        return view('blog.login');
    }
    public function Login(Request $request )
    {
        dd($request)  ;

    }

}
