@extends('layouts.app')

@section('content')
    {{--    <div style="width: 50%; min-width: 300px;">--}}
    <div class="d-flex justify-content-center container">

        <div class="row">
            <form
                method="POST"
                action="{{ action([\App\Http\Controllers\ProjectController::class, 'store'])  }}"
                enctype="multipart/form-data"
            >
                @csrf
                <div
                    class="form-group"
                >
                    <label for="title">
                        Titel:
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                    />
                </div>

                <div class="form-group">
                    <label for="information">
                        Information:
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        name="information"
                    />
                </div>

                <div class="form-group">
                    <label for="metal">
                        Metall:
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        name="metal"
                    />
                </div>

                <div class="form-group">
                    <label for="buyer">
                        Beställare:
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        name="buyer"
                    />
                </div>

                <div class="form-group">
                    <label for="address">
                        Address:
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        name="address"
                    />
                </div>

                <div class="form-group">
                    <label for="year">
                        År:
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        name="year"
                    />
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input
                            type="file"
                            class="custom-file-input"
                            name="filename"
                            id="myInput"
                            aria-describedby="myInput"
                            onchange="$(this).next().after().text($(this).val().split('\\').slice(-1)[0])"
                        >
                        <label
                            class="custom-file-label"
                            for="myInput"
                        >
                            {{ __('mytranslation.choose_file') }}
                        </label>
                    </div>
                </div>
                <div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >{{ __('mytranslation.upload') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
