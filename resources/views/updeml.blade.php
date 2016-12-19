<form action="/updusr/eml" method="POST">
		<input class="form-control" name="email" placeholder="new email" type="text"/><br>
		<input class="form-control" name="cr_email" placeholder="new email" type="text"/><br>
		<button class="btn btn-md btn-primary fl inp">Save</button>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form><br>
<button onclick="document.location='/upd'" class="btn btn-md btn-default fl">Cancel</button>