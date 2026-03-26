@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{ $conference['title'] }}</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>{{ __('messages.description') }}:</strong> {{ $conference['description'] }}</p>
            <p><strong>{{ __('messages.date') }}:</strong> {{ $conference['date'] }}</p>
            <p><strong>{{ __('messages.location') }}:</strong> {{ $conference['location'] }}</p>

            <a href="/client/conferences" class="btn btn-secondary">{{ __('messages.back') }}</a>
        </div>
    </div>
@endsection