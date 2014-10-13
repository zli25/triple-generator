<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});



Route::get('/lorem-ipsum-generator', function()
{
	
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs(3);
	return View::make("lorem-ipsum")->with('paragraphs', $paragraphs);
	
});


Route::post('/lorem-ipsum-generator', function()
{
	$num_of_paragraphs = Input::get('num_of_paragraph');

	$count = (empty($num_of_paragraphs) ? 3 : $num_of_paragraphs);
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($count);
	return View::make("lorem-ipsum")->with('paragraphs', $paragraphs);
	
});

Route::get('/user-generator', function()
{


	$faker = Faker\Factory::create();
	$fakerArray = array();

	for ($i = 0; $i < 2; $i++) {

		$fakerArray[$i] = array(
				"name" => $faker->name,
				"birthday" => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-15 years')->format('Y-m-d'),
				"phonenumber" => $faker->phoneNumber,
				"address" => $faker->address,
				"email" => $faker->email,
				"profile" => $faker->text
			);
	}

	return View::make("user")->with('fakerArray', $fakerArray);
});


Route::post('/user-generator', function()
{


	$num_of_user = Input::get('num_of_user');

	$count = (empty($num_of_user) ? 2 : $num_of_user);
	$faker = Faker\Factory::create();
	$fakerArray = array();
	for ($i = 0; $i < $count; $i++) {

		$fakerArray[$i] = array(
				"name" => $faker->name,
				"birthday" => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-15 years')->format('Y-m-d'),
				"phonenumber" => $faker->phoneNumber,
				"address" => $faker->address,
				"email" => $faker->email,
				"profile" => $faker->text
			);
	}

	return View::make("user")->with('fakerArray', $fakerArray);

});

Route::get('/password-generator', function()
{

	$path = app_path().'/database/wordlist.txt';
	$num_of_word = Input::get('num_of_word');
	$uppercase_first = Input::get('uppercase_first');
	$add_number = Input::get('add_number');
	$add_symbol = Input::get('add_symbol');

	$symbol = array('!', '@', '#', '$', '^', '&', '*');
	if($wordlist = file($path, FILE_IGNORE_NEW_LINES)) {
		
		$password = "";
		$count = (empty($num_of_word) ? 4 : $num_of_word);
		for ($i = 0; $i < $count; $i++) {
			$word = $wordlist[rand(0, 4999)];
			if (isset($uppercase_first)) {
				$word = ucfirst($word);
			}
			if ($i != 0) {
				$password .= ("-".$word);
			} else {
				$password .= $word;
			}
				
		}
		if(isset($add_number)) {
				$password .= rand(0, 9);
		}
		if(isset($add_symbol)) {
				$password .= $symbol[array_rand($symbol,1)];
		}
			
	}
	return View::make("xkcd-password")->with('password', $password);
	
});


Route::post('/password-generator', function()
{

	$path = app_path().'/database/wordlist.txt';
	$num_of_word = Input::get('num_of_word');
	$uppercase_first = Input::get('uppercase_first');
	$add_number = Input::get('add_number');
	$add_symbol = Input::get('add_symbol');

	$symbol = array('!', '@', '#', '$', '^', '&', '*');
	if($wordlist = file($path, FILE_IGNORE_NEW_LINES)) {
		
		$password = "";
		$count = (empty($num_of_word) ? 4 : $num_of_word);
		for ($i = 0; $i < $count; $i++) {
			$word = $wordlist[rand(0, 4999)];
			if (isset($uppercase_first)) {
				$word = ucfirst($word);
			}
			if ($i != 0) {
				$password .= ("-".$word);
			} else {
				$password .= $word;
			}
				
		}
		if(isset($add_number)) {
				$password .= rand(0, 9);
		}
		if(isset($add_symbol)) {
				$password .= $symbol[array_rand($symbol,1)];
		}
			
	}
	return View::make("xkcd-password")->with('password', $password);
	
});
