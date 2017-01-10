@extends("layouts.master")

@section("content")
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color:white;">{{ trans("reset.reset_welc") }}</div>
			<div class="panel-body">
				<form action="/reset/email" method="POST">
					<input type="text" class="form-control" placeholder="{{ trans('updeml.email_lb') }}" name="email" />
					<br>
					<input name="_token" type="hidden" value="{{ csrf_token() }}">
					<button class="btn btn-primary fl inp">{{ trans("reset.reset") }}</button>
				</form>
			</div>
		</div>
@endsection
