<!DOCTYPE html>
<html>
<head>
	<title>
		@yield( 'title', "Home Page" )
	</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/all.css">
</head>
<body>
	<div class="container">

		<ol>
			<li><a href="/apple">apple</a></li>
			<li><a href="/caimito">caimito</a></li>
			<li><a href="/pear">pear</a></li>
			
		</ol>
		@yield( 'content')
	</div>

	@section('footerScripts')
		<script type="text/javascript" src="app.js"></script>
	@show

</body>
</html>


