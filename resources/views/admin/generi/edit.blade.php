@extends('layouts.admin')

@section('title', 'Modifica genere')

@section('content')
<h1 class="h3 mb-4">Modifica: {{ $genere->nome }}</h1>

<div class="card p-4">
    <form method="POST" action="{{ route('generi.update', $genere) }}">
        @csrf
        @method('PUT')
        @include('admin.generi._form')

        <button type="submit" class="btn btn-ng-primary">Aggiorna</button>
        <a href="{{ route('generi.index') }}" class="btn btn-outline-light">Annulla</a>
    </form>
</div>
@endsection