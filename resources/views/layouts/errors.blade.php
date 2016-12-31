@if($errors->count() > 0)
	<div class="alert alert-danger">
@foreach($errors->all() as $error)
	<ul>
		<li>
		
			@if($error == "rong_user_error")

		{{ trans("login.rg_login") }}
			
			@elseif($error == "rong_old_password")
		
		{{ trans("updpwd.rong_old_password") }}
			
			@elseif($error == "password_not_match")
		
		{{	trans("updpwd.password_not_match") }}
		
			@elseif($error == "email_match")
		
		{{ trans("updeml.email_match") }}			
		
			@else
		
				{{ $error }}
		
			@endif		
		</li>
	</ul>
@endforeach
	</div>
@endif 
