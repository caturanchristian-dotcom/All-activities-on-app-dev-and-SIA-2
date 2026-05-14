@extends('layouts.app')

@section('hero')
<div class="hero-section text-center py-5 mb-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-bottom: 1px solid #dee2e6;">
    <div class="container">
        <div class="badge bg-soft-primary text-primary mb-2 px-3 py-2 rounded-pill fw-bold">INVENTORY MANAGEMENT</div>
        <h1 class="display-4 fw-bold mb-2 text-dark">🥚 Add Premium Egg</h1>
        <p class="lead text-muted mx-auto" style="max-width: 600px;">Register your farm-fresh harvest into the digital catalog with precision and style.</p>
    </div>
</div>
@endsection

@section('content')
<style>
    /* Custom Smoothness Enhancements */
    .form-card {
        border-radius: 20px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .form-control {
        border-radius: 12px;
        padding: 12px 16px;
        border: 1px solid #e0e0e0;
        transition: all 0.2s ease-in-out;
    }
    .form-control:focus {
        box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.1);
        border-color: #0d6efd;
    }
    .input-group-text {
        border-radius: 12px 0 0 12px;
        background-color: #f8f9fa;
        border-right: none;
    }
    .input-group .form-control {
        border-radius: 0 12px 12px 0;
    }
    .btn-lg {
        border-radius: 12px;
        padding: 14px;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(13, 110, 253, 0.3);
    }
    .bg-gradient-custom {
        background: linear-gradient(45deg, #212529, #495057);
    }
    .bg-soft-primary {
        background-color: rgba(13, 110, 253, 0.1);
    }
</style>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card form-card shadow-sm border-0">
                <div class="card-header bg-gradient-custom text-white text-center py-5">
                    <div class="icon-box mb-3">
                        <i class="bi bi-egg-fill" style="font-size: 3rem; color: #ffca2c;"></i>
                    </div>
                    <h3 class="mb-1 fw-bold">New Egg Registration</h3>
                    <p class="small opacity-75 mb-0">Fields marked with (*) are required</p>
                </div>

                <div class="card-body p-4 p-md-5">
                    <form method="POST" action="{{ route('eggs.store') }}">
                        @csrf

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small text-uppercase tracking-wider">Egg Type *</label>
                                <div class="input-group">
                                    <input type="text" name="egg_type" class="form-control @error('egg_type') is-invalid @enderror"
                                           value="{{ old('egg_type') }}" placeholder="e.g. Organic Brown" required>
                                </div>
                                @error('egg_type') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small text-uppercase tracking-wider">Farm Source *</label>
                                <input type="text" name="farm_name" class="form-control @error('farm_name') is-invalid @enderror"
                                       value="{{ old('farm_name') }}" placeholder="Sunny Valley" required>
                                @error('farm_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small text-uppercase tracking-wider">Price / Dozen *</label>
                                <div class="input-group">
                                    <span class="input-group-text text-muted font-monospace">₱</span>
                                    <input type="number" step="0.01" name="price_per_dozen"
                                           class="form-control @error('price_per_dozen') is-invalid @enderror"
                                           value="{{ old('price_per_dozen') }}" placeholder="0.00" required>
                                </div>
                                @error('price_per_dozen') <div class="invalid-feedback small">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small text-uppercase tracking-wider">Inventory Count *</label>
                                <div class="input-group">
                                    <span class="input-group-text text-muted"><i class="bi bi-box-seam"></i></span>
                                    <input type="number" name="stock_quantity"
                                           class="form-control @error('stock_quantity') is-invalid @enderror"
                                           value="{{ old('stock_quantity') }}" placeholder="Quantity" required>
                                </div>
                                @error('stock_quantity') <div class="invalid-feedback small">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-12 mt-4">
                                <label class="form-label fw-bold text-dark small text-uppercase tracking-wider">Product Notes</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                          rows="3" placeholder="Describe quality, size, or special diet..."></textarea>
                                @error('description') <div class="invalid-feedback small">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">
                                <i class="bi bi-plus-lg me-2"></i> Confirm and Save
                            </button>
                            <a href="{{ route('eggs.index') }}" class="btn btn-link w-100 text-muted text-decoration-none small">
                                <i class="bi bi-chevron-left me-1"></i> Return to Inventory
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <p class="text-center text-muted mt-4 small">
                Handcrafted Inventory System &bull; {{ date('Y') }}
            </p>
        </div>
    </div>
</div>
@endsection