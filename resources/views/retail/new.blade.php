@extends("layouts.master")

@section("content")
<script src="{{ URL::to('js/new.js') }}"></script>	
<div id="newpart">
				<form action="/newRetail" method="POST">
		<div  class="panel panel-default">
			<div class="panel-heading" style="background-color:white;">{{ trans('new.newpartma') }}</div>
			<div class="panel-body">
				    <div class="form-group">
					<label for="ret_address">{{ trans('new.address') }}</label>
					<div class="input-group" dir="ltr">
						<span class="input-group-addon bg-primary"><i class="glyphicon glyphicon-map-marker"></i></span>
						<input type="text" class="form-control" name="ret_address" dir="rtl"/>
					</div>
				    </div>
				    <div class="form-group">
					<select name="et_loc" class="form-control">
						<option>{{ trans('new.rentbuy') }}</option>
						<option>{{ trans('new.rent') }}</option>
						<option>{{ trans('new.buy') }}</option>
					</select>
				    </div>
				    <div class="form-group">
					<select name="ret_city" class="form-control">
						<option>{{ trans('new.city') }}</option>
						@foreach($cities as $city)
						<option value="{{ $city->id }}">{{ $city->name_ar }}</option>
						@endforeach
					</select>
				    </div>
				    <div class="form-group">
					<select name="ret_type" class="form-control">
						<option>{{ trans('new.type') }}</option>
						<option value="ap" >{{ trans('new.ap')}}</option>
						<option value="vi">{{ trans('new.vi')}}</option>
						<option value="ho" >{{ trans('new.ho')}}</option>
						<option value="fl" >{{ trans('new.fl')}}</option>
						<option value="st" >{{ trans('new.st')}}</option>
						<option value="la" >{{ trans('new.la')}}</option>
					</select>
				    </div>
				    	<div id="dynFrm">
				  		<!-- this will be changed using javascript -->
					</div>
				    <textarea class="form-control" rows="8" style="resize:none;" placeholder="{{ trans('new.info') }}"></textarea><br>
			</div>
		</div>
			<div class="panel panel-default">
				<div class="panel-body" id="img_div">
					<div class="fileUpld btn btn-success btn-lg">
						<span class="glyphicon glyphicon-camera"></span>
						<input type="file" name="img[]" class="upload" id="upld" cs="{{ csrf_token() }}" required />
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" style="background-color:white;">Info Post</div>
				<div class="panel-body">
				
						
				    <div class="form-group">
					<div class="input-group" dir="ltr">
						<span class="input-group-addon bg-primary"><i class="glyphicon glyphicon-earphone"></i></span>
						<input type="text" class="form-control" name="post_phone" dir="rtl" placeholder="phone"/>
					</div>
				    </div>
				    <div class="form-group">
						<input type="text" class="form-control" name="post_addresse" placeholder="adresse"/>
					</div>
				    </div>
				
				</div>
			</div>
			<button class="btn btn-primary inp fl">{{ trans('new.save') }}</button>
				</form>	
</div>
@endsection
