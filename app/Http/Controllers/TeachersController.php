<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Section;

class TeachersController extends Controller
{
    public function index(Teacher $teacher){
    	$teachers = Teacher::all();
    	return view('teachers.index')->with('teachers', $teachers);
    }

    public function edit(Teacher $teacher){
    	$sections = Section::all();
    	return view('teachers.edit', compact('sections','teacher'));
    	//['sections' => $sections, 'teacher' => $teacher]
    }
    public function create(){
    	return view('teachers.create');
    }
}
 