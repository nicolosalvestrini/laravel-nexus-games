@extends('layouts.admin')

@section('title', 'Piattaforme')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 mb-0">Piattaforme</h1>
    <a href="{{ route('piattaforme.create') }}" class="btn btn-ng-primary">+ Nuova piattaforma</a>
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
            @forelse ($piattaforme as $piattaforma)
            <tr>
                <td>{{ $piattaforma->nome }}</td>
                <td class="text-end">
                    <a href="{{ route('piattaforme.edit', $piattaforma) }}" class="btn btn-sm btn-outline-light">Modifica</a>
                    <form action="{{ route('piattaforme.destroy', $piattaforma) }}" method="POST" class="d-inline" onsubmit="return confirm('Eliminare questa piattaforma?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Elimina</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="2" class="text-center text-white-50 py-4">Nessuna piattaforma presente.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{ $piattaforme->links() }}
</div>
@endsection