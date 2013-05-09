@layout('layout')

@section('content')
<div id="content">
	<h2>{{ __('general.lab') }}</h2>
	<p>I put on the page some code and small programs I made that can't be considered real projects.</p>
	<h3>{{ __('general.games') }}</h3>
	<div class="line">
		{{ HTML::image('img/portfolio/noimage.jpg', 'Slake', array('class' => 'portfolio-img left phone-hidden')) }}
		<h4>Slake</h4>
		<p>
			<a href="https://github.com/mfcochauxlaberge/slake" title="Source code on GitHub">Source code on GitHub</a><br />		
			Simple snake-like game written in Java with the Slick library.
		</p>
		<div class="line"></div>
	</div>
</div>
@endsection