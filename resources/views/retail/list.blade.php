		@if(sizeof($objArray) > 0)
			@foreach($objArray as $retail)
			
		<div class="panel panel-default ret_dash">
			<div class="panel-body">
			<div class="partmat_pic pull-left"><img src='thumbs/{{ $retail->pics }}' width='130' height='130' /></div>
		<div class="partmat_data">
			<span class="text-success">{{ trans("new.".$retail->type) }}</span>,
			<span style="font-size:14px;">{{ $retail->city }}</span>,
			<span>{{ $retail->price }} {{ trans("new.currency")}}</span>,	
			<span>{{ trans("dashboard.".$retail->rent) }},....</span>
			<br>
			<span><small>{{ trans("dashboard.date") }} {{ $retail->dt }}</small></span>
			<table class="partmat_btn">
			<tr><td>
			<a class="btn btn-sm btn-default fl" href="dashboard/updretail/{{ $retail->id}}" >{{ trans("dashboard.edit") }}</a>
			</td><td>
			<a class="btn btn-sm btn-default fl" href="#" >{{ trans("dashboard.delete") }}</a>
			</td></tr>
			</table>
				</div>
			</div>

		</div>
			
			@endforeach
		@else 
			<small>{{ trans("dashboard.none") }}</small>

		@endif
