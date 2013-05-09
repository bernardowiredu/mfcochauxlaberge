@layout('layout')

@section('content')
<div id="content">
	<h2>{{ __('general.home') }}</h2>
	<p>Hi, my name is written up there and I am a Web developer who lives near Montréal, Québec. I am currently a full-time student at Concordia University.</p><p>I support the open source movement and I want a free Internet (but I don't mind paying for it). I am a member of the <a href="https://www.pirateparty.ca/" title="Pirate Party of Canada">Pirate Party of Canada</a>.</p>
	<h3>{{ __('general.ontheweb') }}</h3>
	<ul>
		<li><a href="https://github.com/mfcochauxlaberge" title="mfcochauxlaberge on GitHub">GitHub</a></li>
		<li><a href="http://mfcochauxlaberge.tumblr.com/" title="MFCL on Tumblr">Tumblr</a></li>
		<li><a href="https://twitter.com/MarcFrancoisCL" title="MarcFrancoisCL on Twitter">Twitter</a></li>
		<li><a href="http://www.youtube.com/user/SuperM92" title="SuperM92 on YouTube">YouTube</a></li>
	</ul>
	<h3>{{ __('general.skills') }}</h3>
	<p>I specialize in Web development, but I prefer to work on the server side. I know the most popular technologies like <b>HTML</b>, <b>CSS</b>, <b>JavaScript</b> and <b>PHP</b>. I am also learning the <a href="http://playframework.org" alt="Play framework">Play framework</a> in <b>Scala</b> when I have some time.</p>
	<p>School gave me excellent skills in <b>Java</b>. I would say that it is the language I used the most so far.</p>
	<p>Most of the time I work on <b>Linux</b> and I use <b>Eclipse</b> when I need an IDE.</p>
</div>
@endsection