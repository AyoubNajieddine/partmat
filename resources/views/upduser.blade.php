@extends("layouts.master")
@section("content")
	 <div id="upd">
	 		<div class="panel panel-default">
	 					<table class="table">
	 						<tr>
	 							<td>Email<br><small>{{ (Auth::user())->email }}</small></td>
	 							<td align="right"><span class="glyphicon glyphicon-menu-right"></span></td>
	 						</tr>
	 						<tr>
	 							<td>Password</td>
	 							<td align="right"><span class="glyphicon glyphicon-menu-right"></span></td>
	 						</tr>
	 						<tr>
	 							<td>Name<br><small>{{ (Auth::user())->full_name }}</small></td>
	 							<td align="right"><span class="glyphicon glyphicon-menu-right" margin></span></td>
	 						</tr>
	 					</table>
	 		</div>
	 	
	 </div>
	 <script src="{{ URL::to('js/setting.js') }}"></script>
@endsection