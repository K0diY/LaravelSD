<h1>Visos konferencijos</h1>

<ul>
@foreach($conferences as $conf)
    <li>
        {{ $conf['title'] }}
        <a href="/employee/conferences/{{ $conf['id'] }}">Peržiūrėti</a>
    </li>
@endforeach
</ul>