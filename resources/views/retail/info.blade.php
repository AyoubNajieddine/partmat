@extends("layouts.master")
@section("content")
	<script src="/js/info.js"></script>
	<div id="infoDiv">
		<input type="hidden" id="picslnk" value="{{ $pics }}">
		<div class="navimg">
		<center>
		<img class="infoPics img-rounded" src="/thumbs/{{$pics[0]->picture_name }}"/>
		</center>
		</div><br>
		<center>
		<span class="glyphicon glyphicon-menu-right navImg navLeft"></span>	
		<span id="countImg"></span><span> of {{ count($pics) }}</span>
		<span class="glyphicon glyphicon-menu-left navImg navRight"></span>
		</center>
	<hr />

		<table class="table panel panel-default">
		
			<tr><th>{{ trans("new.city") }}</th><td>{{ trans("cities.".$infos->city_id) }}</td></tr>
			<tr><td colspan="2" style="text-align:center;"><b>{{ trans("dashboard.retail")  }} {{trans("dashboard.".$infos->rent."_rt") }}</b></td></tr>
			<tr><th>{{ trans("new.price") }}</th><td>{{ $infos->price }}</td></tr>
			<tr><th>{{ trans("new.surface") }}</th><td>{{ $infos->surface }} m<sup>2</sup></td></tr>
			<tr><th>{{ trans("new.type") }}</th><td>{{ trans("new.".$infos->type) }}</td></tr>
			<tr><th>{{ trans("new.address") }}</th><td>{{ $infos->adresse_retail }}</td></tr>
		</table>
		<div class="panel panel-default">
			<div class="panel-body">
				{{ $infos->info }}
			</div>
		</div>
			<!-- in some cases this might not be seen -->
			@if($infos->type != "la" && $infos->type != "st")
		<table class="table panel panel-default">
			<tr><th>{{ trans("new.piece") }}</th><td>{{ $infos->nbRooms }}</td></tr>
			<tr><th>{{ trans("new.carac") }}</th><td>
			<ul>
			@if($infos->gar == 1) <li> {{ trans("new.gara") }} </li> @endif
			@if($infos->balc == 1) <li> {{ trans("new.balc") }} </li> @endif
			@if($infos->furn == 1) <li> {{ trans("new.furn") }} </li> @endif

			</ul>
			</td></tr>
		</table>
			@endif 
			<button class="phn glyphicon glyphicon-phone btn btn-success btn-sm" value="{{ $infos->phone }}"></button><span>{{ $infos->phone }}</span>
	</div>
@endsection

