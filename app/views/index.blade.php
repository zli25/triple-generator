@extends('_master')

@section('title')
	Welcome to Triple Generator
@stop

@section('content')

	<h1>Welcome To Triple Generator</h1>

	<section>

		<h3>xkcd Style Password Generator</h3>
		
		<p>Inspired by the xkcd Password Strength comic, this application provides you with ten relatively complex, yet easy to remember passwords. Optionally, you can include numbers or symbols for additional complexity (or to satisfy certain password requirements), and adjust the number of words. <a href="http://xkcd.com/936/">Learn more about xkcd Style Password</a></p>

		<a href='/password-generator'><h4>Generator Your Style Password</h4></a>

	</section>

	<section>

		<h3>Lorem-Ipsum Generator</h3>

		<p>In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content that could be distracting with placeholder text may allow viewers to focus on graphic aspects such as font, typography, and page layout. <a href="http://xkcd.com/936/">Learn more about Lorem-Ipsum</a></p>

		<a href='/lorem-ipsum-generator'><h4>Generator Your Lorem-Ipsum Paragraph</h4></a>

	</section>

	<section>
		<h3>Random User Generator</h3>
		
		<p>Need fake users for you application? The Random user generator can help you generate information of fake users, including nane, date of birth, phone number, email and address</p>


		<a href='/user-generator'><h4>Create random users for your application</h4></a>

	</section>

@stop