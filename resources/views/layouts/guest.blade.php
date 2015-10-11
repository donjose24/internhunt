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
        {!! Html::style('/components/fullpage.js/jquery.fullPage.css') !!}
		{!! Html::style('/assets/css/app.css') !!}
        {!! Html::style('/components/foundation-datepicker/css/foundation-datepicker.min.css') !!}
		{!! Html::script('/components/foundation/js/vendor/modernizr.js') !!}
		</head>
		<body>
		<nav class="top-bar" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name">
                <img src="/assets/img/logo.png" alt="Internhunt" class="logo">
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
			</ul>

			<section class="top-bar-section">
				<!-- Right Nav Section -->
				<ul class="right">
					<li>
						<a href="/"><i class="fa fa-home"></i> Home</a>
					</li>
					<li>
                        <a href="{!! URL::to('sign-in') !!}"><i class="fa fa-lock"></i> Sign In</a>
					</li>
					<li>
						<a href="{!! URL::to('register') !!}"><i class="fa fa-pencil-square-o"></i> Register</a>
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
        {!! Html::script('/components/foundation-datepicker/js/foundation-datepicker.min.js') !!}
        {!! Html::script('/components/fullpage.js/jquery.fullPage.min.js') !!}
		 <div class="row footer-row">
             <div class="footer large-3 columns">
                 <ul class="social">
                     <li><i class="fa fa-facebook-official social-icon"></i>
                     </li>
                 </ul>
             </div>
            <div class="footer large-3 columns">
                 <ul class="social">
                     <li><i class="fa fa-twitter-square social-icon"></i>
                     </li>
                 </ul> 
            </div>
            <div class="footer large-3 columns">
                <ul class="social">
                     <li><i class="fa fa-linkedin social-icon"></i>
                     </li>
                 </ul> 
            </div>
             <div class="footer large-3 columns">
                <small class="footer-small"> &copy; Copyright 2015 
                <br>
                
                3rd Flr Shuntze Building Salcedo Village, Makati City, Philippines</small>
            </div>
        </div>
        <script>
			$(document).foundation();
		</script>
        <script>
            $('.date').fdatepicker();
        </script>
	</body>
</html>
