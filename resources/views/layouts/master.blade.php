<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="Evan and Fayes Wedding 19.05.2018" content="">
	<meta name="author" content="Scotch">
	<meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>example</title>
	
    <link rel="stylesheet" href="{{ asset('/css/slippry.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <script src="//use.edgefonts.net/cabin;source-sans-pro:n2,i2,n3,n4,n6,n7,n9.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{ asset('/js/slippry.min.js') }}"></script>
	<script src="//use.edgefonts.net/cabin;source-sans-pro:n2,i2,n3,n4,n6,n7,n9.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div id="page">
	<header>
		@include("nav")
	</header>
        @include("mobile-nav")
        @yield("content")
</div>
</body>
</html>
