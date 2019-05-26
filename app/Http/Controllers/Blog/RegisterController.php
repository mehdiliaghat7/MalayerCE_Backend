<?php

namespace App\Http\Controllers\Blog;

use App\Professor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class RegisterController extends Controller
{
    public function store(Request $request)
    {
        if ($request->type =="student"){
            $user=new User();

            $user->name = $request->name;
            $user->user_code = $request->user_code;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
            return back();


        }else{
            $professor= new Professor();

            $professor->name = $request->name;
            $professor->user_code = $request->user_code;
            $professor->email = $request->email;
            $professor->password = $request->password;
            $professor->save();
            return back();
        }
    }
}
