<h1>{{ $conference['title'] }}</h1>

<p>{{ $conference['description'] }}</p>
<p>Data: {{ $conference['date'] }}</p>
<p>Vieta: {{ $conference['location'] }}</p>

<h3>Užsiregistravę klientai</h3>

<ul>
@foreach($participants as $p)
    <li>{{ $p }}</li>
@endforeach
</ul>

<a href="/employee/conferences">Atgal</a>