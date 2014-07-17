<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title', 'Trible generator')</title>
		<meta charset="utf-8">
		<link href="styles/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="styles/style.css">
	</head>

	<body>
		<div class="container">

			@yield('content')
			@yield('paragraphs')
			@yield('users')

		</div>


		<footer>Developed by Zibo Li</footer>

	<body>


	
</html>