@extends('layouts.app')

@section('title', 'Tentang Kami - Ndog Asin Ana Maning')

@section('content')
<div class="container">
    <h2 class="mb-5 text-center" data-aos="fade-down" data-aos-delay="0">Tentang <span class="text-primary">Ndog Asin Ana Maning</span></h2>

    {{-- Timeline Sejarah --}}
    <section class="mb-5">
        <h4 class="mb-4" data-aos="fade-right">Sejarah Perjalanan Kami</h4>
        <div class="timeline">
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                <h5>1989</h5>
                <p>Bapak Sutari mulai beternak itik.</p>
            </div>
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                <h5>2001</h5>
                <p>Usaha Ndog Asin Ana Maning resmi berdiri sebagai home industry.</p>
            </div>
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                <h5>2012–2013</h5>
                <p>Puncak produksi mencapai 12.000 butir per hari.</p>
            </div>
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                <h5>Sekarang</h5>
                <p>Fokus pada kualitas premium dan edukasi pengolahan telur asin.</p>
            </div>
        </div>
    </section>

    {{-- Makna Nama --}}
    <section class="mb-5">
        <h4 class="mb-4" data-aos="fade-right">Makna di Balik Nama <em>Ana Maning</em></h4>
        <div class="row g-4 align-items-center">
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                <p>
                    Nama <strong>"Ana Maning"</strong> diambil dari bahasa khas Tegal yang berarti <em>"ada lagi"</em>. Filosofi ini menggambarkan harapan agar pelanggan yang pernah mencicipi produk kami akan kembali dan berkata, <strong>"Ndog asine ana maning, Pak!"</strong>
                </p>
                <p>
                    Lebih dari sekadar nama, <strong>Ana Maning</strong> juga menyimpan makna spiritual: huruf <strong>A</strong> melambangkan <em>Allah</em>, dan <strong>M</strong> untuk <em>Muhammad</em>. Sebuah pengingat bahwa usaha ini berjalan atas izin, rezeki, dan berkah dari Yang Maha Kuasa.
                </p>
                <p>
                    Kami percaya bahwa dengan menjaga niat, kualitas, dan kejujuran, keberkahan akan terus <em>“ana maning”</em> — ada lagi dan lagi.
                </p>
            </div>
            <div class="col-md-6 text-center" data-aos="fade-left" data-aos-delay="200">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo Ana Maning" class="img-fluid rounded shadow-sm" style="max-height: 280px;">
                <p class="text-muted mt-2"><small>Logo atau simbol brand Ana Maning (jika ada)</small></p>
            </div>
        </div>
    </section>


    {{-- Visi & Misi dengan Card --}}
    <section class="mb-5">
        <h4 class="mb-4" data-aos="fade-right">Visi & Misi</h4>
        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Visi</h5>
                        <p class="card-text">Menjadikan <strong>"Ndog"</strong> sebagai identitas khas Tegal yang dikenal luas sebagai pusat pengolahan telur asin berkualitas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-success">Misi</h5>
                        <ul class="mb-0">
                            <li>Menjaga dan meningkatkan mutu produk.</li>
                            <li>Menyebarkan kearifan lokal pengolahan telur asin.</li>
                            <li>Menjadikan Pesurungan pusat edukasi telur asin.</li>
                            <li>Memberdayakan peternak dan UMKM lokal.</li>
                            <li>Ekspansi pasar ke luar Jawa.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Proses Produksi --}}
    <section class="mb-5">
        <h4 class="mb-4" data-aos="fade-right">Proses Produksi</h4>
        <div class="row g-4 align-items-center">
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                <p>Telur kami diproses secara alami dengan teknik <em>teraawang</em> untuk memastikan kualitas terbaik. Cita rasa khas <strong>nglenga, masir, gurih, ora pait, ora amis</strong> menjadi ciri utama produk kami.</p>
                <p><strong>Slogan:</strong> <em>“Ora Gagal, Nikmat, Mesti Enak”</em></p>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                <img src="{{ asset('images/produksi-telur.jpg') }}" alt="Proses Produksi" class="img-fluid rounded shadow-sm">
            </div>
        </div>
    </section>

    {{-- Galeri --}}
    <section class="mb-5">
        <h4 class="mb-4" data-aos="fade-right">Galeri Kami</h4>
        <div class="row g-4">
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="card border-0 shadow-sm">
                    <img src="{{ asset('images/owner.jpg') }}" class="card-img-top" alt="Owner">
                    <div class="card-body text-center">
                        <p class="card-text">Bapak Sutari, Pemilik Usaha</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card border-0 shadow-sm">
                    <img src="{{ asset('images/kios.jpg') }}" class="card-img-top" alt="Kios">
                    <div class="card-body text-center">
                        <p class="card-text">Kios Ndog Asin Ana Maning</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="card border-0 shadow-sm">
                    <img src="{{ asset('images/distribusi.jpg') }}" class="card-img-top" alt="Distribusi">
                    <div class="card-body text-center">
                        <p class="card-text">Distribusi ke Berbagai Daerah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- Custom CSS (opsional, taruh di file style.css atau layout master) --}}
<style>
.timeline {
    border-left: 3px solid #0d6efd;
    padding-left: 20px;
    position: relative;
}
.timeline-item {
    margin-bottom: 1.5rem;
}
.timeline-item h5 {
    font-weight: bold;
    color: #0d6efd;
}
</style>
@endsection
