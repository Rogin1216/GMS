<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Section;

class TeachersController extends Controller
{
    public function show(Teacher $teacher){
    	$teachers = Teacher::all();
    	return view('teachers.show')->with('teachers', $teachers);
    }

    public function edit(Teacher $teacher){
    	$sections = Section::all();
    	return view('teachers.edit', compact('sections','teacher'));
    	//['sections' => $sections, 'teacher' => $teacher]
    }

}
 