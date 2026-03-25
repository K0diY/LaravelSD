<h1>Konferencijų valdymas</h1>

<a href="/admin/conferences/create">Kurti naują konferenciją</a>

<ul>
@foreach($conferences as $conf)
    <li>
        {{ $conf['title'] }}
        <a href="/admin/conferences/{{ $conf['id'] }}/edit">Redaguoti</a>
    </li>
@endforeach
</ul>