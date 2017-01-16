@extends("layouts.master")
@section("content")
<script type="text/javascript" src="{{ URL::to('/js/dash.js') }}"></script>
<div id="dashDiv">
	<a href="/new" class="btn-success btn-md" id="addpar"><center><img src="{{ URL::to('icons/add-house_24.png') }}"/></center></a>
	<div id="partma_list"></div>	
</div>
@endsection 
