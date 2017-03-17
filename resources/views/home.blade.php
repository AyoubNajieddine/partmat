@extends("layouts.master")
@section("content")
						
	<script type="text/javascript" src="js/home.js"></script>
		<div id="searchBox">
			<h3>{{ trans('home.search_tit') }}<br><small>{{ trans('home.title') }}</small></h3>
			<form action="search" >
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
		</div><br>
		<div id="listCity">
			<a href="/login" id="putcomm" class="btn btn-success"><span class="glyphicon glyphicon-menu-right"></span>{{ trans('home.comm') }}</a>
			<ul>
			<li class="cityref" style="background-image:url(http://r-ec.bstatic.com/images/city/600x200/119/119052.jpg);">
					<h3><b>{{ trans("cities.170") }}</b></h3>
					<span class="glyphicon glyphicon-menu-right"></span>
					<a class="citylink" href="/search/170/-1/-1/"></a>
				</li>
				<li class="cityref" style="background-image: url(http://r-ec.bstatic.com/images/city/600x200/119/119018.jpg);">
					<h3><b>{{ trans("cities.173") }}</b></h3>
					<span class="glyphicon glyphicon-menu-right"></span>
					<a class="citylink" href="/search/173/-1/-1/"></a>
				</li>
			</ul>
		</div>
@endsection
