@extends('layouts.admin')

@section('title', 'Modifica piattaforma')

@section('content')
<h1 class="h3 mb-4">Modifica: {{ $piattaforma->nome }}</h1>

<div class="card p-4">
    <form method="POST" action="{{ route('piattaforme.update', $piattaforma) }}">
        @csrf
        @method('PUT')
        @include('admin.piattaforme._form')

        <button type="submit" class="btn btn-ng-primary">Aggiorna</button>
        <a href="{{ route('piattaforme.index') }}" class="btn btn-outline-light">Annulla</a>
    </form>
</div>
@endsection