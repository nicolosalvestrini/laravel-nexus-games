@extends('layouts.admin')

@section('title', 'Nuova piattaforma')

@section('content')
<h1 class="h3 mb-4">Nuova piattaforma</h1>

<div class="card p-4">
    <form method="POST" action="{{ route('piattaforme.store') }}">
        @csrf
        @include('admin.piattaforme._form')

        <button type="submit" class="btn btn-ng-primary">Salva</button>
        <a href="{{ route('piattaforme.index') }}" class="btn btn-outline-light">Annulla</a>
    </form>
</div>
@endsection