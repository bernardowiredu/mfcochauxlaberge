@layout('layout')

@section('content')
<div id="content">
	<h2>Login</h2>
	<form method="post" action="{{ URL::to('/login') }}">
		<p>
			<label for="username">Username</label><input type="text" id="username" name="username" placeholder="Username" />
		</p>
		<p>
			<label for="password">Password</label><input type="password" id="password" name="password" placeholder="Password" />
		</p>
		<p class="txtcenter">
			<input type="submit" value="Login" />
		</p>
	</form>
</div>
@endsection