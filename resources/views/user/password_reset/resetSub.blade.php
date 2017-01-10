@extends("layouts.master")

@section("content")
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color:white;">{{ trans("reset.pwd_welc") }}</div>
			<div class="panel-body">
				<form action="/reset/password" method="POST">
					<input type="hidden" name="token" value="{{ $tkn }}" />
					<input type="text" name="email" class="form-control" placeholder="{{ trans('updeml.email_lb') }}" /><br>
					<input type="password" class="form-control" placeholder="{{ trans('updpwd.password') }}" name="password" />
					<br>
					<input type="password" class="form-control" placeholder="{{ trans('updpwd.com_password') }}" name="password_confirmation" />
					<br>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button class="btn btn-primary fl inp">{{ trans("updeml.save") }}</button>
				</form>
			</div>
		</div>
@endsection
