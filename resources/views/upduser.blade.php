@extends("layouts.master")
@section("content")
	 <div id="upd">
	 		<div class="panel panel-default">
	 					<table class="table">
	 						<tr>
	 							<td><strong>{{trans("upduser.email_lb")}}</strong><br><small>{{ (Auth::user())->email }}</small></td>
	 							<td align="left" style="padding-top: 18px !important;"><span class="glyphicon glyphicon-menu-left"></span></td>
	 						</tr>
	 						<tr>
	 							<td><strong>{{trans("upduser.password_lb")}}</strong></td>
	 							<td align="left"><span class="glyphicon glyphicon-menu-left"></span></td>
	 						</tr>
	 						<tr>
	 							<td><strong>{{trans("upduser.name_lb")}}</strong><br><small>{{ (Auth::user())->full_name }}</small></td>
	 							<td align="left" style="padding-top: 18px !important;"><span class="glyphicon glyphicon-menu-left" margin></span></td>
	 						</tr>
	 						<tr>
	 							<td><strong>{{trans("upduser.delete_lb")}}</strong></td>
	 							<td align="left"><span class="glyphicon glyphicon-menu-left"></span></td>
	 						</tr>
	 					</table>
	 		</div>
	 	
	 </div>
	 <script src="{{ URL::to('js/setting.js') }}"></script>
@endsection