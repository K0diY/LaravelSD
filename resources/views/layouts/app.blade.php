<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.system_name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">{{ __('messages.system_name') }}</a>

            <div class="navbar-nav me-auto">
                <a class="nav-link" href="/client/conferences">{{ __('messages.client') }}</a>
                <a class="nav-link" href="/employee/conferences">{{ __('messages.employee') }}</a>
                <a class="nav-link" href="/admin">{{ __('messages.admin') }}</a>
            </div>

            <span class="navbar-text me-3 text-white">Vardenis Pavardenis</span>
            <button class="btn btn-outline-light" disabled>{{ __('messages.logout') }}</button>
        </div>
    </nav>

    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>