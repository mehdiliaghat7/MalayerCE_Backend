<?php

namespace App\Http\Controllers\Blog;

use App\User;
use App\Professor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function LoginForm()
    {
        return view('blog.login');
    }
    public function Login(Request $request )
    {

        Validator::make($request->all(), [
            'user_code'=>'required|numeric ',
            'password'=>'required'
        ])->validate();
        /* end validate*/

        if ($request->type =="student")
        {
            $user = User::where('user_code' ,$request->user_code)
                ->first();

            if ($user !=null && $request->password == decrypt($user->password))
            {
                Auth::login($user);
                return view('student.student_home');
            }else{
                return back();

            }

        }else{
            $user = User::where('user_code' ,$request->user_code)
                ->first();
            $professor = Professor::where('user_code' ,$request->user_code)
                ->first();
            if ($user !=null &&
                $request->password == decrypt($professor->password) &&
                $professor->role == 'admin') /* */ {
                Auth::login($user);
                return view('manager.manager_home');

            }elseif ($user !=null &&
                $request->password == decrypt($professor->password) &&
                $professor->role == 'manager'){
                Auth::login($user);
                return view('manager.manager_home');

            }elseif ($user !=null &&
                $request->password == decrypt($professor->password) &&
                $professor->role == 'professor' ){
                Auth::login($user);
                return view('professor.professor_home');

            }
            else{
                return back();
            }
        }

    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->guest(route( 'home' ));

    }


}
