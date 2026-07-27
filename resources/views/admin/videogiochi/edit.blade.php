@extends('layouts.admin')

@section('title', 'Modifica videogioco')

@section('content')
<h1 class="h3 mb-4">Modifica: {{ $videoGioco->titolo }}</h1>

<div class="card p-4">
    <form method="POST" action="{{ route('videogiochi.update', $videoGioco) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('admin.videogiochi._form')

        <button type="submit" class="btn btn-ng-primary">Aggiorna</button>
        <a href="{{ route('videogiochi.index') }}" class="btn btn-outline-light">Annulla</a>
    </form>
</div>
@endsection