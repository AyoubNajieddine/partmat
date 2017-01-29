@extends("layouts.master")
@section("content")
<script src="/js/update.js"></script>
	<div id="updpartma">
		  <div id="updpartma_menu">
			<table class="table table-bordered">
				<tr>
					<td style="position:relative;">	
				<a  data="#rent" class="edit_opt"></a>
						<h4>{{ trans("dashboard.retail") }} {{ trans("dashboard.".$retail->rent."_rt") }}</h4>
					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
					</td>
				</tr>
				<tr>
					<td style="position:relative;">
				<a  data="#type" class="edit_opt"></a>
			<h4>{{ trans("new.type") }}<br><small>{{ trans("new.".$retail->type) }}</small></h4>	

					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
					</td>
				</tr>
				<tr>
					<td style="position:relative;">
				<a  data="#address" class="edit_opt"></a>
			<h4>{{ trans("new.address") }}<br><small>{{ $retail->adresse_retail }}</small></h4>

					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
					</td>
				</tr>
				<tr>
					<td style="position:relative;">
				<a  data="#price" class="edit_opt"></a>
			<h4>{{ trans("new.price") }}<br><small>{{ $retail->price }} {{ trans("new.currency")}}</small></h4>

					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
					</td>
				</tr>
				<tr>
					<td style="position:relative;">
				<a  data="#surface" class="edit_opt"></a>
			<h4>{{ trans("new.surface") }}<br><small>{{ $retail->surface }} m²</small></h4>
			
					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
					</td>
				</tr>
				<tr>
					<td style="position:relative;">
				<a  data="#phone" class="edit_opt"></a>
					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
			<h4>{{ trans("new.phone") }}<br><small>{{ $retail->phone }}</small></h4>
				
					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
					</td>
				</tr>
				<tr>
					<td style="position:relative;">	
				<a  data="#rent" class="edit_opt"></a>
						<h4>{{ trans("new.city")}}<br><small>{{ $retail->city->name_ar}}</small></h4>	
					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
					</td>
				</tr>
			@if($retail->type != "st" && $retail->type != "la")
				<tr>
					<td style="position:relative;">	
						<h4>{{ trans("new.carac") }}<br><br><small>
		<ul>
		@if($retail->balc)
		<li>	{{ trans("new.balc") }}</li> 
		@endif
		@if($retail->gar)	
			<li>{{ trans("new.gara") }}</li>
		@endif
		@if($retail->furn)
			<li>{{ trans("new.furn") }}</li>
		@endif
		</ul>	
	</small></h4>
			
					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
					</td>
				</tr>
			
				<tr>
					<td style="position:relative;">
				<a  data="#nbRooms" class="edit_opt"></a>
					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
			<h4>{{ trans("new.piece") }}<br><small>{{ $retail->nbRooms }}</small></h4>
				
					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
					</td>
				</tr>
				<tr>
				 @endif
				<tr>
					<td style="position:relative">	
						<h4>{{ trans("dashboard.editpic")}}</h4>

					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
					</td>
				</tr>
				<tr>
					<td style="position:relative">	
						<h4>{{ trans("new.zipcode")}}<br><small>{{ $retail->zipcode }}</small></h4>

					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
					</td>
				</tr>
						<tr>
					<td style="position:relative">	
						<h4>{{ trans("new.info")}}<br><small>{{ $retail->info }}</small></h4>

					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
					</td>
				</tr>
				<tr>
					<td style="position:relative">	
						<h4>{{ trans("new.location")}}</h4>

					<a href="#" class="glyphicon glyphicon-chevron-left chev_link"></a>
					</td>
				</tr>
			
			</table>
		</div>
			<!-- Update Partma -->
		<div id="updpartma_data">
				<!-- Error Box-->
			<div class="alert alert-danger" style="display:none;">
				<ul></ul>
			</div>
					<!-- Address -->
			 <div id="address" style="display:none;">
				<form action="update/address/{{ $id }}" method="POST">
				   <div class="panel panel-default">
						<div class="panel-heading" style="background-color:white;"><b>{{ trans("dashboard.edit") }} {{ trans("new.address") }}</b></div>
						<div class="panel-body">
					<input type="text" name="adresse_retail" class="form-control" placeholder="{{ trans('new.address') }}" /><br>
					<center>
					<button class="btn btn-primary btn-md inp ">{{ trans("updpwd.save") }}</button>
					<a class="btn btn-default btn-md cancel" data="#address">{{ trans("updpwd.cancel") }}</a>
					</center>
						</div>
					</div>
				</form>
			</div>
					<!-- rent -->
			 <div id="rent" style="display:none;">
				<form action="update/rent/{{ $id }}" method="POST">
				   <div class="panel panel-default">
					<div class="panel-body">
						<!-- rent data -->
				    <div class="form-group">
					<select name="ret_loc" class="form-control">
						<option value="-1">{{ trans('new.rentbuy') }}</option>
						<option value="1">{{ trans('new.rent') }}</option>
						<option value="2">{{ trans('new.buy') }}</option>
					</select><br>
					<center>
					<button class="btn btn-primary btn-md inp ">{{ trans("updpwd.save") }}</button>
					<a class="btn btn-default btn-md cancel" data="#rent">{{ trans("updpwd.cancel") }}</a>
					</center>
					</div>
				  </div>
				</form>
			</div>
					<!-- type -->
			 <div id="type" style="display:none;">
				<form action="update/type/{{ $id }}" method="POST">
				   <div class="panel panel-default">
					<div class="panel-heading" style="background-color:white;"><b>{{ trans("dashboard.edit") }} {{ trans("new.type") }}</b></div>
					<div class="panel-body">
						<!-- rent data -->
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
					<center>
					<button class="btn btn-primary btn-md inp ">{{ trans("updpwd.save") }}</button>
					<a class="btn btn-default btn-md cancel" data="#type">{{ trans("updpwd.cancel") }}</a>
					</center>
					</div>
				  </div>
				</form>
			</div>
					<!-- price -->
			 <div id="price" style="display:none;">
				<form action="update/price/{{ $id }}" method="POST">
				   <div class="panel panel-default">
					<div class="panel-heading" style="background-color:white;"><b>{{ trans("dashboard.edit") }} {{ trans("new.price") }}</b></div>
					<div class="panel-body">
						<!-- rent data -->
				    <div class="form-group">
					<label for="ret_price"></label>
					<div class="input-group" dir="ltr">
						<span class="input-group-addon"><i>{{ trans('new.currency') }}</i></span>
						<input type="text" class="form-control" name="ret_price" dir="rtl" placeholder="{{ trans('new.price') }}"/>
					</div>
				    </div>
					<center>
					<button class="btn btn-primary btn-md inp ">{{ trans("updpwd.save") }}</button>
					<a class="btn btn-default btn-md cancel" data="#price">{{ trans("updpwd.cancel") }}</a>
					</center>
					</div>
				  </div>
				</form>
			</div>
					<!-- surface -->
			 <div id="surface" style="display:none;">
				<form action="update/surface/{{ $id }}" method="POST">
				   <div class="panel panel-default">
					<div class="panel-heading" style="background-color:white;"><b>{{ trans("dashboard.edit") }} {{ trans("new.surface") }}</b></div>
					<div class="panel-body">
						<!-- rent data -->
				    <div class="form-group">
					<div class="input-group" dir="ltr">
						<span class="input-group-addon">	
						<i>m<sup>2</sup></i>
						</span>
						<input type="text" class="form-control" name="ret_surface" placeholder="{{ trans('new.surface') }}" dir="rtl"/>
					</div>	
				    </div>
					<center>
					<button class="btn btn-primary btn-md inp ">{{ trans("updpwd.save") }}</button>
					<a class="btn btn-default btn-md cancel" data="#surface">{{ trans("updpwd.cancel") }}</a>
					</center>

					</div>
				  </div>
				</form>
			</div>
					<!-- phone -->
			 <div id="phone" style="display:none;">
				<form action="update/phone/{{ $id }}" method="POST">
				   <div class="panel panel-default">
					<div class="panel-heading" style="background-color:white;"><b>{{ trans("dashboard.edit") }} {{ trans("new.phone") }}</b></div>
					<div class="panel-body">
						<!-- rent data -->
					</div>
				  </div>
				</form>
			</div>
					<!-- City -->
			 <div id="city" style="display:none;">
				<form action="update/city/{{ $id }}" method="POST">
				   <div class="panel panel-default">
					<div class="panel-heading" style="background-color:white;"><b>{{ trans("dashboard.edit") }} {{ trans("new.city") }}</b></div>
					<div class="panel-body">
						<!-- rent data -->
					</div>
				  </div>
					<label for="address">{{ trans("new.city") }}</label>
				</form>
			</div>
					<!-- carac -->
			 <div id="carac" style="display:none;">
				<form action="update/carac/{{ $id }}" method="POST">
				   <div class="panel panel-default">
					<div class="panel-heading" style="background-color:white;"><b>{{ trans("dashboard.edit") }} {{ trans("new.carac") }}</b></div>
					<div class="panel-body">
						<!-- rent data -->
					</div>
				  </div>
				</form>
			</div>
					<!-- pictures -->
			 <div id="pictures" style="display:none;">
				<form action="update/pictures/{{ $id }}" method="POST">
				   <div class="panel panel-default">
					<div class="panel-heading" style="background-color:white;"><b>{{ trans("dashboard.edit") }} {{ trans("new.pictures") }}</b></div>
					<div class="panel-body">
						<!-- rent data -->
					</div>
				  </div>
				</form>
			</div>
		</div>
	</div>	
@endsection
