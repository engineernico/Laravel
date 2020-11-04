<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>HTML Education Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{Illuminate\Support\Facades\URL::asset('css/bootstrap.min.css')}}">

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{Illuminate\Support\Facades\URL::asset('css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{Illuminate\Support\Facades\URL::asset('css/style.css')}}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js/"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js/"></script>
		<![endif]-->

    </head>
	<body>

		@include('dublicated.header')


        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand">
                        Blog
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a target="_blank" href="{{ url('/') }}">Frontend</a></li>
                        <li><a href="{{ url('/admin') }}">Admin Panel</a></li>
                        <li><a href="{{ url('/logout') }}">Log out</a></li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                <!--ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links>
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
{{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                    </ul-->
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Add Post</div>

                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="title" placeholder="Title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Content"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fa fa-btn fa-user"></i> Publish
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Order</div>

                        <div class="panel-body">
                            <div class="post">
                                <h2>title</h2>
                                <p>content</p>
                                <hr/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="{{route('home')}}">
								<img src="{{Illuminate\Support\Facades\URL::asset('img/logo.png')}}" alt="logo">
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
							<li><a href="{{route('home')}}">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="{{route('blog')}}">Blog</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
						</ul>
					</div>
					<!-- /footer nav -->

				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2018. All Rights Reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
        @include('dublicated.scripts')


    </body>
</html>
