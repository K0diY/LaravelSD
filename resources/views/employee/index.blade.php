@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{ __('messages.all_conferences') }}</h1>

    <div class="list-group">
        @foreach($conferences as $conf)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="mb-1">{{ $conf['title'] }}</h5>
                    <small>{{ __('messages.date') }}: {{ $conf['date'] ?? '-' }}</small><br>
                    <small>{{ __('messages.location') }}: {{ $conf['location'] ?? '-' }}</small>
                </div>

                <a href="/employee/conferences/{{ $conf['id'] }}" class="btn btn-primary btn-sm">
                    {{ __('messages.view') }}
                </a>
            </div>
        @endforeach
    </div>
@endsection