@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/subjects/store">
			@csrf
		  <div class="form-group">
		    <label for="title">Strand</label>
		    <input type="text" class="form-control" name='name' aria-describedby="emailHelp">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <a href='/projects' >Back</a>
		</form>
	</div>
@endsection