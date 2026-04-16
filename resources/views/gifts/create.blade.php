@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Créer un cadeau</h1>

    <form action="{{ route('gifts.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="url" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{ old('url') }}">
                @error('url')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="details" class="form-label">Détails</label>
            <textarea class="form-control @error('details') is-invalid @enderror" id="details" name="details">{{ old('details') }}</textarea>
                @error('details')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prix (€)</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}" required>
                @error('price')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
        </div>

        <button type="submit" class="btn btn-success">Créer</button>
        <a href="{{ route('home') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection