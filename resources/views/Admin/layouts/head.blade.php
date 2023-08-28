<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="description" content="Photography">
		<meta name="keywords" content="Photography">
		<meta name="author" content="Photography">
		<meta name="robots" content="Photography">
		<title>Photography Dashboard</title>
 		{{-- <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Blinker:wght@200;300;400&display=swap" rel="stylesheet"> --}}
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		
		<!-- Animation CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

		<!-- Datatable CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/icons/feather/feather.css')}}">
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/mycss.css')}}">
        @stack('styles')
	</head>
	<body>
		<div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>
		<!-- Main Wrapper -->
		<div class="main-wrapper">

