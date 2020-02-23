<div
    class="w-100 text-light"
    style="background-color: #0071B8"
>
    <div class="container-xl">
        <div class="align-items-center justify-content-between py-3" style="display: flex; flex-direction: row; flex-wrap: wrap">
            <div>
                <p>KODE PLÅT STÖDJER</p>
            </div>
            <div>
                <a
                    href="https://www.barncancerfonden.se/"
                    target="_blank"
                    class="text-light"
                >
                    <img
                        src="{{ asset('storage/logos/barncancerfonden-logo.png') }} "
                        alt="Barncancer Fonden"
                        height="50"
                    >
                </a>
            </div>
            <div>
                <a
                    href="https://www.sbmk.se/"
                    target="_blank"
                    class="text-light"
                >
                    <img
                        src="{{ asset('storage/logos/badminton.png') }}"
                        alt="Skälderviken Badminton"
                        height="50"
                    />

                </a>Tove Lind <br>Skälderviken Badminton
            </div>
            <div>
                <a
                    href="https://www.laget.se/KIS_BANDY_DAMER"
                    target="_blank"
                    class="text-light"
                ><img
                        src="{{ asset('storage/logos/kareby_is_slas.png') }}"
                        alt="Kareby IS damlag"
                        height="50"
                    />test
                </a>
            </div>
        </div>
    </div>
</div>


{{--<div--}}
{{--    class="w-100 text-light"--}}
{{--    style="background-color: #0071B8"--}}
{{-->--}}
{{--    <div class="container-xl d-flex align-items-center">--}}
{{--        <div class="py-3" style="flex: 1; display: flex; min-width: -webkit-min-content;">--}}
{{--            <a--}}
{{--                href="https://www.sbmk.se/"--}}
{{--                target="_blank"--}}
{{--                class="text-light"--}}
{{--            >--}}
{{--                <img--}}
{{--                    src="{{ asset('storage/badminton.png') }}"--}}
{{--                    alt="Skälderviken Badminton"--}}
{{--                    height="80"--}}
{{--                />--}}
{{--                Skælderviken Badminton--}}
{{--            </a>--}}

{{--        </div>--}}
{{--                <div style="flex: 1; display: flex; justify-content: center; margin-right: auto">--}}
{{--                    Tove Lind Skälderviken Badminton--}}
{{--                </div>--}}
{{--        <div class="py-3" style="flex: max-content; display: flex; justify-content: center;">--}}
{{--            <a--}}
{{--                href="https://www.barncancerfonden.se/"--}}
{{--                target="_blank"--}}
{{--                class="text-light"--}}
{{--            >--}}
{{--                <img--}}
{{--                    src="{{ asset('storage/barncancerfonden-logo.png') }} "--}}
{{--                    alt="Barncancer Fonden"--}}
{{--                    height="80"--}}
{{--                >--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="py-3" style="flex: 1; display: flex; min-width: -webkit-min-content; justify-content: flex-end">--}}
{{--            <a--}}
{{--                href="https://www.laget.se/KIS_BANDY_DAMER"--}}
{{--                target="_blank"--}}
{{--                class="text-light"--}}
{{--            ><img--}}
{{--                    src="{{ asset('storage/kareby_is_slas.png') }}"--}}
{{--                    alt="Kareby IS damlag"--}}
{{--                    height="80"--}}
{{--                />--}}
{{--                test--}}
{{--            </a>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div
    class="w-100 text-light"
    style="background-color: #3A3A3A"
>
    <div class="container-xl d-flex align-items-center">
        <div style="flex: 1; display: flex; min-width: -webkit-min-content;">
            <a class="text-light">
                <img
                    class="my-2"
                    src="{{ asset('storage/logos/svensk_miljobas.jpg') }}"
                    alt="Svensk Miljöbas"
                />
                <img
                    class="my-2"
                    src="{{ asset('storage/logos/plat_o_vent.png') }}"
                    alt="Plåt & Ventföretagen"
                />
            </a>
        </div>
        <div style="flex: max-content; display: flex; justify-content: center;">
            <a class="h5">
                {{ __('mytranslation.kodeplat') }}<br>
            </a>
            <a
                class="text-white"
                href="/contact"
            >
                {{ __('mytranslation.address') }}<br>
            </a>
            <a
                class="text-white"
                href="tel:+46 303 948 36"
            >
                <span style="color: #ffffff">Tel & Fax {{ __('mytranslation.nummer') }}</span>
                <br>
            </a>
            <a
                class="text-white"
                href="mailto:info@kodeplat.se"
            >
                <span style="color: #ffffff">
                {{ __('mytranslation.email') }}
                </span>
            </a><br>
            @guest
                <a
                    href="/login"
                    class="text-white"
                >{{ __('mytranslation.login') }} |</a>
                <a
                    href="/register"
                    class="text-white"
                >{{ __('mytranslation.register') }}</a><br>
            @else
                <a href="{{ route('logout') }}" class="text-white" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('mytranslation.logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </div>
        <div style="flex: 1; display: flex; min-width: -webkit-min-content; justify-content: flex-end">
            <a>
                <img
                    class="my-2"
                    src="{{ asset('storage/logos/incert.png') }}"
                    alt="incert"
                    width="140"
                    height="136"
                />
            </a>
        </div>
    </div>
</div>
