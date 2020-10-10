<header id="header" class="transparent-nav">
    <div class="container">

        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <a class="logo" href="{{route('home')}}">
                    <img src="{{Illuminate\Support\Facades\URL::asset('img/logo-alt.png')}}" alt="logo">
                </a>d
            </div>
            <!-- /Logo -->

            <!-- Mobile toggle -->
            <button class="navbar-toggle">
                <span></span>
            </button>
            <!-- /Mobile toggle -->
        </div>

        <!-- Navigation -->
        <nav id="nav">
            <ul class="main-menu nav navbar-nav navbar-right">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>


                <li><a href="{{route('homeLogin')}}">Log out</a></li>


            </ul>
        </nav>
        <!-- /Navigation -->

    </div>
</header>
