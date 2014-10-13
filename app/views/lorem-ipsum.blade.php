@extends('_master')



@section('header')
	<h1> Welcome to lorem-ipsum generator</h1>
@stop

@section('content')

	

	{{ Form::open(array('url' => '/lorem-ipsum-generator', 'method' => 'POST')) }}

	
		{{ Form::label('num_of_paragraph', 'How many paragraphs do you want?') }}
		{{ Form::text('num_of_paragraph', '',
                        array('id' => 'num_of_paragraph', 'size' => '2')) }}
		
		{{ Form::submit('generate') }}

	{{ Form::close() }}	
@stop


@section('paragraphs')

	<a href='/'>Goback home</a>

	@foreach ($paragraphs as $paragraph)
		<section class="paragraph">{{$paragraph}}</section>
	@endforeach

@stop