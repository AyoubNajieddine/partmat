<center>
<div id="delcnt">
	<form action="/deluser" method="POST" >
		 <div class="panel panel-default">
		 <div class="panel-body" >
		 	<strong>{{trans("delcnt.strong_txt")}}</strong>
		 		<br><small>{{trans("delcnt.small_txt")}}</small>
		 </div>
	<div class="panel-footer" style="background-color:white !important;">
		 <button class="btn btn-md btn-primary inp">{{trans("delcnt.delete")}}</button><a href="/upd" style="margin-right: 5px;" class="btn btn-md btn-default">{{trans("delcnt.cancel")}}</a></div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		</div>
	</form>
</div>
</center>