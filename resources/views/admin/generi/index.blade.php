@extends('layouts.admin')

@section('title', 'Generi')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 mb-0">Generi</h1>
    <a href="{{ route('generi.create') }}" class="btn btn-ng-primary">+ Nuovo genere</a>
</div>

<div class="card">
    <table class="table table-dark table-hover align-middle mb-0">
        <thead>
            <tr>
                <th>Nome</th>
                <th class="text-end">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($generi as $genere)
            <tr>
                <td>{{ $genere->nome }}</td>
                <td class="text-end">
                    <a href="{{ route('generi.edit', $genere) }}" class="btn btn-sm btn-outline-light">Modifica</a>
                    <form action="{{ route('generi.destroy', $genere) }}" method="POST" class="d-inline" onsubmit="return confirm('Eliminare questo genere?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Elimina</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="2" class="text-center text-white-50 py-4">Nessun genere presente.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $generi->links() }}
</div>
@endsection