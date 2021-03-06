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
		<link type="text/css" rel="stylesheet" href="{{Illuminate\Support\Facades\URL::asset('css/bootstrap.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{Illuminate\Support\Facades\URL::asset('css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{Illuminate\Support\Facades\URL::asset('css/style.css')}}"/>

    </head>
	<body>

		<!-- Header -->
		@include('dublicated.header')

		<!-- /Header -->

		<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url({{\Illuminate\Support\Facades\URL::asset('./img/home-background.jpg')}})"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1 class="white-text">{{__('home_page.header_title')}}</h1>
							<p class="lead white-text">{{__('home_page.header_paragraph')}}</p>
							<a class="main-button icon-button" href="#">{{__('home_page.header_btn')}}</a>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

{{--					<div class="col-md-6">--}}
{{--						<div class="section-header">--}}
{{--							<h2>Welcome to Edusite</h2>--}}
{{--							<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>--}}
{{--						</div>--}}

{{--						<!-- feature -->--}}
{{--						<div class="feature">--}}
{{--							<i class="feature-icon fa fa-flask"></i>--}}
{{--							<div class="feature-content">--}}
{{--								<h4>Online Courses </h4>--}}
{{--								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<!-- /feature -->--}}

{{--						<!-- feature -->--}}
{{--						<div class="feature">--}}
{{--							<i class="feature-icon fa fa-users"></i>--}}
{{--							<div class="feature-content">--}}
{{--								<h4>Expert Teachers</h4>--}}
{{--								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<!-- /feature -->--}}

{{--						<!-- feature -->--}}
{{--						<div class="feature">--}}
{{--							<i class="feature-icon fa fa-comments"></i>--}}
{{--							<div class="feature-content">--}}
{{--								<h4>Community</h4>--}}
{{--								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<!-- /feature -->--}}

{{--					</div>--}}

{{--					<div class="col-md-6">--}}
{{--						<div class="about-img">--}}
{{--							<img src="{{Illuminate\Support\Facades\URL::asset('img/about.png')}}" alt="">--}}
{{--						</div>--}}
{{--					</div>--}}

				</div>
				<!-- row -->

			</div>
			<!-- container -->
		</div>
		<!-- /About -->

		<!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>{{__('home_page.course_title')}}</h2>
						<p class="lead">{{__('home_page.course_paragraph')}}</p>
					</div>
				</div>
				<!-- /row -->

				<!-- courses -->
				<div id="courses-wrapper">

					<!-- row -->
					<div class="row">

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{Illuminate\Support\Facades\URL::asset('img/course01.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">Beginner to Pro in Excel: Financial Modeling and Valuation</a>
								<div class="course-details">
									<span class="course-category">Business</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{Illuminate\Support\Facades\URL::asset('img/course02.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">Introduction to CSS </a>
								<div class="course-details">
									<span class="course-category">Web Design</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{Illuminate\Support\Facades\URL::asset('img/course03.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">The Ultimate Drawing Course | From Beginner To Advanced</a>
								<div class="course-details">
									<span class="course-category">Drawing</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{Illuminate\Support\Facades\URL::asset('img/course04.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">The Complete Web Development Course</a>
								<div class="course-details">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{Illuminate\Support\Facades\URL::asset('img/course05.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">PHP Tips, Tricks, and Techniques</a>
								<div class="course-details">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{Illuminate\Support\Facades\URL::asset('img/course06.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">All You Need To Know About Web Design</a>
								<div class="course-details">
									<span class="course-category">Web Design</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{Illuminate\Support\Facades\URL::asset('img/course07.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">How to Get Started in Photography</a>
								<div class="course-details">
									<span class="course-category">Photography</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{Illuminate\Support\Facades\URL::asset('img/course08.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">Typography From A to Z</a>
								<div class="course-details">
									<span class="course-category">Typography</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->

				<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">{{__('home_page.course_btn')}}</a>
					</div>
				</div>

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->

		<!-- Call To Action -->
		<div id="cta" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url({{Illuminate\Support\Facades\URL::asset('./img/cta1-background.jpg')}})"></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<h2 class="white-text">{{__('home_page.Section_title')}}</h2>
						<p class="lead white-text">{{__('home_page.Section_paragraph')}}</p>
						<a class="main-button icon-button" href="{{route('form')}}"> {{__('home_page.Section_btn')}}</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Call To Action -->

		<!-- Why us -->
		<div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>{{__('home_page.why_title')}}</h2>
						<p class="lead">{{__('home_page.why_paragraph')}}</p>
					</div>

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-flask"></i>
							<div class="feature-content">
								<h4>{{__('home_page.why_title1')}}</h4>
								<p>{{__('home_page.why_paragraph1')}}</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-users"></i>
							<div class="feature-content">
								<h4>{{__('home_page.why_title2')}}</h4>
								<p>{{__('home_page.why_paragraph2')}}</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-comments"></i>
							<div class="feature-content">
								<h4>{{__('home_page.why_title3')}}</h4>
								<p>{{__('home_page.why_paragraph3')}}</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

				</div>
				<!-- /row -->

				<hr class="section-hr">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<h3>{{__('home_page.slider_title')}}</h3>
						<p class="lead">{{__('home_page.slider_paragraph')}}</p>
					</div>

					<div class="col-md-5 col-md-offset-1">
						<a class="about-video" href="#">
							<img src="{{Illuminate\Support\Facades\URL::asset('img/about-video.jpg')}}" alt="">
							<i class="play-icon fa fa-play"></i>
						</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Why us -->

		<!-- Contact CTA -->
		<div id="contact-cta" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url({{Illuminate\Support\Facades\URL::asset('./img/cta2-background.jpg')}})"></div>
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text">{{__('home_page.Contact_title')}}</h2>
						<p class="lead white-text">{{__('home_page.Contact_paragraph')}}</p>
						<a class="main-button icon-button" href="#">{{__('home_page.Contact_btn')}}</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact CTA -->

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
							<li><a href="{{route('home')}}">{{__('home_page.nav_home')}}</a></li>
                            <li><a href="{{route('blog')}}">{{__('home_page.nav_projects')}}</a></li>
                            <li><a href="#">{{__('home_page.nav_courses')}}</a></li>
                            <li><a href="{{route('blog')}}">{{__('home_page.nav_blog')}}</a></li>
							<li><a href="{{route('contact')}}">{{__('home_page.nav_contact')}}</a></li>
                            <li><a href="#">{{__('home_page.nav_about')}}</a></li>
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
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js/"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js/"></script>
        @include('dublicated.scripts')

    </body>
</html>
