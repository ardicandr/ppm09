@extends('layouts.app')

@section('title', 'Kontak - Ndog Asin Ana Maning')

@section('content')
<h2 class="mb-5 text-center" data-aos="fade-down">Hubungi Kami</h2>

<!-- Baris utama: gambar dan informasi kontak sejajar -->
<div class="row align-items-center gy-5">
    <!-- Kolom kiri: Foto Tempat -->
    <div class="col-md-6 d-flex justify-content-center" data-aos="fade-right">
        <img src="{{ asset('images/contact-toko.jpg') }}" alt="Foto Kios Ndog Asin" 
             class="img-fluid rounded shadow" style="max-width: 350px; object-fit: cover;">
    </div>

    <!-- Kolom kanan: Informasi Kontak dan WhatsApp -->
    <div class="col-md-6" data-aos="fade-left">
        <h5 class="mb-3">Informasi Kontak</h5>
        <p><strong>Alamat:</strong> Jl. Martapura, Pesurungan Lor, Kec. Margadana, Kota Tegal, Jawa Tengah 5214</p>
        <p><strong>WhatsApp:</strong> 
            <a href="https://wa.me/6282229832730" target="_blank" class="text-success fw-bold text-decoration-none">
                +62 822 2983 2730 
                <img src="{{ asset('images/whatsapp-icon.png') }}" alt="WhatsApp" width="20" class="ms-1" />
            </a>
        </p>
        <p><strong>Jam Operasional:</strong> Senin - Minggu, 08.00 - 17.00 WIB</p>

        <!-- Tombol WhatsApp CTA -->
        <a href="https://wa.me/6282229832730" target="_blank" 
           class="btn btn-success btn-lg d-flex align-items-center justify-content-center mt-4" style="gap: 12px; min-width: 280px;">
            <img src="{{ asset('images/whatsapp-icon.png') }}" alt="WhatsApp" width="28" />
            Hubungi Owner via WhatsApp
        </a>
    </div>
</div>

<!-- Peta lokasi di tengah bawah -->
<div class="mt-5" data-aos="fade-up">
    <h5 class="mb-3 text-center">Lokasi Toko</h5>
    <div class="ratio ratio-16x9 mx-auto rounded shadow-sm" style="max-width: 800px;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.123456789!2d109.1093507!3d-6.8674002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb758c1bc12c1%3A0x42b9453377ca9225!2sNdog%20Asin%20Ana%20Maning!5e0!3m2!1sid!2sid!4v1234567890!5m2!1sid!2sid&layer=c" 
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

<!-- Media Sosial di bawah peta, juga di tengah -->
<div class="mt-4 d-flex justify-content-center gap-4" data-aos="fade-up">
    <a href="https://instagram.com/maknyustelurasin" target="_blank" aria-label="Instagram">
        <img src="{{ asset('images/instagram-icon.png') }}" alt="Instagram" width="40" class="shadow-sm rounded" />
    </a>
    <a href="https://wa.me/6282229832730" target="_blank" aria-label="WhatsApp">
        <img src="{{ asset('images/whatsapp-icon.png') }}" alt="WhatsApp" width="40" class="shadow-sm rounded" />
    </a>
</div>
@endsection
