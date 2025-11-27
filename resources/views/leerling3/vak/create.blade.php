<h1>Nieuw Vak Aanmaken</h1>

<form method="POST" action="{{ route('vak.store') }}">
    @csrf

    <label>Naam:</label>
    <input type="text" name="naam" required>

    <label>Beschrijving:</label>
    <textarea name="beschrijving"></textarea>

    <label>Afbeelding (URL):</label>
    <input type="text" name="afbeelding">

    <button type="submit">Opslaan</button>
</form>
