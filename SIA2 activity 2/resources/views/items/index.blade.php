@extends('layouts.app')

@section('title', 'Elite Troops Arsenal')

@section('content')
<div class="text-center mb-5">
    <h1 class="display-3 fw-bold mb-3" style="font-family: 'Orbitron', monospace; color: var(--primary-gold);">
        🏰 Troops Arsenal
    </h1>
    <p class="lead fs-4 text-light opacity-90">Deploy the ultimate army. Choose your warriors wisely.</p>
</div>

<div class="row g-4">
    @foreach($items as $item)
    <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="card h-100 troop-card {{ $item['rarity'] == 'Epic' ? 'rarity-epic' : ($item['rarity'] == 'Rare' ? 'rarity-rare' : '') }}">
            <div class="card-img-top p-4">
                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}"
                     class="troop-image w-100 mx-auto d-block shadow-lg">
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-white fw-bold fs-4 mb-3 text-center">
                    {{ $item['name'] }}
                </h5>
                <div class="text-center mb-3">
                    <span class="badge fs-6 px-3 py-2 fw-semibold {{ $item['rarity'] == 'Epic' ? 'bg-danger' : ($item['rarity'] == 'Rare' ? 'bg-warning text-dark' : 'bg-secondary') }}">
                        {{ $item['rarity'] }}
                    </span>
                </div>
                <ul class="list-unstyled mb-4">
                    <li class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Housing Space</span>
                        <span class="badge bg-primary fs-6">{{ $item['housing_space'] }}</span>
                    </li>
                    <li class="d-flex justify-content-between mb-2">
                        <span class="text-muted">DPS</span>
                        <span class="badge bg-success fs-6">{{ $item['dps'] }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span class="text-muted">Role</span>
                        <span class="badge bg-info">{{ $item['role'] }}</span>
                    </li>
                </ul>
                <a href="{{ route('items.show', $item['id']) }}" class="btn btn-clash w-100 mt-auto">
                    <i class="fas fa-eye me-2"></i>View Battle Stats
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection