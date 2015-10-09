<!doctype html>
<html class="no-js" lang="en">
<head >
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		@yield('header')
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		{!! Html::style('/components/foundation/css/foundation.css') !!}
		{!! Html::style('/components/foundation/css/normalize.css') !!}
		{!! Html::style('/assets/css/app.css') !!}
		{!! Html::script('/components/foundation/js/vendor/modernizr.js') !!}
		</head>
		<body>
		<nav class="top-bar" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name">
				<h1><a href="#">{!! Html::image('/assets/img/logo.png','logo',['class' => 'logo']) !!}</a></h1>
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
			</ul>

			<section class="top-bar-section">
				<!-- Right Nav Section -->
				<ul class="right">
					<li>
						<a href="#"><i class="fa fa-home"></i> Home</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-lock"></i> Sign In</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-pencil-square-o"></i> Register</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-users"></i> About Us</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-mobile"></i> Contact Us</a>
					</li>

				</ul>
			</section>
		</nav>
		@yield('content')
		{!! Html::script('/components/foundation/js/vendor/jquery.js') !!}
		{!! Html::script('/components/foundation/js/foundation.min.js') !!}
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
