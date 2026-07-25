@extends('layouts.admin')

@section('title', 'Nuovo videogioco')

@section('content')
<h1 class="h3 mb-4">Nuovo videogioco</h1>

<div class="card p-4">
    <form method="POST" action="{{ route('videogiochi.store') }}">
        @csrf

        @include('admin.videogiochi._form')

        <button type="submit" class="btn btn-ng-primary">Salva</button>
        <a href="{{ route('videogiochi.index') }}" class="btn btn-outline-light">Annulla</a>
    </form>
</div>
@endsection