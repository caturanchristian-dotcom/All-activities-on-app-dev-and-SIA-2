@extends('layouts.app')

@section('hero')
<div class="hero-section py-5 mb-5" style="background: linear-gradient(135deg, #fff9e6 0%, #fff3cd 100%); border-bottom: 1px solid #ffeeba;">
    <div class="container text-center">
        <div class="badge bg-warning text-dark mb-2 px-3 py-2 rounded-pill fw-bold">EDITOR MODE</div>
        <h1 class="display-5 fw-bold mb-2 text-dark">🥚 Edit: {{ $egg->egg_type }}</h1>
        <p class="lead text-muted">Refining inventory data for <span class="fw-bold text-dark">{{ $egg->farm_name }}</span></p>
    </div>
</div>
@endsection

@section('content')
<style>
    .edit-card {
        border-radius: 24px;
        border: none;
        box-shadow: 0 15px 35px rgba(0,0,0,0.08) !important;
    }
    .form-label {
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #6c757d;
        margin-bottom: 0.5rem;
    }
    .form-control-modern {
        border-radius: 12px;
        padding: 12px 18px;
        border: 1px solid #e9ecef;
        background-color: #f8f9fa;
        transition: all 0.2s ease;
    }
    .form-control-modern:focus {
        background-color: #fff;
        border-color: #ffca2c;
        box-shadow: 0 0 0 4px rgba(255, 202, 44, 0.15);
    }
    .input-group-modern-text {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-right: none;
        border-radius: 12px 0 0 12px;
        color: #6c757d;
    }
    .input-group-modern-text + .form-control-modern {
        border-radius: 0 12px 12px 0;
    }
    .btn-update {
        background: #212529;
        color: white;
        border-radius: 12px;
        padding: 14px;
        font-weight: 600;
        border: none;
        transition: all 0.3s ease;
    }
    .btn-update:hover {
        background: #000;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        color: #ffca2c;
    }
    .floating-icon {
        background: white;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: -40px auto 20px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        color: #ffca2c;
        border: 4px solid #fff;
    }
</style>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <div class="card edit-card shadow-lg">
                <div class="card-body p-4 p-md-5">
                    <div class="floating-icon">
                        <i class="bi bi-pencil-fill fs-2"></i>
                    </div>

                    <h3 class="text-center fw-bold mb-4">Record Modification</h3>

                    <form method="POST" action="{{ route('eggs.update', $egg) }}">
                        @csrf @method('PUT')

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Egg Classification *</label>
                                <input type="text" name="egg_type" class="form-control-modern w-100 @error('egg_type') is-invalid @enderror"
                                       value="{{ old('egg_type', $egg->egg_type) }}" required>
                                @error('egg_type') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Source Farm *</label>
                                <input type="text" name="farm_name" class="form-control-modern w-100 @error('farm_name') is-invalid @enderror"
                                       value="{{ old('farm_name', $egg->farm_name) }}" required>
                                @error('farm_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Price (USD) *</label>
                                <div class="input-group">
                                    <span class="input-group-text input-group-modern-text">$</span>
                                    <input type="number" step="0.01" name="price_per_dozen"
                                           class="form-control-modern @error('price_per_dozen') is-invalid @enderror"
                                           value="{{ old('price_per_dozen', $egg->price_per_dozen) }}" required>
                                </div>
                                @error('price_per_dozen') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Current Stock *</label>
                                <div class="input-group">
                                    <span class="input-group-text input-group-modern-text"><i class="bi bi-box-seam"></i></span>
                                    <input type="number" name="stock_quantity"
                                           class="form-control-modern @error('stock_quantity') is-invalid @enderror"
                                           value="{{ old('stock_quantity', $egg->stock_quantity) }}" required>
                                </div>
                                @error('stock_quantity') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-12 mt-4">
                                <label class="form-label fw-bold">Quality Notes & Description</label>
                                <textarea name="description" class="form-control-modern w-100 @error('description') is-invalid @enderror"
                                          rows="4" placeholder="Update details about this batch...">{{ old('description', $egg->description) }}</textarea>
                                @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="btn btn-update w-100 mb-3 fs-5">
                                <i class="bi bi-arrow-repeat me-2"></i> Save Changes
                            </button>

                            <div class="d-flex gap-2">
                                <a href="{{ route('eggs.show', $egg) }}" class="btn btn-outline-dark flex-grow-1 rounded-pill py-2">
                                    Cancel
                                </a>
                                <a href="{{ route('eggs.index') }}" class="btn btn-link text-muted flex-grow-1 text-decoration-none py-2">
                                    Back to Inventory
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection