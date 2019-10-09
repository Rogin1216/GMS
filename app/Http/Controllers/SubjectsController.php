<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
class SubjectsController extends Controller
{
   	public function index()
    {
    	$subjects = Subject::all();
    	return view('subjects.index')->with('subjects', $subjects);
    }
        public function subjindex()
    {
        $subjects = Subject::all();
        return view('subjects.subjectshow')->with('subjects', $subjects);
    }
    public function create(){
    	return view('subjects.create');
    }
    public function store()
    {
        request()->validate([
            'name' => 'required',
        ]);
        
    	$subjects = new Subjects;
    	$subjects->name = request()->name;
    	$subjects->save();

    	return redirect('/subjects');
    }
}
