@extends('layouts.app')

@section('hero')
<div class="hero-section py-5 mb-5" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d3436 100%); color: white; border-radius: 0 0 50px 50px; position: relative; overflow: hidden;">
    <div style="position: absolute; right: -10%; top: -20%; width: 400px; height: 400px; background: rgba(255, 202, 44, 0.05); border-radius: 50%;"></div>

    <div class="container py-4 position-relative">
        <div class="row align-items-center">
            <div class="col-lg-7 text-center text-lg-start">
                <span class="badge bg-warning text-dark mb-3 px-3 py-2 rounded-pill fw-bold shadow-sm">LIVE INVENTORY</span>
                <h1 class="display-3 fw-extrabold mb-3 tracking-tight">
                    🥚 Premium Egg <span class="text-warning">Market</span>
                </h1>
                <p class="lead mb-4 opacity-75 fs-4">Manage your poultry assets with precision, real-time tracking, and valuation tools.</p>
                <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                    <a href="{{ route('eggs.create') }}" class="btn btn-warning btn-lg px-4 fw-bold shadow-sm hover-lift rounded-pill">
                        <i class="bi bi-plus-lg me-2"></i>Register New Batch
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block text-center">
                <div class="floating-egg">
                    <i class="bi bi-egg-fried display-1 text-warning opacity-25" style="font-size: 12rem;"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fw-extrabold { font-weight: 800; }
    .hover-lift { transition: all 0.3s ease; }
    .hover-lift:hover { transform: translateY(-8px); box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important; }

    /* Stats Cards */
    .stats-card { border: none; border-radius: 24px; background: #fff; border-bottom: 4px solid transparent; transition: all 0.3s ease; }
    .stats-card:hover { border-bottom: 4px solid #ffca2c; }

    /* Search Bar Glassmorphism */
    .search-glass { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px); border-radius: 24px; border: 1px solid rgba(0,0,0,0.05); }

    /* NEW EGG CARD DESIGN */
    .new-egg-card {
        border: none;
        border-radius: 24px;
        background: linear-gradient(145deg, #2d5a3f 0%, #1a4d2e 100%);
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(26, 77, 46, 0.3);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        backdrop-filter: blur(10px);
    }
    .new-egg-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #ffca2c, #ffd43b, #ffca2c);
        transform: scaleX(0);
        transition: transform 0.4s ease;
    }
    .new-egg-card:hover::before { transform: scaleX(1); }
    .new-egg-card:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 30px 60px rgba(26, 77, 46, 0.4);
    }

    .card-header-gradient {
        background: linear-gradient(135deg, rgba(255,202,44,0.15) 0%, rgba(255,212,59,0.1) 100%);
        border: none;
        padding: 1.5rem 1.75rem 1rem;
        position: relative;
    }

    .stock-badge-modern {
        background: linear-gradient(135deg, #198754 0%, #20c997 100%);
        color: white;
        border-radius: 20px;
        padding: 0.5rem 1rem;
        font-size: 0.85rem;
        font-weight: 700;
        box-shadow: 0 4px 15px rgba(25, 135, 84, 0.3);
        position: relative;
        overflow: hidden;
    }
    .stock-badge-modern::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }
    .stock-badge-modern:hover::after { left: 100%; }

    .low-stock-badge {
        background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
        box-shadow: 0 4px 15px rgba(220, 53, 69, 0.3);
    }

    .egg-icon-modern {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, rgba(255,202,44,0.2) 0%, rgba(255,212,59,0.1) 100%);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255,202,44,0.3);
        position: relative;
    }
    .egg-icon-modern::before {
        content: '🥚';
        font-size: 2.5rem;
        z-index: 2;
    }

    .price-badge {
        background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
        border-radius: 16px;
        padding: 1rem 1.5rem;
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        border: 1px solid rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
    }

    .card-footer-modern {
        background: rgba(255,255,255,0.05);
        border-top: 1px solid rgba(255,255,255,0.1);
        backdrop-filter: blur(10px);
        padding: 1.25rem 1.75rem;
    }

    .btn-modern-primary {
        background: linear-gradient(135deg, #ffca2c 0%, #ffd43b 100%);
        border: none;
        color: #1a1a1a;
        font-weight: 700;
        padding: 0.6rem 1.5rem;
        border-radius: 50px;
        box-shadow: 0 6px 20px rgba(255,202,44,0.4);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    .btn-modern-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(255,202,44,0.5);
        color: #1a1a1a;
    }

    .btn-modern-secondary {
        background: rgba(255,255,255,0.15);
        border: 1px solid rgba(255,255,255,0.3);
        color: white;
        font-weight: 600;
        padding: 0.6rem 1.5rem;
        border-radius: 50px;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }
    .btn-modern-secondary:hover {
        background: rgba(255,255,255,0.25);
        border-color: rgba(255,255,255,0.5);
        transform: translateY(-2px);
    }

    .egg-id-badge {
        background: rgba(255,255,255,0.1);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        padding: 0.4rem 1rem;
        font-size: 0.75rem;
        border: 1px solid rgba(255,255,255,0.2);
    }

    .status-indicator {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        border: 3px solid rgba(255,255,255,0.3);
        box-shadow: 0 0 20px rgba(25, 135, 84, 0.6);
        animation: pulse 2s infinite;
    }
    .status-indicator.low-stock {
        box-shadow: 0 0 20px rgba(220, 53, 69, 0.6);
        animation: pulse-danger 2s infinite;
    }
    @keyframes pulse {
        0% { box-shadow: 0 0 20px rgba(25, 135, 84, 0.6); }
        50% { box-shadow: 0 0 30px rgba(25, 135, 84, 0.8); }
        100% { box-shadow: 0 0 20px rgba(25, 135, 84, 0.6); }
    }
    @keyframes pulse-danger {
        0% { box-shadow: 0 0 20px rgba(220, 53, 69, 0.6); }
        50% { box-shadow: 0 0 30px rgba(220, 53, 69, 0.8); }
        100% { box-shadow: 0 0 20px rgba(220, 53, 69, 0.6); }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row mb-5 mt-n5 position-relative" style="z-index: 10;">
        @php
            $stats = [
                ['icon' => 'bi-egg-fill', 'label' => 'Total Batches', 'value' => $eggs->total(), 'color' => 'text-primary', 'bg' => 'bg-primary'],
                ['icon' => 'bi-cash-stack', 'label' => 'Total Value', 'value' => '₱' . number_format($eggs->sum('price_per_dozen'), 2), 'color' => 'text-success', 'bg' => 'bg-success'],
                ['icon' => 'bi-box-seam-fill', 'label' => 'Units in Stock', 'value' => $eggs->sum('stock_quantity'), 'color' => 'text-warning', 'bg' => 'bg-warning'],
                ['icon' => 'bi-activity', 'label' => 'Market Status', 'value' => 'Active', 'color' => 'text-info', 'bg' => 'bg-info'],
            ];
        @endphp

        @foreach($stats as $stat)
        <div class="col-md-3 mb-4">
            <div class="card stats-card shadow-sm h-100 p-3">
                <div class="d-flex align-items-center">
                    <div class="rounded-4 p-3 {{ $stat['bg'] }} bg-opacity-10 {{ $stat['color'] }} me-3">
                        <i class="{{ $stat['icon'] }} fs-4"></i>
                    </div>
                    <div>
                        <p class="text-muted small fw-bold text-uppercase mb-0" style="letter-spacing: 0.5px;">{{ $stat['label'] }}</p>
                        <h4 class="fw-extrabold mb-0">{{ $stat['value'] }}</h4>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="card search-glass shadow-sm mb-5 p-2">
        <div class="card-body p-2">
            <form method="GET" action="{{ route('eggs.index') }}" class="row g-2 align-items-center">
                <div class="col-lg-9 col-md-8">
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-0"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" name="search" class="form-control border-0 shadow-none py-2"
                               placeholder="Find a batch by type, farm, or ID..." value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <button type="submit" class="btn btn-dark w-100 rounded-pill py-2 fw-bold">
                        <i class="bi bi-sliders me-2"></i> Update View
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="row g-4">
        @forelse($eggs as $egg)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card new-egg-card h-100">
                    <div class="status-indicator {{ $egg->stock_quantity <= 20 ? 'low-stock' : '' }}"></div>

                    <div class="card-header-gradient">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="egg-icon-modern"></div>
                            <div class="stock-badge-modern {{ $egg->stock_quantity <= 20 ? 'low-stock-badge' : '' }} fw-bold">
                                <i class="bi bi-box-seam me-1"></i>
                                {{ $egg->stock_quantity }} pcs
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-0 pt-4 px-4">
                        <h4 class="fw-extrabold text-white mb-3 lh-1" style="font-size: 1.4rem;">{{ $egg->egg_type }}</h4>

                        <div class="mb-4">
                            <p class="text-white-50 mb-2 d-flex align-items-center">
                                <i class="bi bi-geo-alt-fill text-warning me-2"></i>
                                <span class="fw-semibold">{{ $egg->farm_name }}</span>
                            </p>

                            <div class="price-badge">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted small fw-bold text-uppercase">Per Dozen</span>
                                    <span class="fw-extrabold fs-5 text-dark">₱{{ number_format($egg->price_per_dozen, 2) }}</span>
                                </div>
                            </div>
                        </div>

                        <p class="text-white-50 small lh-lg mb-0" style="line-height: 1.5;">
                            {{ Str::limit($egg->description ?: 'Premium selected farm-fresh batch. High-quality nutritional standards guaranteed.', 80) }}
                        </p>
                    </div>

                    <div class="card-footer-modern">
                        <div class="d-flex gap-2 mb-3">
                            <a href="{{ route('eggs.show', $egg) }}" class="btn btn-modern-primary flex-fill">
                                <i class="bi bi-eye me-1"></i>View
                            </a>
                            <a href="{{ route('eggs.edit', $egg) }}" class="btn btn-modern-secondary">
                                <i class="bi bi-pencil me-1"></i>Edit
                            </a>
                        </div>

                        <form method="POST" action="{{ route('eggs.destroy', $egg) }}" class="d-inline" onsubmit="return confirm('Remove this batch from inventory?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-link text-white-50 p-2 opacity-75 hover-opacity-100" title="Delete">
                                <i class="bi bi-trash3 fs-5"></i>
                            </button>
                        </form>

                        <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top border-white-10">
                            <div class="egg-id-badge">
                                #EGG-{{ str_pad($egg->id, 4, '0', STR_PAD_LEFT) }}
                            </div>
                            <div class="text-white-50 small fw-semibold">
                                <i class="bi bi-clock-history me-1"></i>
                                {{ $egg->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <div class="mb-4">
                    <i class="bi bi-search text-muted opacity-25" style="font-size: 5rem;"></i>
                </div>
                <h3 class="fw-bold text-dark">No records found</h3>
                <p class="text-muted">We couldn't find any egg batches matching your criteria.</p>
                <a href="{{ route('eggs.index') }}" class="btn btn-outline-dark rounded-pill px-4 mt-2">Clear all filters</a>
            </div>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-5">
        {{ $eggs->appends(request()->input())->links() }}
    </div>
</div>
@endsection