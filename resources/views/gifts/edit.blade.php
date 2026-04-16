@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Éditer le cadeau</h1>

    <form action="{{ route('gifts.update', $gift) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $gift->name) }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="url" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{ old('url', $gift->url) }}">
            @error('url')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="details" class="form-label">Détails</label>
            <textarea class="form-control @error('details') is-invalid @enderror" id="details" name="details">{{ old('details', $gift->details) }}</textarea>
            @error('details')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prix (€)</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $gift->price) }}" required>
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('home') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection