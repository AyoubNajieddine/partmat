<div id="addSearch">
	<table class="fl table-bordered ">
		<tr>
			
			<td><a class="text-info" >{{ trans("home.newsearch") }}</a></td>
			<td><a class="text-info" >{{ trans("home.searchcara") }}</a></td>
		</tr>
	</table>
	</div>
	<br>
	<div class="collapse" id="advSearch">
		<form method="GET" action="/search">
				  <div class="form-group">
					<select name="ret_city" class="form-control">
						<option value="-1">{{ trans('new.city') }}</option>
						@foreach($cities as $city)
						<option value="{{ $city->id }}">{{ trans("cities.".$city->id) }}</option>
						@endforeach
					</select>
					<script>$("select[name=ret_city]").val({{ $_GET['ret_city'] }});</script>
				  </div>
				    <div class="form-group">
					<select name="ret_loc" class="form-control">
						<option value="-1">{{ trans('new.rentbuy') }}</option>
						<option value="1">{{ trans('new.rent') }}</option>
						<option value="2">{{ trans('new.buy') }}</option>
					</select>
					<script>$("select[name=ret_city]").val({{ $_GET['ret_loc']}});</script>
				    </div>
				    <div class="form-group">
					<select name="ret_type" class="form-control">
                                            
                                                <option value="-1" >{{ trans('new.type') }}</option>
						<option value="ap" >{{ trans('new.ap')}}</option>
						<option value="vi" >{{ trans('new.vi')}}</option>
						<option value="ho" >{{ trans('new.ho')}}</option>
						<option value="fl" >{{ trans('new.fl')}}</option>
						<option value="st" >{{ trans('new.st')}}</option>
						<option value="la" >{{ trans('new.la')}}</option>
					</select>
				  </div>
			<button class="btn btn-md btn-info"><span class="glyphicon glyphicon-search"></span> {{ trans('home.search') }}</button>
		</form>			
	</div>
