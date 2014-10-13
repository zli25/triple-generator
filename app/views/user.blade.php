@extends('_master')

	@section('header')
	Welcome to random user generator
@stop

@section('content')

	

	{{ Form::open(array('url' => '/user-generator', 'method' => 'POST')) }}

	
		{{ Form::label('num_of_user', 'How many users do you want?') }}
		{{ Form::text('num_of_user', '',
                        array('id' => 'num_of_user', 'size' => '2')) }}
		<br>
		{{ Form::submit('generate') }}

	{{ Form::close() }}	
@stop


@section('users')

	<a href='/'>Goback home</a>

	<div class="user-container">

		@foreach ($fakerArray as $user)
		
	    	<section class="user">
	    		<h5>Name</h5>
	    		<p>{{ $user['name'] }}</p>
	    		<h5>Birthday</h5>
	    		<p>{{ $user['birthday'] }}</p>
	    		<h5>Phone Number</h5>
	    		<p>{{ $user['phonenumber'] }}</p>
	    		<h5>Email</h5>
	    		<p>{{ $user['email'] }}</p>
	    		<h5>Address</h5>
	    		<p>{{ $user['address'] }}</p>
	    		<h5>Profile</h5>
	    		<p>{{ $user['profile'] }}</p>
	    	</section>
	    
		@endforeach

		<div class="fix"></div>
	</div>

@stop


