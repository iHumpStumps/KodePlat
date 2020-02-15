<div class="w-100 text-light bg-secondary">
    <div class="container-xl d-flex justify-content-between">
        <div>
            (Icons)
        </div>
        <div>
            <a
                href="#"
                class="text-light"
            >Column one</a>
        </div>
        <div>
            <a
                href="#"
                class="text-light"
            >Column two</a>
        </div>
        <div>
            <a
                href="#"
                class="text-light"
            >Column three</a>
            <br>
        </div>
        <div>
            @guest
                <a
                    href="/login"
                    class="text-light"
                >{{ __('mytranslation.login') }}</a> |
                <a
                    href="/register"
                    class="text-light"
                >{{ __('mytranslation.register') }}</a><br>
            @endguest
        </div>
    </div>
</div>
