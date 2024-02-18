<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam_Courses;

class Exam_Controller extends Controller
{
    public function index()
    {
        $exams = Exam_Courses::all();
        return view('home', ['exams' => $exams]);
    }
}
