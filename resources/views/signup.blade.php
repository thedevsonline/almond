@extends('layouts.layout.auth')

@section('authcontent')
	<div class="container">
		<h1 class="h1">Login</h1>
		<form action="{{ route('registration') }} " method="Post">
			
		
		@csrf
		<input type="text" name="name" class= "input" placeholder="write your name"><br>
		
		<input type="email" name="email" class= "input"laceholder="write your email">
		
		
		<input type="text" name="free text" class= "input" placeholder="write anything">
		
		
		<input type="number" name="phoneNumber" class= "input" placeholder="write your phone number">
	
		<input type="password" name="password" class= "input" placeholder="write your password">
		<input type="submit" name="submit" class="button"  value="Login">
		</form>

	</div>


@endsection