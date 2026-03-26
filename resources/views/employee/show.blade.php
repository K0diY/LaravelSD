@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{ $conference['title'] }}</h1>

    <div class="card mb-4">
        <div class="card-body">
            <p><strong>{{ __('messages.description') }}:</strong> {{ $conference['description'] }}</p>
            <p><strong>{{ __('messages.date') }}:</strong> {{ $conference['date'] }}</p>
            <p><strong>{{ __('messages.location') }}:</strong> {{ $conference['location'] }}</p>
        </div>
    </div>

    <h3 class="mb-3">{{ __('messages.participants') }}</h3>

    <ul class="list-group mb-3">
        @foreach($participants as $p)
            <li class="list-group-item">{{ $p }}</li>
        @endforeach
    </ul>

    <a href="/employee/conferences" class="btn btn-secondary">{{ __('messages.back') }}</a>
@endsection