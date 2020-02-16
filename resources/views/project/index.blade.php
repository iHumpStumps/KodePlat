@extends('layouts.app')

@section('content')
    <div class="card-deck row-cols-1 row-cols-md-3">
        @foreach($projects as $project)
            <div class="col mb-3">
                <a href="/" class="">
                    <div
                        class="card h-100"
                        style="max-width: 24rem;"
                    >
                        <div class="HoverDiv">
                            <img
                                src="storage/{{ $images['image' . $project->id] }}"
                                class="card-img-top"
                                alt="..."
                            >
                        </div>

                        <div
                            class="card-body"
                            style="text-align: center; background-color: white"
                        >
                            <h5 class="card-title">
                                {{ $project->title }}
                            </h5>
                            <p class="card-text">
                                {{ $project->information }}
                            </p>
                        </div>
                        <div class="card-footer text-muted text-center">
                        {{ '#' . 'Placeholder' }} <!-- Placeholder for tags such as punchjob, etc. -->
                            {{ '#' . $project->metal }}
                            <div class="float-right">
                                {{ $project->year }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
