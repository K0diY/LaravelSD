<h1>Redaguoti naudotoją</h1>

<form>
    <input type="text" value="{{ $user['name'] }}"><br><br>
    <input type="text" value="{{ $user['surname'] }}"><br><br>
    <input type="email" value="{{ $user['email'] }}"><br><br>
    <button type="submit">Išsaugoti</button>
</form>