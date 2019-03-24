<nav class="navbar navbar-expand-md navbar-laravel bg-black opacity-95 text-white shadow">
    <div class="container">
        <div id="welcomeMsg" class="text-capitalize font-weight-bold"> Welcome, {{Auth::user()->name}}!</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-user-circle text-green text-5xl"></i><span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} - {{ Auth::user()->name }}

                            </a>
                            @role('student')
                            <a class="dropdown-item" href="/student-info/create">
                                New Registration
                            </a>
                            @endrole
                            @role('instructor')
                            <a class="dropdown-item" href="/instructor-info/create">
                                New Registration
                            </a>
                            @endrole

                            @role('student')
                            <a class="dropdown-item"
                               href="/contact/{{ optional(auth()->user()->studentInfo)->contact_ID}}">
                                Edit Contact
                            </a>
                            @endrole
                            @role('instructor')
                            <a class="dropdown-item"
                               href="/contact/{{ optional(auth()->user()->instructorInfo)->contact_ID
                               }}">
                                Edit Contact
                            </a>
                            @endrole
                            <a class="dropdown-item" href="/calendar/create">Calendar</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>