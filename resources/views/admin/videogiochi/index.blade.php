@extends('layouts.admin')

@section('title', 'Videogiochi')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 mb-0">Videogiochi</h1>
    <a href="{{ route('videogiochi.create') }}" class="btn btn-ng-primary">+ Nuovo videogioco</a>
</div>

<div class="card">
    <table class="table table-dark table-hover align-middle mb-0">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Anno</th>
                <th>Voto</th>
                <th class="text-end">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($videoGiochi as $videoGioco)
            <tr>
                <td>{{ $videoGioco->titolo }}</td>
                <td>{{ $videoGioco->anno_uscita }}</td>
                <td>{{ $videoGioco->voto }}</td>
                <td class="text-end">
                    <a href="{{ route('videogiochi.show', $videoGioco) }}" class="btn btn-sm btn-outline-light">Dettagli</a>
                    <a href="{{ route('videogiochi.edit', $videoGioco) }}" class="btn btn-sm btn-outline-light">Modifica</a>
                    <form action="{{ route('videogiochi.destroy', $videoGioco) }}" method="POST" class="d-inline" onsubmit="return confirm('Eliminare questo videogioco?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Elimina</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center text-white-50 py-4">Nessun videogioco presente.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $videoGiochi->links() }}
</div>
@endsection