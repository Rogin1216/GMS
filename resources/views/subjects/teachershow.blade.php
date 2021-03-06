@extends('layouts.master')
@section('content')
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
		  <a class="navbar-brand" href="#">GMS</a>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="/subjects/add">Strand </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Subject</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Teacher </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Section</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Subject Strand </a>
		      </li>

		    </ul>
		  </div>
		</nav>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Strand</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subjects as $subjects)
					<tr>
						<td>{{ $subjects->id }}</td>
						<td>{{ $subjects->name }}</td>
						<td>
							<a href="/subjects//{{ $subjects->id }}/edit">Edit</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/subjects/{{ $project->id }}/tasks'>Add a new Task</a>
		<form>
			<input value="{{$teacher->id}} "type="hidden" name="id">
			<select name="advisory_section">
				@foreach($sections as $section)
				<option value="{{$section->id}}">{{$section->name}}</option>
				@endforeach
			</select>
		</form>
	</div>
@endsection