<h1>Redaguoti konferenciją</h1>

<form>
    <input type="text" value="{{ $conference['title'] }}"><br><br>
    <textarea>{{ $conference['description'] }}</textarea><br><br>
    <input type="date" value="{{ $conference['date'] }}"><br><br>
    <input type="text" value="{{ $conference['location'] }}"><br><br>
    <button type="submit">Išsaugoti</button>
</form>