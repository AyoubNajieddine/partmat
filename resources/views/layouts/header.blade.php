<div id="header">
	<div id="itm" class="content">
		<div id="logo"><img src="http://q-ec.bstatic.com/static/img/b26logo/booking_logo_retina/22615963add19ac6b6d715a97c8d477e8b95b7ea.png"></div>
		<div id="menu" >
			<ul>
				@if(Auth::check())
					<li><a href="/" class="glyphicon glyphicon-modal-window btn btn-md btn-primary"></a></li>
					<li><a href="/dashboard" class="glyphicon glyphicon-home btn btn-md btn-primary"></a></li>
					<li>
					<span class="glyphicon glyphicon-cog btn btn-md btn-primary" data-toggle="collapse" data-target="#mnu" ></span>
				@else 
					<a href="/login" class="glyphicon glyphicon-user btn btn-sm btn-primary"></a>	
				@endif
					</li>
			</ul>
		</div>
	</div><!-- this is the end if the header the rest in the navigation -->
</div>
	@if(Auth::check())
			<div id="mnu" class="collapse" dir="rtl">
				<table class="table table-condensed"> 
					<tr onclick="document.location='/upd'"><td>{{trans("header.settings")}}</td>	 							<td align="left"><span class="glyphicon glyphicon-menu-left"></span></td>
					</tr>
					<tr onclick="document.location='/contUs'"><td>{{trans("header.cont_us")}}</td>	 							<td align="left"><span class="glyphicon glyphicon-menu-left"></span></td>
					</tr>
					<tr onclick="document.location='/logout'"><td>{{trans("header.logout")}}</td>	 							<td align="left"><span class="glyphicon glyphicon-menu-left"></span></td>
					</tr>
				</table>
			</div>
	@endif
