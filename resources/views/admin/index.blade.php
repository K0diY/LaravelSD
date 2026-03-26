@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Administratoriaus puslapis</h1>

    <div class="list-group">
        <a href="/admin/users" class="list-group-item list-group-item-action">
            Naudotojų valdymas
        </a>
        <a href="/admin/conferences" class="list-group-item list-group-item-action">
            Konferencijų valdymas
        </a>
    </div>
@endsection