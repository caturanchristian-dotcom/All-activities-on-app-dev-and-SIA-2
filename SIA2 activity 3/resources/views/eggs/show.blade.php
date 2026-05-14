@extends('layouts.app')

@section('hero')
<div class="hero-section py-5 mb-5" style="background: linear-gradient(135deg, #1a4d2e 0%, #34a853 100%); color: white; border-radius: 0 0 40px 40px; position: relative; overflow: hidden;">
    <div style="position: absolute; right: -50px; top: -50px; width: 250px; height: 250px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>

    <div class="container py-4 position-relative">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('eggs.index') }}" class="text-white opacity-75 text-decoration-none">Inventory</a></li>
                <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Product Details</li>
            </ol>
        </nav>

        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-3 fw-bold mb-2 tracking-tight">{{ $egg->egg_type }}</h1>
                <p class="lead mb-4 opacity-75 fs-4"><i class="bi bi-geo-alt-fill me-2"></i>{{ $egg->farm_name }}</p>

                <div class="d-flex flex-wrap gap-3">
                    <div class="glass-pill px-4 py-2 rounded-pill d-flex align-items-center">
                        <span class="fs-3 fw-bold">₱{{ number_format($egg->price_per_dozen, 2) }}</span>
                        <span class="ms-2 opacity-75">/ dozen</span>
                    </div>
                    <div class="glass-pill px-4 py-2 rounded-pill d-flex align-items-center">
                        <span class="fs-4 fw-bold">{{ $egg->stock_quantity }}</span>
                        <span class="ms-2 opacity-75 text-uppercase small tracking-wider">In Stock</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center d-none d-lg-block">
                <i class="bi bi-egg-fried" style="font-size: 10rem; color: rgba(255,255,255,0.2);"></i>
            </div>
        </div>
    </div>
</div>

<style>
    .glass-pill {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .info-card {
        border-radius: 24px;
        border: none;
        box-shadow: 0 10px 30px rgba(0,0,0,0.04);
    }
    .data-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: #adb5bd;
        font-weight: 700;
    }
    .sticky-sidebar {
        top: 2rem;
    }
    .action-btn {
        border-radius: 14px;
        padding: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .action-btn:hover {
        transform: translateY(-3px);
    }
</style>
@endsection

@section('content')
<div class="container mb-5">
    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card info-card p-4 p-md-5 mb-4">
                <h4 class="fw-bold mb-4 text-dark">Production Overview</h4>

                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <p class="data-label mb-1">Stock Status</p>
                            @if($egg->stock_quantity > 50)
                                <h5 class="text-success fw-bold"><i class="bi bi-check-circle-fill me-2"></i>High Inventory</h5>
                            @elseif($egg->stock_quantity > 10)
                                <h5 class="text-warning fw-bold"><i class="bi bi-exclamation-triangle-fill me-2"></i>Medium Stock</h5>
                            @else
                                <h5 class="text-danger fw-bold"><i class="bi bi-arrow-down-circle-fill me-2"></i>Critically Low</h5>
                            @endif
                        </div>

                        <div class="mb-4">
                            <p class="data-label mb-1">Market Registration</p>
                            <h5 class="text-dark">{{ $egg->created_at->format('F d, Y') }}</h5>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <p class="data-label mb-1">Batch ID</p>
                            <h5 class="text-dark font-monospace">#EGG-{{ str_pad($egg->id, 5, '0', STR_PAD_LEFT) }}</h5>
                        </div>

                        <div class="mb-4">
                            <p class="data-label mb-1">Last Inventory Audit</p>
                            <h5 class="text-dark">{{ $egg->updated_at->diffForHumans() }}</h5>
                        </div>
                    </div>
                </div>

                <hr class="my-4 opacity-50">

                <div class="mt-2">
                    <p class="data-label mb-3">Product Description</p>
                    <p class="fs-5 text-muted lh-base">
                        {{ $egg->description ?: 'This premium egg batch from ' . $egg->farm_name . ' meets all quality standards for fresh market distribution.' }}
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="sticky-top sticky-sidebar">
                <div class="card info-card p-4">
                    <h5 class="fw-bold mb-4">Management</h5>

                    <div class="d-grid gap-3">
                        <a href="{{ route('eggs.edit', $egg) }}" class="btn btn-dark action-btn">
                            <i class="bi bi-pencil-square me-2"></i> Edit Specifications
                        </a>

                        <a href="{{ route('eggs.index') }}" class="btn btn-outline-secondary action-btn">
                            <i class="bi bi-arrow-left me-2"></i> Back to Catalog
                        </a>

                        <div class="pt-3 mt-3 border-top">
                            <form method="POST" action="{{ route('eggs.destroy', $egg) }}" onsubmit="return confirm('Delete this record permanently?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger w-100 text-decoration-none small">
                                    <i class="bi bi-trash3 me-1"></i> Remove from Inventory
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card info-card mt-4 p-4 bg-light border-0">
                    <div class="d-flex align-items-center text-muted">
                        <i class="bi bi-shield-check fs-2 me-3"></i>
                        <div class="small">
                            This record is verified and active in your digital inventory.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection