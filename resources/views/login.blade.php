@extends("layouts.master")

@section("content")
	<div id="loginDiv">
	<form action="logUser" method="POST">
		<input type="text" name="email" placeholder="Email" class="form-control" /><br>
		<input type="password" name="password" placeholder="Password" class="form-control" /><br>
		<input type="submit" value="Login" class="btn btn-lg btn-primary inp fl" />
		<input type="hidden" value="{{ csrf_token() }}" name="_token"/>
	</form>
	</div>
@endsection
