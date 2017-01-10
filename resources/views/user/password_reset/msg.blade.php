<html>
	<head>
	<style>
	.inp {
	background-color:#002747;
	padding:10px;
	border-radius:3px;
	color:white;
	text-decoration:none;
	}
	body {
		color:#222;
	}
	.txt {
		font-size:11px;
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
		font-size:9px;
		color:#777;
	}
	#rst_div {
		width:70%;
		margin:0 auto;
		background-color:#eee;
		padding-top:12px;
		border-radius:3px;
	}
	</style>
	</head>
	<body dir="rtl">
		<div id="header">
					
		</div>
		<div id="content">
		<span><h6>{{ trans("msg.welc") }}</h6></span>
		<p class="txt">{{ trans("msg.quest") }}</p>
		<div id="rst_div">
		<center><a href="{{ url('/password/reset', $token) }}" class="btn btn-primary btn-lg inp">{{ trans("msg.reset") }}</a></center>
		<br>
		<span class="small">{{ trans("msg.lnk") }}</span>
		</div>
		<br>
		<p class="txt">
				{{ trans("msg.err") }}
				<br><br>
				{{ trans("msg.tnk") }}<br>{{ trans("msg.us") }}
		</p>
		</div>
	</body>
</html>
