@extends("layouts.master")
@section("content")
<div id="dashDiv">
	<a href="/new" class="btn-success btn-md" id="addpar"><center><img src="{{ URL::to('icons/add-house_24.png') }}"/></center></a>
<?php 
//{{trans("dashboard.new_btn")}} 
?>
</div>
@endsection 
