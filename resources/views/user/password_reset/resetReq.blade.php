@extends("layouts.master")

@section("content")
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color:white;">Reset My Password</div>
			<div class="panel-body">
				<form action="/reset/email" method="POST">
					<input type="text" class="form-control" placeholder="Email Address" name="email" />
					<br>
					<input name="_token" type="hidden" value="{{ csrf_token() }}">
					<button class="btn btn-primary fl inp">reset</button>
				</form>
			</div>
		</div>
@endsection
