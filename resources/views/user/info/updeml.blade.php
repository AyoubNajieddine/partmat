@extends("layouts.master")
@section("content")
<div class="panel panel-default">
<div class="panel-heading" style="background-color:white !important;">{{trans("updeml.box_hd")}}</div>
<div class="panel-body">
	@include("layouts.errors")
<form action="/eml" method="POST">
		<label for="email">{{trans("updeml.email_lb")}}</label>
		<input class="form-control" name="email" type="text"/><br>
		<label for="cr_email">{{trans("updeml.cm_email_lb")}}</label>
		<input class="form-control" name="cr_email" type="text"/><br>
		<button class="btn btn-md btn-primary fl inp">{{trans("updeml.save")}}</button>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form><br>
<a href="/upd" class="btn btn-md btn-default fl">{{trans("updeml.cancel")}}</a></div>
</div>
@endsection