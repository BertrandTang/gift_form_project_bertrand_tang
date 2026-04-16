@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détail du cadeau</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $gift->name }}</h5>
            <p class="card-text">{{ $gift->details }}</p>
            <p class="card-text"><strong>Prix :</strong> {{ $gift->price }} €</p>
            <p class="card-text"><a href="{{ $gift->url }}" target="_blank">Voir le lien</a></p>
            <a href="{{ route('gifts.edit', $gift) }}" class="btn btn-primary">Éditer</a>
            <a href="{{ route('home') }}" class="btn btn-secondary">Retour</a>
        </div>
    </div>
</div>
@endsection
