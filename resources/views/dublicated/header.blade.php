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
                <li><a href="{{route('home')}}">{{__('home_page.nav_home')}}</a></li>
                <li><a href="#">{{__('home_page.nav_projects')}}</a></li>
                <li><a href="#">{{__('home_page.nav_courses')}}</a></li>
                <li><a href="{{route('blog')}}">{{__('home_page.nav_blog')}}</a></li>
                <li><a href="{{route('contact')}}">{{__('home_page.nav_contact')}}</a></li>
                <li><a href="#">{{__('home_page.nav_about')}}</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('home_page.nav_language')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a style="color: #1b4b72;" class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        @endforeach

                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                            <a  style="color: #1b4b72;" class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                                {{ __('home_page.nav_logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>


                    </div>
                </li>
            </ul>
        </nav>
        <!-- /Navigation -->

    </div>
</header>
