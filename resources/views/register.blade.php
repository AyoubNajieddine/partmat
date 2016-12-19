@extends("layouts.master")
@section("content")
		<div id="formDiv">
			<form action="/addUser" method="POST">
				<label for="full_name">Full name</label>
				<input type="text" class="form-control" name="full_name" />
				<label for="email_name">Email</label>
				<input type="text" class="form-control" name="email" />
				<label for="password">password</label>
				<input type="password" class="form-control" name="password" /><br>
				<input type="submit" class="btn btn-primary btn-lg inp fl" value="register" />
				<input name="_token" value="{{ csrf_token() }}" type="hidden" />
			</form>
		</div>
@endsection
