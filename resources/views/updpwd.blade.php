<form action="/pwd" method="POST">
		<input class="form-control" name="cr_password" placeholder="{{trans('updpwd.old_password')}}" type="password"/><hr />
		<input class="form-control" name="password" placeholder="{{trans('updpwd.password')}}" type="password"/><br>
		<input class="form-control" name="cm_password" placeholder="{{trans('updpwd.com_password')}}" type="password"/><br>
		<button class="btn btn-md btn-primary fl inp">{{trans("updpwd.save")}}</button>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form><br>
<a href="/upd" class="btn btn-md btn-default fl">{{trans("updpwd.cancel")}}</a>