<html>
	<head>
	<style>
	@import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);	
	@import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
	.inp {
	background-color:#002747;
	padding:10px;
	border-radius:3px;
	color:white;
	text-decoration:none;
	font-size:10px;
	}
	body {
		color:#222;
	}
	#content {
		width:90%;
		margin:0 auto;
	}
	#header {
	background-color:#002747;
	height:40px;
	width:100%;
	}
	.small {
		font-size:11px;
		color:#777;
	}
	#rst_div {
		width:70%;
		margin:0 auto;
		background-color:#eee;
		padding:12px;
		border-radius:3px;
	}
	</style>
	</head>
	<body>
		<div id="header">
					
		</div>
		<div id="content">
		<span><h6>Welcom</h6></span>
		<p>Did you forget your password ?</p>
		<table border="0" id="rst_div"><tr>
		<td>
		<a href="{{ url('/password/reset', $token) }}" class="btn btn-primary inp">Reset Password</a>
		</td>
		<td><span class="small">This Link Will expire in 1 hour and can be used only once</span></td>
		</tr></table>
		<p>
			If you don't want to change your password or didn't request this, please ignore and delete this message. 
		</p>
		</div>
	</body>
</html>
