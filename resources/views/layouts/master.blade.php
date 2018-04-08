<!DOCTYPE html>
<html>
<head>

	<title>
		@yield( 'title', "Home Page" )
	</title>

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/all.css">
</head>
<body>
	<div class="container">

		<ol>
			<li><a href="/apple">apple</a></li>
			<li><a href="/caimito">caimito</a></li>
			<li><a href="/pear">pear</a></li>
			<li><a href="/capulin1">capulin1</a></li>

			
		</ol>
		@yield( 'content')
	</div>

	@section('footerScripts')
		<script type="text/javascript" src="app.js"></script>
	@show

</body>
</html>


