@extends('layouts.app')

@section('content')
    <div class="container text-center my-4">
        <h1>{{ $project->name }}</h1>
        <a class="text-decoration-none text-black" href="{{ $project->git_link }}">GIT HUB PAGE</a>
        @if ($project->finished)
            <h6 class="text-success">Completato</h6>
        @else
            <h6 class="text-warning">In Lavorazione</h6>
        @endif
    </div>
@endsection
