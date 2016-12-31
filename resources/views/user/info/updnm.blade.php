@extends("layouts.master")
@section("content")
<div class="panel panel-default">
	<div class="panel-heading" style="background-color:white !important;">{{trans("updnm.box_hd")}}</div>
	<div class="panel-body">
	@include("layouts.errors")

<form action="/nm" method="POST">
		<label for="fname">{{trans("updnm.fname_lb")}}</label>
		<input class="form-control" type="text" name="fname" placeholder=""/><br>
		<label for="fname">{{trans("updnm.lname_lb")}}</label>
		<input class="form-control" type="text" name="lname" placeholder=""/><br>
		<button class="btn btn-md btn-primary inp fl">{{trans("updnm.save")}}</button>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
</form><br>
<a href="/upd" class="btn btn-md btn-default fl">{{trans("updnm.cancel")}}</a>
</div>
</div>
@endsection
