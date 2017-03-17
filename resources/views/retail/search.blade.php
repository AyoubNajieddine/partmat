@extends("layouts.master")
@section("content")



	<script type="text/javascript" src="/js/search.js"></script>
		
	<div class="menuSearchDiv hideSearchDiv">
		<div class="menuSearch">
			
		</div>
	</div>

	<div id="addSearch">
		<a href="/"></a>
		<div class="panel panel-default">
			<div class="panel-body">
		<span class="glyphicon glyphicon-map-marker"></span>
	{{ trans("cities.".$city) }} 
			</div><div class="panel-footer">
	<span><span class="glyphicon glyphicon-tags"></span>{{  trans("dashboard.".$rent."_rt") }}</span>
	<span><span class="glyphicon glyphicon-tasks"></span>{{ trans("new.".$type) }}</span>
	<span><span class="glyphicon glyphicon-home"></span>{{ $data->total() }}</span>
			</div>
		</div>
	</div><br>
		<table class="fl">
			<tr>
			<td><span class="glyphicon glyphicon-filter"></span><a href="#"> {{ trans("home.searchcara") }}</a></td>
			<td><span class="glyphicon glyphicon-align-center"></span><a href="#"> {{ trans("home.sort") }}</a></tr>
			</tr>
		</table>
	<br>
	   @if($data->total() >  0 && $data->currentPage() <= $data->total())
	<div id="searchData" class="row">
		@foreach($data as $retail)
	<a href="/viewret/{{ $retail->id }}" class="lnkRet col-md-6 col-xs-12">
	<div class="retailElem panel panel-default">
	<img src="@if(count($retail->pics) > 0) /thumbs/{{ ($retail->pics)[0]->picture_name }} @else /icons/home.png @endif" class="imgSide"/>
		<p>
		<strong>{{ $retail->price}} {{ trans("new.currency") }} </strong><span class="label label-success">{{ trans("new.".$retail->type) }}</span><br>
		<strong><span class="text-info">{{ trans("cities.".$retail->city_id) }}</span></strong><br>
		<strong><span class="text-success"><u>{{ trans("dashboard.".$retail->rent."_rt") }}</u></span></strong>,{{ $retail->surface}} m<sup>2</sup>,
		<span class="text-info">{{ trans("new.more") }}...</span>
		</p>
	</div>
	</a>
		@endforeach

	</div><br>
			
		@if($data->hasMorePages() == true || $data->previousPageUrl() != null)
	<div class="panel-default panel-body pagin panel">
	<center>
	@if($data->nextPageUrl() != null ) <a href="{{ $data->nextPageUrl() }}" class="glyphicon glyphicon-menu-right" dir='ltr'></a> @endif
	<b>{{ trans("home.page") }} {{ $data->currentPage() }}</b>
	@if($data->previousPageUrl() != null) <a href="{{ $data->previousPageUrl() }}"  class="glyphicon glyphicon-menu-left" dir="ltr"></a> @endif
	</center>
	</div>	
		@endif
	   @else
		<div class="panel panel-default ">
			<center><h3>{{ trans("home.nothing") }}</h3></center>
	       </div>
	@endif
@endsection
