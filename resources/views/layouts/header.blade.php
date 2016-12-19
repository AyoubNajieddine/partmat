<div id="header">
	<div id="itm">
	<ul>	
	<li><img src="http://q-ec.bstatic.com/static/img/b26logo/booking_logo_retina/22615963add19ac6b6d715a97c8d477e8b95b7ea.png" height="20px"></li>
	<li class="pull-right">
	@if(Auth::check())
	<span class="glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#mnu" ></span>
	@else 
	<a href="/login"><span class="glyphicon glyphicon-user"></span></a>	
	@endif
	</li>
	</ul>
	</div>
	@if(Auth::check())
			<div id="mnu" class="collapse">
			<table class="table">
			<tr onclick="document.location='/upd'"><td>Settings</td></tr>
			<tr onclick="document.location='/logout'"><td>logout</td></tr>
			</table>
			</div>
	@endif
</div>
