@extends('layouts.admin')

@section('title', $videoGioco->titolo)

@section('content')
<div class="card p-4">
    <h1 class="h3">{{ $videoGioco->titolo }}</h1>
    <p class="text-white-50">Anno: {{ $videoGioco->anno_uscita }} — Voto: {{ $videoGioco->voto }}</p>
    <p>{{ $videoGioco->descrizione }}</p>

    <a href="{{ route('videogiochi.edit', $videoGioco) }}" class="btn btn-ng-primary">Modifica</a>
    <a href="{{ route('videogiochi.index') }}" class="btn btn-outline-light">Torna alla lista</a>
</div>
@endsection