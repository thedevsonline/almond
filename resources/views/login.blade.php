




@extends('layouts.layout.auth')

@section('authcontent')
     
   	<div class="container">
   		@if(session('login'))
                            <div class="alert alert-warningS">
                                {{ session('login') }}
                            </div>
                        @endif
		<h1 class="h1">Login</h1>
		<form action="{{ route('signin') }}" method="Post">

			@csrf
				
		<input type="text" name="email" class= "input" placeholder="email" required><br>
		
		<input type="password" name="password" class= "input" placeholder="password" required><br>
		<input type="submit" name="submit" class="button" value="Login">
		</form>
	
			or<a href="{{ route('signup') }}"> Register</a>
		
	</div>
@endsection


