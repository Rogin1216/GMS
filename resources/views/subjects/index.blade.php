@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Subjects</th>
					<th scope="col">Strands</th>
					<th scope="col">Teachers</th>
					<th scope="col">Sections</th>
					<th scope="col">Subject Strand</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subjects as $subjects)
					<tr>
						<td>{{ $subjects->id }}</td>
						<td>{{ $subjects->title }}</td>
						<td>{{ $subjects->description }}</td>
						<td>{{ \Carbon\Carbon::parse($subjects->due_date)->toFormattedDateString() }}</td>
						<td><a href="/subjects/{{ $subjects->id }}">View</a></td>
						<td><a href="/subjects/{{ $subjects->id }}/edit">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-danger" href='/subjects/add'>Add Subjects</a>
		<a class="btn btn-danger" href='/subjects/add'>Add Strand</a>
		<a class="btn btn-danger" href='/subjects/add'>Add Teacher</a>
		<a class="btn btn-danger" href='/subjects/add'>Add Section</a>
		<a class="btn btn-danger" href='/subjects/add'>Add Subject Strand</a>


	</div>
@endsection