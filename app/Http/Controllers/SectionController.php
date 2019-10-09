<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionController extends Controller
{
	public function edit()
		{
		$sections = Section::all();
    	return view('sections.index')->with('sections', $sections);
		}
	public function show()
		{
		$sections = Section::all();
    	return view('sections.create')->with('sections', $sections);
		}
    
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'is_active' => 'required'
        ]);
        
    	$sections = new Section;
    	$sections->name = request()->name;
    	$sections->is_valid = request()->is_valid;
    	$sections->save();

    	return redirect('/subjects');
    }
}
