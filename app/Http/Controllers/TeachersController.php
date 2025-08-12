<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;    
use App\Models\Teachers;
class TeachersController extends Controller
{
    public function ListTeacher(){
        $_teachers = Teachers::all();
        return view('teachers/index',compact('_teachers'));
    }
}
