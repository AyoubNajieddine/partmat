<form action="/updusr/pwd" method="POST">
		<input class="form-control" name="cr_password" placeholder="current password" type="password"/><hr />
		<input class="form-control" name="password" placeholder="new password" type="password"/><br>
		<input class="form-control" name="cm_password" placeholder="comfirm new password" type="password"/><br>
		<button class="btn btn-md btn-primary fl inp">Save</button>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form><br>
<button onclick="document.location='/upd'" class="btn btn-md btn-default fl">Cancel</button>