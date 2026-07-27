@extends('layouts.admin')

@section('title', 'Nuovo genere')

@section('content')
<h1 class="h3 mb-4">Nuovo genere</h1>

<div class="card p-4">
    <form method="POST" action="{{ route('generi.store') }}">
        @csrf
        @include('admin.generi._form')

        <button type="submit" class="btn btn-ng-primary">Salva</button>
        <a href="{{ route('generi.index') }}" class="btn btn-outline-light">Annulla</a>
    </form>
</div>
@endsection