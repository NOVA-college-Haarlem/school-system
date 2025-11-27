<h1>Vak Bewerken: {{ $vak->naam }}</h1>

<form method="POST" action="{{ route('vak.update', $vak) }}">
    @csrf
    @method('PUT')

    <label>Naam:</label>
    <input type="text" name="naam" value="{{ $vak->naam }}" required>

    <label>Beschrijving:</label>
    <textarea name="beschrijving">{{ $vak->beschrijving }}</textarea>

    <label>Afbeelding:</label>
    <input type="text" name="afbeelding" value="{{ $vak->afbeelding }}">

    <button type="submit">Bijwerken</button>
</form>
