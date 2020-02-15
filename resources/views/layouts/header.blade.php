<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a
            class="navbar-brand"
            href="{{ route('home') }}"
        >
            {{ __('mytranslation.kodeplat') }}
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div
            class="collapse navbar-collapse"
            id="navbarSupportedContent"
        >
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a
                        class="nav-link font-weight-bold"
                        href="{{ route('home') }}"
                    >{{ __('mytranslation.home') }}</a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link font-weight-bold"
                        href="{{ route('projects.index') }}"
                    >{{ __('mytranslation.project') }}</a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link font-weight-bold"
                        href="{{ route('about') }}"
                    >{{ __('mytranslation.about') }}</a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link font-weight-bold"
                        href="{{ route('service') }}"
                    >{{ __('mytranslation.service') }}</a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link font-weight-bold"
                        href="{{ route('contact') }}"
                    >{{ __('mytranslation.contact') }}</a>
                </li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @else
                    <li class="nav-item dropdown">
                        <a
                            id="navbarDropdown"
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            v-pre
                        >
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div
                            class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="navbarDropdown"
                        >
                            <a
                                class="dropdown-item"
                                href="{{ action([\App\Http\Controllers\ProjectController::class, 'create']) }}"
                            >
                                {{ __('mytranslation.create_project') }}
                            </a>

                            <a
                                class="dropdown-item"
                                href="{{ route('logout') }}"
                                onclick="
                                event.preventDefault();
                                document.getElementById('logout-form').submit();"
                            >
                                {{ __('mytranslation.logout') }}
                            </a>


                            <form
                                id="logout-form"
                                action="{{ route('logout') }}"
                                method="POST"
                                style="display: none;"
                            >
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
