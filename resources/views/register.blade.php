@extends("layouts.master")
@section("content")
		<div id="formDiv">
			<form action="/addUser" method="POST">
				<label for="full_name">{{trans("register.name_lb") }}</label>
				<input type="text" class="form-control" name="full_name" /><br>
				<label for="email_name">{{trans("register.email_lb") }}</label>
				<input type="text" class="form-control" name="email" />
				<br>
				<label for="password">{{trans("register.password_lb") }}</label>
				<input type="password" class="form-control" name="password" /><br>
				<input type="submit" class="btn btn-primary btn-lg inp fl" value="{{trans('register.register_btn') }}" />
				<input name="_token" value="{{ csrf_token() }}" type="hidden" />
			</form>
		</div>
@endsection
