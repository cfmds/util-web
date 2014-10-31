@extends('layout')

@section('content')
	<table class="">
		<tr>
			<th>id</th>
			<th>email</th>
			<th>name</th>
			<th>created_at</th>
		</tr>
		@foreach($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->created_at}}</td>
			</tr>
		@endforeach
	</table>
@stop