@extends('layouts.app')

@section('title', $item['name'] . ' Battle Stats')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-10">
        <!-- Hero Section -->
        <div class="text-center mb-5">
            <div class="card bg-transparent border-0">
                <div class="card-body p-0">
                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}"
                         class="img-fluid rounded-circle shadow-lg" style="max-height: 300px; width: 300px; object-fit: cover;">
                    <h1 class="display-4 fw-bold mt-4 mb-2" style="color: var(--primary-gold); font-family: 'Orbitron', monospace;">
                        {{ $item['name'] }}
                    </h1>
                    <div class="mb-4">
                        <span class="badge fs-4 px-4 py-3 fw-bold {{ $item['rarity'] == 'Epic' ? 'bg-danger shadow-lg' : ($item['rarity'] == 'Rare' ? 'bg-warning text-dark shadow-lg' : 'bg-secondary shadow-lg') }}">
                            {{ $item['rarity'] }} Tier
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="row g-4 mb-5">
            <div class="col-lg-8">
                <div class="card troop-card h-100 {{ $item['rarity'] == 'Epic' ? 'rarity-epic' : ($item['rarity'] == 'Rare' ? 'rarity-rare' : '') }}">
                    <div class="card-header bg-dark border-0">
                        <h3 class="mb-0 fw-bold text-white">
                            <i class="fas fa-chart-bar me-2 text-warning"></i>
                            Combat Statistics
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="stats-grid">
                            <div class="stat-item text-center p-4 bg-dark rounded-3">
                                <i class="fas fa-home fa-2x text-primary mb-3"></i>
                                <h5 class="fw-bold text-white mb-1">Housing Space</h5>
                                <div class="display-6 fw-bold text-primary">{{ $item['housing_space'] }}</div>
                            </div>
                            <div class="stat-item text-center p-4 bg-dark rounded-3">
                                <i class="fas fa-bolt fa-2x text-success mb-3"></i>
                                <h5 class="fw-bold text-white mb-1">Damage Per Second</h5>
                                <div class="display-6 fw-bold text-success">{{ $item['dps'] }}</div>
                            </div>
                            <div class="stat-item text-center p-4 bg-dark rounded-3">
                                <i class="fas fa-users fa-2x text-info mb-3"></i>
                                <h5 class="fw-bold text-white mb-1">Battle Role</h5>
                                <div class="h5 fw-bold text-info">{{ $item['role'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card bg-dark h-100">
                    <div class="card-body text-center">
                        <h5 class="text-warning mb-4">
                            <i class="fas fa-lightbulb me-2"></i>Strategic Use
                        </h5>
                        <p class="lead text-light mb-4">
                            "{{ $item['name'] }}s excel as {{ strtolower($item['role']) }}.
                            Perfect for targeted attacks and base dismantling!
                        </p>
                        <div class="alert alert-warning">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <strong>Pro Tip:</strong> Pair with {{ $item['name'] == 'Balloon' ? 'Archers' : 'Giants' }} for maximum impact!
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="text-center">
            <a href="{{ route('items.index') }}" class="btn btn-clash btn-lg px-5 me-3">
                <i class="fas fa-arrow-left me-2"></i>Back to Arsenal
            </a>
        </div>
    </div>
</div>

<script>
function printTroop() {
    window.print();
}
</script>
@endsection