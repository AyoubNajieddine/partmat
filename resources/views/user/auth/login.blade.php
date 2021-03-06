@extends("layouts.master")

@section("content")
	@include("layouts.errors")
	<div class="panel panel-default">
	<div class="panel-body">
	<div id="loginDiv">
	<form action="logUser" method="POST">
		<input type="text" name="email" placeholder="{{trans('login.user_holder')}}" class="form-control" value="{{ Request::old('email') }}" />
		
		<br>
		<input type="password" name="password" placeholder="{{trans('login.password_holder')}}" class="form-control"/>
		<div class="checkbox">
  		<label><input type="checkbox" value="true" name="remember"><span style="padding:0 21px;">{{ trans("login.remember") }}</span></label>
		</div>
		<input type="submit" value="{{trans('login.btn_login')}}" class="btn btn-lg btn-primary inp fl" />
		<input type="hidden" value="{{ csrf_token() }}" name="_token"/>
	</form>
	</div><br>
		<hr />
		<a href="/register" class="btn btn-lg fl btn-success">{{ trans("login.btn_register") }}</a>
		<br><br>
		<center><a href="/resetReq">{{ trans("login.forgot") }}</a></center>
	</div></div>
@endsection
