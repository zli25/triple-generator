	@extends('_master')

@section('content')

	<h1>xkcd-style-password-generator</h1>

	<a href='/'>Goback home</a>
			<div class="password">
				<span>Password: </span>
				<span><?php echo $password; ?></span>
			</div>
			
			<form class="xkcd-password" action="/password-generator" method="GET">
				<div class="num_of_word">
					<label for="num_of_word">The number of words you want:</label>
					<select  name="num_of_word">
                  			<option value="1">1</option>
                  			<option value="2">2</option>
                  			<option value="3">3</option>
                  			<option value="4">4</option>
                  			<option value="5">5</option>
                  			<option value="6">6</option>
                  			<option value="7">7</option>
                  			<option value="8">8</option>
                  			<option value="9">9</option>
					</select>
				</div>

				<div class="add_number">
					<input type="checkbox" id="add_number" name="add_number" value="1">
					<label for="add_number">Include a number</label>
				</div>

				<div class="add_symbol">
					<input type="checkbox" id="add_symbol" name="add_symbol" value="1">
					<label for="add_symbol">Include a special symbol</label>
				</div>

				<div class="uppercase_first">
					<input type="checkbox" id="uppercase_first" name="uppercase_first" value="1">
					<label for="uppercase_first">Capitalize first letter</label>
				</div>
				
				<input id="submit" type="submit" value="generate password">
			</form>

			<div class="xkcd_info">
				<a href='http://xkcd.com/936/'>Learn more about xkcd password</a><br>
		
			<a href='http://xkcd.com/936/'>
				<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
			</div>

@stop

