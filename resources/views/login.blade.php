




@extends('layouts.layout.auth')

@section('authcontent')
   	<div class="container">
		<h1 class="h1">Login</h1>
		<form action="{{ route('signin') }}" method="Post">

			@csrf
				
		<input type="text" name="email" class= "input" placeholder="email" required><br>
		
		<input type="password" name="password" class= "input" placeholder="password" required><br>
		<input type="submit" name="submit" class="button" value="Login">
		</form>
	</div>
@endsection


