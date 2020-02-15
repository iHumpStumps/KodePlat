@extends('layouts.app')

@section('content')
    {{--    <div style="width: 50%; min-width: 300px;">--}}
    <div class="d-flex justify-content-center container">

        <div class="row">
            <form
                method="POST"
                action="{{ action([\App\Http\Controllers\ProjectController::class, 'store'])  }}"
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

                <div>
                    <input
                        type="button"
                        class="btn btn-secondary"
                        id="uploadImage"
                        value="{{ __('mytranslation.upload') }}"
                        onclick="document.getElementById('file').click();"
                    />
                    <input
                        type="file"
                        style="display:none;"
                        id="file"
                        name="file"
                    />

                    <button
                        type="submit"
                        class="btn btn-primary float-right"
                    >Ladda upp!
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
