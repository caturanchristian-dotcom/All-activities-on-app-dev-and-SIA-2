<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Clash of Clans Elite Troops HQ')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-gold: #F4C430;
            --dark-bg: #1a1a2e;
            --card-bg: #16213e;
            --accent-red: #e74c3c;
        }
        body {
            background: linear-gradient(135deg, var(--dark-bg) 0%, #0f3460 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }
        .navbar-brand {
            font-family: 'Orbitron', monospace;
            font-weight: 900;
            letter-spacing: 2px;
        }
        .troop-card {
            background: var(--card-bg);
            border: 2px solid transparent;
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
        }
        .troop-card:hover {
            border-color: var(--primary-gold);
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(244, 196, 48, 0.3);
        }
        .troop-image {
            height: 200px;
            object-fit: contain;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        }
        .rarity-epic { border-left-color: var(--accent-red) !important; }
        .rarity-rare { border-left-color: var(--primary-gold) !important; }
        .btn-clash {
            background: linear-gradient(45deg, var(--primary-gold), #f39c12);
            border: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-clash:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(244, 196, 48, 0.4);
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fs-2" href="/items">
                <i class="fas fa-shield-alt me-2"></i>
                Clash of Clans Troops HQ
            </a>
        </div>
    </nav>

    <main class="container py-5">
        @yield('content')
    </main>

    <footer class="bg-dark text-light py-4 mt-auto">
        <div class="container text-center">
            <p class="mb-0"><i class="fas fa-crown me-1"></i> Clash of Clans Elite Troops Database | Professional Laravel System</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth hover animations
        document.querySelectorAll('.troop-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>
</body>
</html>