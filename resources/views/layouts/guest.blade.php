<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/hope-ui.min.css?v=2.0.0') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/custom.min.css?v=2.0.0') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/dark.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/customizer.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/rtl.min.css') }}"/>
</head>
<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
<div id="loading">
	<div class="loader simple-loader">
		<div class="loader-body"></div>
	</div>
</div>

<div class="wrapper">
	<section class="login-content">
		<div class="row m-0 align-items-center bg-white vh-100">
			@yield('content') 
		</div>
	</section>
</div>

	<!-- Library Bundle Script -->
	<script src="{{ asset('assets/js/core/libs.min.js') }}"></script>
	<script src="{{ asset('assets/js/core/external.min.js') }}"></script>
	<script src="{{ asset('assets/js/charts/widgetcharts.js') }}"></script>
	<script src="{{ asset('assets/js/charts/vectore-chart.js') }}"></script>
	<script src="{{ asset('assets/js/charts/dashboard.js ') }}""></script>
	<script src="{{ asset('assets/js/plugins/fslightbox.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/setting.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/slider-tabs.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/form-wizard.js') }}"></script>
	<script src="{{ asset('assets/js/hope-ui.js') }}" defer></script>
</body>
</html>