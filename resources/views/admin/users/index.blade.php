<h1>Naudotojų sąrašas</h1>

<ul>
@foreach($users as $user)
    <li>
        {{ $user['name'] }} {{ $user['surname'] }}
        <a href="/admin/users/{{ $user['id'] }}/edit">Redaguoti</a>
    </li>
@endforeach
</ul>