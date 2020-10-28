<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">

	<title>@yield('title')</title>

</head>
<body>

	@include('master.nav')
	<div class="jumbotron jumbotron-fluid">
		<H1 class="main-content text-center">@yield('content')</H1>
		<h1 class="text-center">By Mochammad Yusuf Pratama<br>XII RPL 2 / 13</h1>
	</div>

	<script src="{{asset('/assets/js/jquery-3.4.1.js')}}"></script>
	<script src="{{asset('/assets/js/bootstrap.bundle.js')}}"></script>
	<script src="{{asset('/assets/js/bootstrap.js')}}"></script>

</body>
</html>