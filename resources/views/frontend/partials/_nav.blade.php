<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar w-100 navbar-expand-lg custom_nav-container justify-content-sm-center fixed-top bg-white p-3">
            <a class="navbar-brand mt-3" href="{{ url('/') }}">
                <span>
                    MoFlix
                </span>
            </a>

            <button class="navbar-toggler d-sm-block  d-md-none ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav w-100 d-lg-flex align-items-center ">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/frontend#hero') }}" onclick="scrollToMiddle(event)">Home
                            <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/frontend#about-us') }}" onclick="scrollToMiddle(event)">
                            About Us </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/frontend#now-playing') }}" onclick="scrollToMiddle(event)"">
                            Now Playing </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/frontend#men') }}" onclick="scrollToMiddle(event)"> Coming
                            Soon </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/frontend#promo') }}" onclick="scrollToMiddle(event)"> Promo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/frontend#team') }}" onclick="scrollToMiddle(event)">Team</a>
                    </li>
                    @if (Auth::check())
                        <li class="nav-item order-sm-first order-lg-last ml-lg-auto my-2 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink"
                                style="font-size: 1.2rem; margin-right: 1rem;">
                                <a class="dropdown-item" href="{{ route('movie.order') }}">My Tickets</a>
                                @if (Auth::user()->role->name == 'admin')
                                    <a class="dropdown-item" href="{{ route('movies') }}">Admin Dashboard</a>
                                @endif
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item order-sm-first order-lg-last ml-lg-auto my-2 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink"
                                style="font-size: 1.2rem; margin-right: 1rem;">
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>

                            </div>
                        </li>
                    @endif
                </ul>

            </div>
        </nav>
    </div>
</header>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    function scrollToMiddle(event) {
        event.preventDefault();
        const target = document.querySelector(event.target.hash);
        const topOffset = target.offsetTop;
        const middleOffset = topOffset - (window.innerHeight / 2) + (target.offsetHeight / 2);
        window.scrollTo({
            top: middleOffset,
            behavior: 'smooth'
        });
    }

    $(document).ready(function() {
        $('.navbar-nav .nav-item').on('click', function() {
            $('.navbar-nav .nav-item').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
