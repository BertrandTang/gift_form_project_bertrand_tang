@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Créer un cadeau</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('gifts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="url" class="form-control" id="url" name="url" value="{{ old('url') }}">
        </div>
        <div class="mb-3">
            <label for="details" class="form-label">Détails</label>
            <textarea class="form-control" id="details" name="details">{{ old('details') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix (€)</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Créer</button>
        <a href="{{ route('home') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
