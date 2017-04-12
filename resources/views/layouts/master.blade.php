<!doctype html>
<html>
<head>
	<html lang="en">
	<meta charset="utf-8">
	<meta name="description" content="Evan and Fayes Wedding 19.05.2018">
	<meta name="author" content="Scotch">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Evan & Faye 19.05.2018</title>
	<meta name="google-site-verification" content="fUktjoz1JdTs1-Den7DY7cdI4dmZPIjaVNM895PiXTE" />
    <meta name="keywords" content="Evan and Faye Johnson, wedding, Cornwall, Gwel an Mor, RSVP">
    <meta name="author" content="Evan Johnson">

    <link rel="stylesheet" href="{{ asset('/css/slippry.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/css/app.min.css') }}">

    <script src="//use.edgefonts.net/cabin;source-sans-pro:n2,i2,n3,n4,n6,n7,n9.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{ asset('/js/slippry.min.js') }}"></script>
		<script src="{{ asset('/js/site.js') }}"></script>
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

<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"dark-bottom"};
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->
<footer id="footer">
    @include("footer")
</footer>
</div>
</body>
</html>
