@layout('layout')

@section('content')
<div id="content">
	<h2>{{ __('general.portfolio') }}</h2>
	<p>Here is a list of most of the projects I am currently working on or in which I have participated in the past.</p>
	<h3>{{ __('general.websites') }}</h3>
	{{ HTML::image('img/portfolio/constructiongg.jpg', 'Site Web constructiongg.com', array('class' => 'portfolio-img left phone-hidden')) }}
	<h4>Construction GG</h4>
	<p>
		<a href="http://constructiongg.com" title="Construction GG">constructiongg.com</a><br />
		This is a very simple website made for someone I know. It is pure HTML and CSS.
	</p>
	<div class="line"></div>
	{{ HTML::image('img/portfolio/cabanonstroislacs.jpg', 'Site Web cabanonstroislacs.com', array('class' => 'portfolio-img left phone-hidden')) }}
	<h4>Cabanons Trois Lacs</h4>
	<p>
		<a href="http://cabanonstroislacs.com" title="Cabanons Trois Lacs">cabanonstroislacs.com</a><br />
		This is a very simple website made for someone I know. I used Laravel 3.
	</p>
	<div class="line"></div>
</div>
@endsection