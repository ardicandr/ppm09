<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Ndog Asin Asli Tegal')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <style>
        /* Font dan warna dasar */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #222222;
            background-color: #ffffff;
            line-height: 1.6;
        }

        /* Header */
        header {
            background: linear-gradient(90deg, #70c1b3, #247ba0);
            color: white;
            padding: 2rem 1rem;
            text-align: center;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 0.3rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        header p {
            font-size: 1.2rem;
            font-weight: 500;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.25);
        }

        /* Navbar */
        .navbar-light {
            background-color: #e0f2f1; /* soft toska muda */
            box-shadow: 0 2px 5px rgba(36, 123, 160, 0.15);
        }

        .navbar-light .nav-link {
            color: #247ba0;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .navbar-light .nav-link:hover,
        .navbar-light .nav-link.active {
            color: #f4d35e; /* kuning telur */
        }

        /* Logo di navbar */
        .navbar-brand strong {
            color: #247ba0;
            font-weight: 700;
            font-size: 1.3rem;
            text-shadow: 1px 1px 2px rgba(244, 211, 94, 0.7);
        }

        /* Hero Section */
        .hero {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1602016753113-d8450e7f8e4a');
            background-size: cover;
            background-position: center;
            padding: 5rem 1rem;
            color: white;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
            min-height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* Overlay gelap untuk hero */
        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.45);
            z-index: 0;
        }

        .hero > * {
            position: relative;
            z-index: 1;
        }

        /* Footer */
        footer {
            background-color: #247ba0;
            color: white;
            padding: 1rem;
            text-align: center;
            font-size: 0.9rem;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }

        /* Tombol CTA di hero */
        .btn-hero {
            background-color: #f4d35e;
            color: #247ba0;
            font-weight: 700;
            border-radius: 30px;
            padding: 0.75rem 2.5rem;
            box-shadow: 0 4px 10px rgba(244, 211, 94, 0.5);
            transition: background-color 0.3s ease, color 0.3s ease;
            border: none;
        }

        .btn-hero:hover {
            background-color: #e6c94a;
            color: #1b5e72;
        }

        /* Card Produk */
        .card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 8px rgba(36, 123, 160, 0.1);
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(36, 123, 160, 0.3);
        }

        /* Blockquote Testimoni */
        blockquote {
            border-left: 5px solid #f4d35e;
            padding-left: 1rem;
            font-style: italic;
            color: #555555;
            background-color: #f9f9f9;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }

        /* Responsive adjustments */
        @media (max-width: 767px) {
            .hero {
                padding: 3rem 1rem;
                min-height: 50vh;
            }

            header h1 {
                font-size: 2rem;
            }

            header p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Ndog Asin "Ana Maning"</h1>
        <p>Ndog Asin Asli Tegal - Ora Gagal, Nikmat, Mesti Enak</p>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <!-- Logo di kiri -->
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/logo-telur.png') }}" alt="Logo Toko" width="40" height="40" class="me-2" />
                <strong>Ndog Asin Ana Maning</strong>
            </a>

            <!-- Toggle (untuk tampilan mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="/products">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Ndog Asin Ana Maning. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // durasi animasi 1 detik
            once: true      // hanya sekali saat scroll
        });
    </script>
</body>
</html>