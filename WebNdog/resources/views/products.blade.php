@extends('layouts.app')

@section('title', 'Produk - Ndog Asin Ana Maning')

@section('content')
<h2 class="mb-4 text-center" data-aos="fade-down">Produk Unggulan Kami</h2>

<div class="row g-4">
    @php
        $products = [
            [
                'name' => 'Ndog Asin Mentahan',
                'desc' => 'Telur asin mentah siap olah, cocok untuk pelaku usaha kuliner.',
                'image' => 'images/ndog-mentahan.jpg',
            ],
            [
                'name' => 'Ndog Asin Brungus',
                'desc' => 'Telur asin matang dengan rasa klasik yang gurih dan legit.',
                'image' => 'images/ndog-brungus.jpg',
            ],
            [
                'name' => 'Ndog Asin Garang',
                'desc' => 'Varian super asin dan kuat, cocok untuk penikmat rasa intens.',
                'image' => 'images/ndog-garang.jpg',
            ],
            [
                'name' => 'Ndog Asin Godog',
                'desc' => 'Telur asin rebus siap santap, pas untuk bekal dan oleh-oleh.',
                'image' => 'images/ndog-godog.jpg',
            ],
            [
                'name' => 'Ndog Asin Garang Wedi',
                'desc' => 'Telur asin garang yang diasap ringan, aroma khas dan tahan lama.',
                'image' => 'images/ndog-garang-wedi.jpg',
            ],
        ];
    @endphp

    @foreach($products as $product)
    <div class="col-md-4" data-aos="zoom-in">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset($product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $product['name'] }}</h5>
                <p class="card-text">{{ $product['desc'] }}</p>
                @php
                    $message = "*Pesanan Produk: {$product['name']}*\n\n*Deskripsi:*\n{$product['desc']}\n\nSaya tertarik, mohon info lebih lanjut. Terima kasih.";
                @endphp
                <a href="https://wa.me/6287725527550?text={{ rawurlencode($message) }}" target="_blank" class="btn btn-primary">
                    Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection