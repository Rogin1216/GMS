@extends('layouts.master')
@section('content')
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
		  <a class="navbar-brand" href="/subjects">GMS</a>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="/subjects/strand">Strand </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/subjects/subject">Subject</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/subjects/teacher">Teacher </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/subjects/addsec">Section</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/subjects/subjstrand">Subject Strand </a>
		      </li>

		    </ul>
		  </div>
		</nav>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Subject</th>
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
		<a class="btn btn-primary" href='/subjects/subject/create'>Add a new Task</a>
	</div>
@endsection