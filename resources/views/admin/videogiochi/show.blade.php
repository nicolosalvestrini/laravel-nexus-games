@extends('layouts.admin')

@section('title', $videoGioco->titolo)

@section('content')
<div class="card p-4">

    @if ($videoGioco->copertina)
    <img src="{{ Storage::url($videoGioco->copertina) }}" alt="{{ $videoGioco->titolo }}"
        class="rounded mb-3 ng-cover-lg">
    @endif

    <h1 class="h3">{{ $videoGioco->titolo }}</h1>

    <p class="text-white-50">Anno: {{ $videoGioco->anno_uscita }} — Voto: {{ $videoGioco->voto }}</p>
    <p>{{ $videoGioco->descrizione }}</p>

    <p>
        @foreach ($videoGioco->generi as $genere)
        <span class="badge text-bg-primary">{{ $genere->nome }}</span>
        @endforeach
        @foreach ($videoGioco->piattaforme as $piattaforma)
        <span class="badge text-bg-secondary">{{ $piattaforma->nome }}</span>
        @endforeach
    </p>

    <a href="{{ route('videogiochi.edit', $videoGioco) }}" class="btn btn-ng-primary">Modifica</a>

    <a href="{{ route('videogiochi.index') }}" class="btn btn-outline-light">Torna alla lista</a>

</div>
@endsection