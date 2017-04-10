@extends("layouts.master")
@section("content")
<script type="text/javascript" src="/js/search.js"></script>
	<div id="constMenu">
				<div id="MenuHead">
					<span id="MenuTitle"></span>
					<a id="closeMenu"><span class="glyphicon glyphicon-remove"> </span> {{ trans("home.close") }}</a>
				</div><hr />
				<div id="dynForm">
				   <!-- 
				We need 3 div for 3 links 
					-->
				<div class="collapse" id="newsearch">
					<form action="search">
				  <div class="form-group">
					<select name="ret_city" class="form-control">
						<option value="-1">{{ trans('new.city') }}</option>
						@foreach($cities as $city)
						<option value="{{ $city->id }}">{{ trans("cities.".$city->id) }}</option>
						@endforeach
					</select>
				  </div>
				    <div class="form-group">
					<select name="ret_loc" class="form-control">
						<option value="-1">{{ trans('new.rentbuy') }}</option>
						<option value="1">{{ trans('new.rent') }}</option>
						<option value="2">{{ trans('new.buy') }}</option>
					</select>
				    </div>
				    <div class="form-group">
					<select name="ret_type" class="form-control">
						<option value="-1">{{ trans('new.type') }}</option>
						<option value="ap" >{{ trans('new.ap')}}</option>
						<option value="vi">{{ trans('new.vi')}}</option>
						<option value="ho" >{{ trans('new.ho')}}</option>
						<option value="fl" >{{ trans('new.fl')}}</option>
						<option value="st" >{{ trans('new.st')}}</option>
						<option value="la" >{{ trans('new.la')}}</option>
					</select>
				  </div>
			<button class="btn btn-md btn-info"><span class="glyphicon glyphicon-search"></span> {{ trans('home.search') }}</button>	
					</form>					
				</div>
			<!-- 
				Advanced Search Box	

			-->
				<div class="collapse" id="searchcara">
					<a data-target="#price"  ><b>{{ trans('dashboard.priceval') }}</b><span class="glyphicon glyphicon-chevron-left"></span></a><br>
					<a data-target="#surface" ><b>{{ trans('dashboard.surfaceval') }}</b><span class="glyphicon glyphicon-chevron-left"></span></a><br>		
					<a data-target="#retailcara" ><b>{{ trans('dashboard.nbroomsval') }}</b><span class="glyphicon glyphicon-chevron-left"></span></a><br>	
					<a data-target="#nbroom" ><b>{{ trans('dashboard.retailcara') }}</b><span class="glyphicon glyphicon-chevron-left"></span></a>
				
				</div>
			<!-- 
				Search Sort
			-->
				<div class="collapse" id="sortRes">
					<form action="" method="GET">
						<input type="radio" value="1"  name="sortby"/> {{ trans("home.newest") }} <br>
						<input type="radio" value="2"  name="sortby"/> {{ trans("new.minprice") }}<br>
						<input type="radio" value="3"  name="sortby"/> {{ trans("new.maxprice") }}<br>
						<input type="radio" value="4"  name="sortby"/> {{ trans("new.minsurf") }}<br>
						<input type="radio" value="5"  name="sortby"/> {{ trans("new.maxsurf") }}<br>
					</form>
				</div>
		</div>
	</div>
	
	<div id="dynmRes">
	<div id="addSearch">
		<div class="panel panel-default">
			<div class="panel-body">
		<span class="glyphicon glyphicon-map-marker"></span>
	{{ trans("cities.".$citySel) }} 
			</div><div class="panel-footer">
	<span><span class="glyphicon glyphicon-tags"></span>{{  trans("dashboard.".$rent."_rt") }}</span>
	<span><span class="glyphicon glyphicon-tasks"></span>{{ trans("new.".$type) }}</span>
	<span><span class="glyphicon glyphicon-home"></span>{{ $data->total() }}</span>
			</div>
		</div>
	</div><br>
		<table class="mnusearch fl">
			<tr>
			<td><span class="glyphicon glyphicon-search"></span><a data-toggle="collapse" data-target="#newsearch"> {{ trans("home.newsearch") }}</a></td>
			<td><span class="glyphicon glyphicon-filter"></span><a data-toggle="collapse" data-target="#searchcara"> {{ trans("home.searchcara") }}</a></td>
			<td><span class="glyphicon glyphicon-align-center"></span><a data-toggle="collapse" data-target="#sortRes"> {{ trans("home.sort") }}</a></td>
			</tr>
		</table>
	</div>
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
