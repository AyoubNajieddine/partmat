@if(isset($tp))
		<!-- in case the House -->	
				    <div class="form-group">
					<label for="ret_price"></label>
					<div class="input-group" dir="ltr">
						<span class="input-group-addon"><i>{{ trans('new.currency') }}</i></span>
						<input type="text" class="form-control" name="ret_price" dir="rtl" placeholder="{{ trans('new.price') }}"/>
					</div>
				    </div>
				    <div class="form-group">
					<div class="input-group" dir="ltr">
						<span class="input-group-addon">	
						@if($tp != "la")
						<i>m<sup>2</sup></i>
						@else
						<i>{{ trans('new.hect') }}</i>
						@endif
						</span>
						<input type="text" class="form-control" name="ret_surface" placeholder="{{ trans('new.surface') }}" dir="rtl"/>
					</div>
				
				    </div>
	@if($tp != "la")
		<!-- in case not land or house -->
				    <div class="form-group" dir="ltr">
					
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-bed"></i></span>
					<select name="ret_type" class="form-control" style="text-align:right;">
							<option>{{ trans('new.piece') }}</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10+</option>
					</select>
					</div>
				    </div>
				@if($tp != "st")
				
					<label><input type="checkbox"  name="ret_balc" value="true">  {{ trans('new.balc') }}</label>
					<label><input type="checkbox" name="ret_gara" value="true"> {{ trans('new.gara') }}</label>
					<label><input type="checkbox" name="ret_furn" value="true"> {{ trans('new.furn') }}</label>
				@endif
	@endif

@endif
