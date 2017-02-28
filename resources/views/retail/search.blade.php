@extends("layouts.master")
@section("content")

	<script type="text/javascript" src="js/search.js"></script>
	<div id="searchData" class="row">
	<div id="extSearch" class="row"></div>
		@for($i = 1; $i < 10; $i++)	
		@foreach($data as $retail)
	<a href="/viewret/{{ $retail->id }}" class="lnkRet col-md-6">
	<div  class="retailElem panel panel-default">
	<img src="thumbs/{{ ($retail->pics)[0]->picture_name}}" class="imgSide"/>
		<p>
		<strong>{{ $retail->price}} {{ trans("new.currency") }} </strong><span class="label label-success">{{ trans("new.".$retail->type) }}</span><br>
		<strong><span class="text-info">{{ trans("cities.".$retail->city_id) }}</span></strong><br>
		<strong><span class="text-success"><u>{{ trans("dashboard.".$retail->rent."_rt") }}</u></span></strong>,{{ $retail->surface}} m<sup>2</sup>,
		<span class="text-info">{{ trans("new.more") }}...</span>
		</p>
	</div>
	</a>
		@endforeach
		@endfor
	</div>	
@endsection
