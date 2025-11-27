

<h1>Vakken Beheer</h1>

<a href="{{ route('vak.create') }}">+ Nieuw Vak</a>

<table border="1">
    <tr>
        <th>Naam</th>
        <th>Acties</th>
    </tr>

    @foreach($vakken as $vak)
        <tr>
            <td>{{ $vak->naam }}</td>
            <td>
                <a href="{{ route('vak.edit', $vak) }}">Bewerken</a>

                <form method="POST" action="{{ route('vak.destroy', $vak) }}" style="display:inline;" onsubmit="return confirm('Weet je zeker dat je dit vak wilt verwijderen?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Verwijderen</button>
                </form>

            </td>
        </tr>
    @endforeach
</table>
