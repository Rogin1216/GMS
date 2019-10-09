<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Strand;
class StrandController extends Controller
{
    public function show(){
    	$strands = Strand::all();
    	return view('strands.index')->with('strands', $strands);
    }
    public function create(){
    	return view('strands.create');
    }
}
