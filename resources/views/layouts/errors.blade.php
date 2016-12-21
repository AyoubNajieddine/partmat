@if($errors->count() > 0)
	<div class="alert alert-danger">
@foreach($errors->all() as $error)
	<ul>
		<li>{{ ($error != "rong_user_error") ? $error : trans("login.rg_login") }}</li>
	</ul>
@endforeach
	</div>
@endif 
