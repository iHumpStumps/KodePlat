<div
    class="w-100 text-light"
    style="background-color: #0071B8"
>
    <div class="container-xl d-flex justify-content-between">

        <div class="my-2">
            <a
                href="https://www.barncancerfonden.se/"
                target="_blank"
                class="text-light"
            >
                <img
                    src="{{ asset('storage/barncancer_fonden.png') }} "
                    alt="Barncancer Fonden"
                >
            </a>
        </div>


        <div
            class="my-2"
            style="display:inline-block; justify-content: center; align-items: center"
        >
            <a
                href="https://www.sbmk.se/"
                target="_blank"
                class="text-light"
            ><img
                    src="{{ asset('storage/badminton.png') }}"
                    alt="Skälderviken Badminton"
                />
                <p>{{ __('mytranslation.badminton_information1') }}<br>
                    {{ __('mytranslation.badminton_information2') }}</p>
            </a>
        </div>


        <div class="my-2">
            <a
                href="https://www.laget.se/KIS_BANDY_DAMER"
                target="_blank"
                class="text-light"
            ><img
                    src="{{ asset('storage/kareby_is_slas.png') }}"
                    alt="Kareby IS damlag"
                /></a>
        </div>
    </div>
</div>
<div
    class="w-100 text-light"
    style="background-color: #3A3A3A"
>
    <div class="container-xl d-flex justify-content-between">
        <div class="col-1 my-1">
            <a>
                <img
                    class="my-2"
                    src="{{ asset('storage/svensk_miljobas.jpg') }}"
                    alt="Svensk Miljöbas"
                />
                <img
                    class="my-2"
                    src="{{ asset('storage/plat_o_vent.png') }}"
                    alt="Plåt & Ventföretagen"
                />
            </a>
        </div>
        <div class="text-center text-white my-2">
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
            </a>
        </div>
        <div class="my-2">
            @guest
                <a
                    href="/login"
                    class="text-white"
                >{{ __('mytranslation.login') }} |</a>
                <a
                    href="/register"
                    class="text-white"
                >{{ __('mytranslation.register') }}</a><br>
            @endguest
        </div>
    </div>
</div>
