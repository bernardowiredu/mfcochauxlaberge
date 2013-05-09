<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>{{ $title }} - mfcochauxlaberge.ca</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('css/knacss.css') }}
	{{ HTML::style('css/style.css') }}
</head>
<body>
	<div id="page" class="line gut center">
		<header id="header" class="mod txtcenter">
			<h1>Marc-François Cochaux-Laberge</h1>
		</header>
		<nav id="menu" class="mod center txtcenter">
			<p class="bigger">
				<a href="{{ URL::to('home') }}" title="Home">{{ __('general.home') }}</a>
				<a href="{{ URL::to('portfolio') }}" title="Portfolio">{{ __('general.portfolio') }}</a>
				<a href="{{ URL::to('lab') }}" title="Lab">{{ __('general.lab') }}</a>
				<!--<a href="#" title="En français"><i>{{ Lang::line('general.french')->get('fr') }}</i></a>-->
			</p>
		</nav>
		<div id="middle" class="mod center">
			@yield('content')
		</div>
		<footer id="footer" class="mod txtcenter">
		</footer>
	</div>
</body>
</html>