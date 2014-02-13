<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Placeholder</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #100;
		}

		.welcome {
			width: 800px;
			height: 200px;
			position: absolute;
			left: 0%;
			top: 5%;
			margin-left: 0px;
			margin-top: 0px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {

			font-size: 32px;
			margin: 16px 0 0 0;
		}

		h2 {

			font-size: 24px;
			margin: 16px 0 0 0;			
		}

		h3 {
			font-size: 18px;
			margin:16px 0 0 0;
		}
		h4 {
			font-size:14px;
			margin:16px 0 0 0;
		}
	</style>
</head>
<body>
		<a href=precise_beta/public>Log Out</a>
	<div class="welcome">
		@yield('content')
	</div>
</body>
</html>