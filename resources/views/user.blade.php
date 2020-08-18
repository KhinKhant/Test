@extends('layout.master')

@section('title', "project tile")

@section('content')
<table border=1>
	<tr>
		<th scope="col">Name</th>
		<th scope="col">Phone</th>
		<th scope="col">Email</th>
		<th scope="col">Address</th>
		<th scope="col">Month1</th>
		<th scope="col">Score</th>
		<th scope="col">Month2</th>
		<th scope="col">Score</th>
	</tr>
	@foreach ($users as $user)

	<tr>
		<td scope="col">{{$user['name']}}</td>
		<td scope="col">{{$user['phone']}}</td>
		<td scope="col">{{$user['email']}}</td>
		<td scope="col">{{$user['address']}} </td>
		@foreach ($user['score'] as $key=>$val)
			<td scope="col">{{$key}} </td>
			<td scope="col">{{$val}}</td>
		@endforeach
	@endforeach
</tr>
</table>
@endsection