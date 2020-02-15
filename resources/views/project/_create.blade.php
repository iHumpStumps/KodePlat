@extends('layouts.app')

@section('content')
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
                    <textarea
                        class="form-control rounded-0"
                        id="exampleFormControlTextarea1"
                        rows="3"
                    ></textarea>
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
                        >{{ __('mytranslation.upload') }}</label>
                    </div>
                </div>
                <div><br>
                    <button
                        type="submit"
                        class="btn btn-secondary w-100"
                    >{{ __('mytranslation.create_project') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
