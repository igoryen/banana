<!DOCTYPE html>
<html>
<head>
	<title>
		@yield( 'title', "Home Page" )
	</title>
	
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container">

		<ol>
			<li><a href="/apple">apple</a></li>
			<li><a href="/banana">banana</a></li>
			<li><a href="/pear">pear</a></li>
			
		</ol>
		@yield( 'content')
	</div>

	@section('footerScripts')
		<script type="text/javascript" src="app.js"></script>
	@show

</body>
</html>


