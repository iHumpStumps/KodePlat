@extends('layouts.app')

@section('content')
    <div class="card-deck">
        @foreach($projects as $project)
            <div
                class="card"
                style="width: 18rem;"
            >
                <div>
                    <img
                        src="storage/{{ $images['image' . $project->id] }}"
                        class="card-img-top"
                        alt="..."
                    />
                </div>
                <div
                    class="card-body"
                    style="text-align: center"
                >
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ $project->information }}</p>
                    <a
                        href="{{ route('projects.show', $project) }}"
                        class="btn btn-primary"
                    >
                        {{ __('more') }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
