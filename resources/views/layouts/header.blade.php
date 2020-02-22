<div id="body">

    <navbar>
        <div class="navbar navbar-default tabs paper-shadow-bottom-z-2">
            <div class="container-fluid">
                <ul class="navbar-body list-inline">
                    <li
                        class="active">
                        <a
                            href="{{ action([\App\Http\Controllers\HomeController::class, 'index']) }}"
                            class="active">
                            HEM
                        </a>
                    </li>
                    <li><a>PROJEKT</a></li>
                    <li><a>OM OSS</a></li>
                    <li><a>SERVICE</a></li>
                    <li><a>KONTAKT</a></li>

                </ul>
                <div class="tab-highlighter"></div>
            </div>
        </div>
    </navbar>

    <div id="main" class="container-fluid">
        <div class="text-center">
            {{--            main content here--}}
        </div>
    </div>

</div>


{{--<nav class="navbar navbar-light">--}}
{{--    <div class="container">--}}
{{--        <a--}}
{{--            class="navbar-brand pt-2"--}}
{{--            href="{{ route('home') }}"--}}
{{--        >--}}
{{--            <img src="{{ asset('storage/kode_plat_logo.png') }}">--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--<nav--}}
{{--    class="navbar navbar-expand-md navbar-dark shadow-sm"--}}
{{--    style="background-color: #3A3A3A; height: 35px;"--}}
{{-->--}}
{{--    <div class="container">--}}
{{--        <button--}}
{{--            class="navbar-toggler"--}}
{{--            type="button"--}}
{{--            data-toggle="collapse"--}}
{{--            data-target="#navbarSupportedContent"--}}
{{--            aria-controls="navbarSupportedContent"--}}
{{--            aria-expanded="false"--}}
{{--            aria-label="{{ __('Toggle navigation') }}"--}}
{{--        >--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div--}}
{{--            class="collapse navbar-collapse navbar-main"--}}
{{--            id="navbarSupportedContent"--}}
{{--        >--}}
{{--            <!-- Left Side Of Navbar -->--}}
{{--            <div class="navbar-div-center">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <li class="nav-item mx-3">--}}
{{--                        <a--}}
{{--                            class="nav-link white-navbar-text"--}}
{{--                            href="{{ route('home') }}"--}}
{{--                        >{{ __('mytranslation.home') }}</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item mx-3">--}}
{{--                        <a--}}
{{--                            class="nav-link white-navbar-text"--}}
{{--                            href="{{ route('projects.index') }}"--}}
{{--                        >{{ __('mytranslation.project') }}</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item mx-3">--}}
{{--                        <a--}}
{{--                            class="nav-link white-navbar-text"--}}
{{--                            href="{{ route('about') }}"--}}
{{--                        >{{ __('mytranslation.about') }}</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item mx-3">--}}
{{--                        <a--}}
{{--                            class="nav-link white-navbar-text"--}}
{{--                            href="{{ route('service') }}"--}}
{{--                        >{{ __('mytranslation.service') }}</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item mx-3">--}}
{{--                        <a--}}
{{--                            class="nav-link white-navbar-text"--}}
{{--                            href="{{ route('contact') }}"--}}
{{--                        >{{ __('mytranslation.contact') }}</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="navbar-div-right">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    @guest--}}
{{--                    @else--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a--}}
{{--                                id="navbarDropdown"--}}
{{--                                class="nav-link dropdown-toggle white-navbar-text"--}}
{{--                                href="#"--}}
{{--                                role="button"--}}
{{--                                data-toggle="dropdown"--}}
{{--                                aria-haspopup="true"--}}
{{--                                aria-expanded="false"--}}
{{--                                v-pre--}}
{{--                            >--}}
{{--                                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                            </a>--}}

{{--                            <div--}}
{{--                                class="dropdown-menu dropdown-menu-right"--}}
{{--                                aria-labelledby="navbarDropdown"--}}
{{--                            >--}}
{{--                                <a--}}
{{--                                    class="dropdown-item"--}}
{{--                                    href="{{ action([\App\Http\Controllers\ProjectController::class, 'create']) }}"--}}
{{--                                >--}}
{{--                                    {{ __('mytranslation.create_project') }}--}}
{{--                                </a>--}}

{{--                                <a--}}
{{--                                    class="dropdown-item"--}}
{{--                                    href="{{ route('logout') }}"--}}
{{--                                    onclick="--}}
{{--                                event.preventDefault();--}}
{{--                                document.getElementById('logout-form').submit();"--}}
{{--                                >--}}
{{--                                    {{ __('mytranslation.logout') }}--}}
{{--                                </a>--}}


{{--                                <form--}}
{{--                                    id="logout-form"--}}
{{--                                    action="{{ route('logout') }}"--}}
{{--                                    method="POST"--}}
{{--                                    style="display: none;"--}}
{{--                                >--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endguest--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
