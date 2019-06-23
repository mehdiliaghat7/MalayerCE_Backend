<?php

namespace App\Http\Controllers\Professor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    public function ShowLesson()
    {
        return view('professor.lesson_allocated');

    }
}
