<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function CreateForm()
    {
        return view('manager.user_create');

    }
    public function Store()
    {

    }
    public function Index()
    {
        return view('manager.user_index');

    }
    public function Delete()
    {

    }
    public function Edit()
    {

    }
}
