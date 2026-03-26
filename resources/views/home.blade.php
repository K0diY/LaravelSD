@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{ __('messages.home') }}</h1>

    <div class="list-group">
        <a href="/client/conferences" class="list-group-item list-group-item-action">
            {{ __('messages.client') }}
        </a>

        <a href="/employee/conferences" class="list-group-item list-group-item-action">
            {{ __('messages.employee') }}
        </a>

        <a href="/admin" class="list-group-item list-group-item-action">
            {{ __('messages.admin') }}
        </a>
    </div>
@endsection