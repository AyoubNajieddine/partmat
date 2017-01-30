<div id="header">

	<div id="itm" class="content">

		<center><div id="logo"><img src="http://q-ec.bstatic.com/static/img/b26logo/booking_logo_retina/22615963add19ac6b6d715a97c8d477e8b95b7ea.png">
		</div></center>
		<div id="menu">
			@if(Auth::check())
			<table class="fl">
				<tr>
					<td><a href="/" class="glyphicon glyphicon-map-marker"></a></td>
					<td><a href="/dashboard" class="glyphicon glyphicon-home"></a></td>
					<td><a href="/settings" class="glyphicon glyphicon-cog"></a></td>
				</tr>
			</table>
				
			<!--ul>
				@if(Auth::check())
					<li><a href"/" class="glyphicon glyphicon-modal-window btn btn-md btn-primary"></a></li>
					<li><a href="/dashboard" class="glyphicon glyphicon-home btn btn-md btn-primary"></a></li>
					<li>
					<span class="glyphicon glyphicon-cog btn btn-md btn-primary" data-toggle="collapse" data-target="#mnu" ></span>
				@else 
					<a href="/login" class="glyphicon glyphicon-user btn btn-sm btn-primary"></a>	
				@endif
					</li>
			</ul -->
			@else
					<span><a href="/login" class="glyphicon glyphicon-user usr"></a></span>
			@endif
		</div>
	</div><!-- this is the end if the header the rest in the navigation -->
</div>
	@if(Auth::check())
		<!--div id="mnu" class="collapse" dir="rtl">
			<table class="table mytable" id="cels"> 
				<tr onclick="document.location='/upd'">
					<td>{{trans("header.settings")}}</td>
		 			<td align="left"><span class="glyphicon glyphicon-menu-left"></span></td>
				</tr>
				<tr onclick="document.location='/contUs'">
					<td>{{trans("header.cont_us")}}</td>
					<td align="left"><span class="glyphicon glyphicon-menu-left"></span></td>
				</tr>

				<tr onclick="document.location='#'">
						<td>{{trans("header.fc") }}</td>
						<td align="left"><span class="glyphicon glyphicon-menu-left"></span></td>
				</tr>
				<tr data-toggle="collapse" data-target="#langmnu">
							<td>{{ trans("header.langmnu") }}</td>
							<td align="left"><span class="glyphicon glyphicon-chevron-down"></span></td>			
				</tr>
			</table>
			<div id="langmnu" class="collapse">
					<table class="table mytable">
				<tr><td value="ar">{{ trans("header.aropt") }}</td></tr>
				<tr><td value="fr">{{ trans("header.fropt") }}</td></tr>
					</table>
			</div>
			<table class="table mytable" >
								<tr onclick="document.location='/logout'">
						<td>{{trans("header.logout")}}</td>
			 			<td align="left"><span class="glyphicon glyphicon-menu-left"></span></td>
				</tr>
			</table>
		</div -->
	
	@endif
