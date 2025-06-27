@extends('layouts.app')

@section('title', 'Beranda - Ndog Asin Ana Maning')

@section('content')

{{-- Hero Section --}}
<div class="hero d-flex flex-column flex-md-row align-items-center justify-content-center text-white" 
     data-aos="fade-up" 
     style="min-height: 60vh; 
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/banner-telur.png') }}'); 
            background-size: cover; 
            background-position: center;">
    <div class="text-center text-md-start flex-fill px-3 px-md-5">
        <h2 class="display-4 fw-bold">Ndog Asin Asli Tegal</h2>
        <p class="lead mb-4">Kualitas Premium, Rasa Legendaris, Langsung dari Pengrajin Asli Pesurungan</p>
        <a href="/products" class="btn btn-light btn-lg shadow-sm">Lihat Produk Kami</a>
    </div>
    <div class="flex-fill text-center px-3 px-md-5">
        <img src="{{ asset('images/banner-telur.png') }}" 
             alt="Ndog Asin Ana Maning" 
             class="img-fluid rounded shadow-lg" 
             style="max-width: 350px;">
    </div>
</div>

{{-- Tentang Singkat --}}
<section class="my-5" data-aos="fade-right">
    <h3 class="text-center mb-3">Tentang Kami</h3>
    <p class="text-center mx-auto" style="max-width: 750px;">
        Berdiri sejak 2001, <strong>Ndog Asin Ana Maning</strong> adalah usaha keluarga yang mengolah telur asin dari hasil ternak sendiri.
        Kami menjaga kualitas secara ketat, dan menghadirkan cita rasa khas: <em>nglenga, masir, gurih, ora pait, ora amis</em>.
        Nama "Ana Maning" berasal dari bahasa Tegal yang berarti "Ada Lagi", mencerminkan harapan agar pelanggan kembali lagi karena puas.
    </p>
</section>

{{-- Produk Unggulan --}}
<section class="my-5" data-aos="zoom-in">
    <h3 class="text-center mb-4">Produk Unggulan</h3>
    <div class="row g-4">
        @php
            $products = [
                ['name' => 'Ndog Asin Mentahan', 'desc' => 'Telur asin mentah siap olah.', 'image' => 'images/ndog-mentahan.jpg'],
                ['name' => 'Ndog Asin Brungus', 'desc' => 'Rasa klasik gurih dan legit.', 'image' => 'images/ndog-brungus.jpg'],
                ['name' => 'Ndog Asin Garang', 'desc' => 'Varian ekstra asin.', 'image' => 'images/ndog-garang.jpg'],
                ['name' => 'Ndog Asin Godog', 'desc' => 'Telur asin rebus siap santap.', 'image' => 'images/ndog-godog.jpg'],
                ['name' => 'Ndog Asin Garang Wedi', 'desc' => 'Garang diasap ringan.', 'image' => 'images/ndog-garang-wedi.jpg'],
            ];
        @endphp

        @foreach($products as $product)
        <div class="col-md-4" data-aos="zoom-in">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset($product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text">{{ $product['desc'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- Counter --}}
<section class="bg-light py-5 text-center" data-aos="fade-up">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <h1 class="fw-bold"><span class="counter" data-target="24000">0</span>+</h1>
                <p>Telur Terjual per Bulan</p>
            </div>
            <div class="col-md-4">
                <h1 class="fw-bold"><span class="counter" data-target="2001">0</span></h1>
                <p>Sejak Tahun</p>
            </div>
            <div class="col-md-4">
                <h1 class="fw-bold"><span class="counter" data-target="1000">0</span>+</h1>
                <p>Pelanggan Puas</p>
            </div>
        </div>
    </div>
</section>

{{-- Distribusi --}}
<section class="my-5" data-aos="fade-up">
    <h3 class="text-center mb-3">Distribusi Kami</h3>
    <p class="text-center mx-auto" style="max-width: 750px;">
        Ndog Asin Ana Maning telah menyuplai telur ke berbagai daerah seperti Jakarta, Brebes, Makassar, dan Kalimantan.
        Kami juga ikut dalam pameran-pameran nasional, dan menjaga kualitas distribusi dengan pengemasan rapi dan sistem pembayaran fleksibel.
    </p>
</section>

{{-- Testimoni Carousel --}}
<section class="my-5" data-aos="fade-up">
    <h3 class="text-center mb-4">Testimoni Pelanggan</h3>
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <blockquote class="blockquote">
                    <p>"Nggak amis dan gurih banget! Cocok dimakan bareng nasi anget."</p>
                    <footer class="blockquote-footer">Bu Yati, Brebes</footer>
                </blockquote>
            </div>
            <div class="carousel-item">
                <blockquote class="blockquote">
                    <p>"Sudah langganan lama, kualitasnya konsisten. Mantap!"</p>
                    <footer class="blockquote-footer">Pak Anton, Jakarta</footer>
                </blockquote>
            </div>
            <div class="carousel-item">
                <blockquote class="blockquote">
                    <p>"Pernah coba dari toko lain, tapi tetep baliknya ke Ana Maning. Rasa beda!"</p>
                    <footer class="blockquote-footer">Dewi, Surabaya</footer>
                </blockquote>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

{{-- CTA --}}
<section class="text-center my-5" data-aos="zoom-in">
    <a href="/contact" class="btn btn-primary btn-lg shadow">Hubungi Kami untuk Pemesanan</a>
</section>

{{-- Counter Script --}}
<script>
    document.querySelectorAll('.counter').forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const speed = 200;
            const increment = Math.ceil(target / speed);

            if (count < target) {
                counter.innerText = count + increment;
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });
</script>

@endsection
