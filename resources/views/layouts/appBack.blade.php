<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Labs - Design Studio</title>
    <!-- Favicon -->
	<link href={{ asset('img/favicon.ico') }} rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href={{ asset('css/bootstrap.min.css')}}>
	<link rel="stylesheet" href={{ asset('css/font-awesome.min.css')}}>
	<link rel="stylesheet" href={{ asset('css/flaticon.css')}}>
	<link rel="stylesheet" href={{ asset('css/magnific-popup.css')}}>
	<link rel="stylesheet" href={{ asset('css/owl.carousel.css')}}>
    <link rel="stylesheet" href={{ asset('css/index.css')}}>
	<link rel="stylesheet" href={{ asset('css/style.css')}}>
	<link rel="stylesheet" href={{ asset("css/app.css") }}>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div> 

    @yield('content')
    <!--====== Javascripts & Jquery ======-->
    <script src={{ asset('js/jquery-2.1.4.min.js') }}></script>
	<script src={{ asset('js/bootstrap.min.js') }}></script>
	<script src={{ asset('js/magnific-popup.min.js') }}></script>
	<script src={{ asset('js/owl.carousel.min.js') }}></script>
	<script src={{ asset('js/circle-progress.min.js') }}></script>
	<script src={{ asset('js/main.js') }}></script>

    
</body>
</html>