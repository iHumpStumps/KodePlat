@extends('layouts.app')

@section('content')
    @foreach($projects as $project)
        <div
            class="card"
            style="width: 18rem;"
        >
            <img
                src="storage/{{ $images['image' . $project->id] }}"
                class="card-img-top"
                alt="..."
            >
            <div class="card-body">
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
@endsection
