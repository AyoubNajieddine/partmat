<!DOCTYPE html>
<html>
	<head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         <link rel="stylesheet" href="{{ URL::to('css/master.css') }} " type="text/css" />
	<link rel="stylesheet" href="{{ URL::to('css/header.css') }}" />
	<link rel="stylesheet" href="{{ URL::to('css/new.css') }}" />
	<link rel="stylesheet" href="{{ URL::to('css/dashboard.css') }}" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="content-type" content="text-html,charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ URL::to('/js/header.js') }}"></script>

	</head>
	<body>
		@include("layouts.header")
		<div class="container" id="wrapper" dir="rtl">
		@yield("content")
		</div>		
	</body>
</html>

