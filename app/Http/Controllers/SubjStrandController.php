<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\SubjectStrand;
class SubjStrandController extends Controller
{
    public function index()    
    {
    	$subjectstrand = SubjectStrand::all();
    	return view('subjstrand.index')->with('subjectstrand', $subjectstrand);
    }
    public function create()
    {
    	return view('subjstrand.create');
    }
}
