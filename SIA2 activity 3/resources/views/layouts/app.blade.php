<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGG MARKET INVENTORY</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-gold: #FFCA2C;
            --dark-forest: #1A4D2E;
            --soft-cream: #FAF9F6;
            --accent-green: #4F6F52;
        }

        /* Modern Typography & Background */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #fcfcfc;
            color: #2D3436;
            overflow-x: hidden;
        }

        /* Smooth Navbar */
        .navbar {
            backdrop-filter: blur(15px);
            background: rgba(26, 77, 46, 0.95) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 800;
            letter-spacing: -0.5px;
            background: linear-gradient(to right, var(--primary-gold), #FFF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-link {
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.3s ease;
        }

        /* Refined Card Defaults */
        .card {
            border-radius: 24px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        /* Alert Styling */
        .alert-custom {
            border-radius: 16px;
            border: none;
            background: #ffffff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border-left: 5px solid #198754;
        }

        /* Page Transitions */
        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Fix for fixed navbar overlapping content */
        .main-wrapper {
            margin-top: 76px; /* Adjust based on navbar height */
        }

        footer {
            background: #111111;
            border-top: 1px solid #fffdfd;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('eggs.index') }}">
                <span class="fs-3 me-2">🥚</span>
                <span>EGG MARKET <span class="fw-light">INVENTORY</span></span>
            </a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('eggs.index') ? 'active text-warning' : '' }}" href="{{ route('eggs.index') }}">
                            Inventory
                        </a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a class="btn btn-warning rounded-pill px-4 fw-bold shadow-sm" href="{{ route('eggs.create') }}">
                            <i class="bi bi-plus-lg me-1"></i> Add Batch
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="main-wrapper fade-in">
        @yield('hero')

        <div class="container pb-5">
            @if(session('success'))
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-8">
                        <div class="alert alert-custom alert-dismissible fade show p-4" role="alert">
                            <div class="d-flex align-items-center">
                                <div class="bg-success bg-opacity-10 p-2 rounded-circle me-3">
                                    <i class="bi bi-check2-circle text-success fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold">Success!</h6>
                                    <span class="text-muted small">{{ session('success') }}</span>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <footer class="text-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <h5 class="fw-bold mb-1">Egg Market Inventory</h5>
                    <p class="small mb-0">The gold standard in poultry inventory management.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="d-flex justify-content-center justify-content-md-end gap-3 mb-3">
                        <a href="#" class="fs-5"><i class="bi bi-github"></i></a>
                        <a href="#" class="fs-5"><i class="bi bi-twitter-x"></i></a>
                    </div>
                    <p class=" extra-small mb-0">&copy; {{ date('Y') }} All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>