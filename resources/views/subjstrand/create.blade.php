@extends('layouts.master')
@section('content')
	<div class="container">
			<nav class="navbar navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">Welcome </a> 
		  <a class="btn btn-danger" href='/'>Log out</a>
		  </button>
		</nav>
		@include('layouts.errors')
		<form method="POST" action="/subjects/store">
			@csrf
		  <div class="form-group">
		    <label for="title">Section name</label>
		    <input type="text" class="form-control" name='title' aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
		    <label for="title">Active</label>
		    <input type="text" class="form-control" name='title' aria-describedby="emailHelp">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <a href='/projects' >Back</a>
		</form>
	</div>
@endsection