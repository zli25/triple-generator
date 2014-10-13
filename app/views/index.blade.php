@extends('_master')

@section('title')
	Welcome to Triple Generator
@stop


@section('header')
	Welcome To Triple Generator
@stop

@section('content')

	
	<section class="main-section" id="xkcd">



		

		<img src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>

		<div class="content">
			<h3>xkcd Style Password Generator</h3>
		
			<p>Inspired by the xkcd Password Strength comic, this application provides you with ten relatively complex, yet easy to remember passwords. Optionally, you can include numbers or symbols for additional complexity (or to satisfy certain password requirements), and adjust the number of words. <a target="_black" href="http://xkcd.com/936/">Learn more about xkcd Style Password</a></p>

			<a href='/password-generator'><h4>Generator Your Style Password</h4></a>
		</div>

		<div class="fix"></div>

	</section>

	<section class="main-section" id="lorem">

		

		<img src='images/lorem-ipsum.jpg' alt='lorem ipsum'>
		<div class="content">
			<h3>Lorem-Ipsum Generator</h3>

			<p>In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content that could be distracting with placeholder text may allow viewers to focus on graphic aspects such as font, typography, and page layout. <a target="_black" href="http://en.wikipedia.org/wiki/Lorem_ipsum">Learn more about Lorem-Ipsum</a></p>

			<a href='/lorem-ipsum-generator'><h4>Generator Your Lorem-Ipsum Paragraph</h4></a>
		</div>
		<div class="fix"></div>

	</section >

	<section class="main-section" id="random">
		
		<img src='images/Who_is_it.png' alt='random user'>
		<div class="content">
			<h3>Random User Generator</h3>
		
			<p>Need fake users for you application? The Random user generator can help you generate information of fake users, including nane, date of birth, phone number, email and address</p>


			<a href='/user-generator'><h4>Create random users for your application</h4></a>
		</div>
		<div class="fix"></div>

	</section>

@stop