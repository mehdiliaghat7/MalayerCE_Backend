<?php

namespace App\Http\Controllers\Blog;

use App\Professor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Alert;
use Hash;
class RegisterController extends Controller
{
/*
|--------------------------------------------------------------------------
| register controller
|--------------------------------------------------------------------------
|
| Here is where operator(user&&professor) can register in your application. This
| register is only for the  operators and not for admin user and professor
|
|
*/

   public function RegisterForm()
   {
      return view('blog.register');
   }
    public function store(Request $request)
    {

        /* validate for register form*/
        Validator::make($request->all(), [
            'name'=>'required|max:255',
            'user_code'=>'required|min:10|numeric ',
            'email'=>'required|email|unique:users,email|unique:professors,email' ,
            'password'=>'required|min:6'
        ])->validate();
        /* end validate*/

        if ($request->type =="student")/* this if sort operator user and professor for insert in tables*/
        {
            $users = User::where('user_code' ,$request->user_code)->get();/* this query is for the Duplicate user*/
            if ($users->count() ==000)/* if user Existence return back*/
            {
                $user=new User();

                $user->name = $request->name;
                $user->user_code = $request->user_code;
                $user->email = $request->email;
                $user->password = encrypt($request->password);
                $user->type = $request->type;
                $user->save();

                return back();
            }else{

                return redirect(route('login.form'));
            }



        }else{
            $users = User::where('user_code' ,$request->user_code)->get();/* this query is for the Duplicate professor*/
            if ($users->count() ==000) /* if professor Existence return back*/
            {
                $user=new User();

                $user->name = $request->name;
                $user->user_code = $request->user_code;
                $user->email = $request->email;
                $user->password = encrypt($request->password);
                $user->type = $request->type;
                $user->save();

                $professor = new Professor();

                $professor->name = $request->name;
                $professor->user_code = $request->user_code;
                $professor->email = $request->email;
                $professor->password = encrypt($request->password);
                $professor->save();
                return back();
            }else{
                return redirect(route('register.form'));
            }
        }
    }
}
