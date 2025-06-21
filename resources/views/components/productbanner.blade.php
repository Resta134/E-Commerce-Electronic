@php
$categories = ['APPLE', 'SAMSUNG', 'VIVO', 'XIAOMI', 'REALME'];

// Data dummy per kategori (bisa dikembangkan sendiri)
$dummyProducts = [
['name' => 'iPhone 13', 'price' => 13999000, 'image' => 'https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16pro__erw9alves2qa_xlarge_2x.png', 'category' => 'APPLE'],
['name' => 'Samsung S25 Ultra', 'price' => 24999000, 'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2501/gallery/id-galaxy-s25-s938-sm-s938bzbcxid-thumb-544701608?$310_N_PNG$', 'category' => 'SAMSUNG'],
['name' => 'Vivo X80 Pro', 'price' => 12999000, 'image' => 'https://th.bing.com/th/id/OIP.W7bzJOKwv7eDZiDOWJdDwgHaHa?rs=1&pid=ImgDetMain', 'category' => 'VIVO'],
['name' => 'Xiaomi 15 Ultra', 'price' => 11999000, 'image' => 'https://th.bing.com/th/id/OIP.-IT2_zdKIZ3hHh0853WVvAHaHa?pid=ImgDet&w=185&h=185&c=7&dpr=1,3', 'category' => 'XIAOMI'],
['name' => 'Realme GT7 Pro', 'price' => 10999000, 'image' => 'https://image01.realme.net/general/20250522/17478892761986a7207924f9449b59872dd5a19aed71c.png.webp?width=1080&height=1080&size=866353', 'category' => 'REALME'],
];
@endphp

<div class="container py-5 mb-5">
    <!-- <h3 class="text-center text-black mb-4">Promo Terbaru dari Semua Brand</h3> -->

    <!-- HANYA 1x tampil -->
    <div id="promo-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            @php $first = true; @endphp
            @foreach ($dummyProducts as $product)
            <div class="carousel-item {{ $first ? 'active' : '' }}">
                @php $first = false; @endphp

                <!-- Card: lebar ditambah jadi 20rem, tinggi disesuaikan -->
                <div class="card bg-dark text-white text-center mx-auto" style="width: 20rem; height: 30rem;">

                    <!-- Gambar tetap proporsional -->
                    <img src="{{ $product['image'] }}" class="card-img-top"
                        style="height: 600px; width: 100%; object-fit: cover;" alt="{{ $product['name'] }}">

                    <div class="card-body">
                        <h6 class="card-title">{{ $product['name'] }}</h6>
                        <p class="mb-1">
                            <small class="badge bg-primary">{{ $product['category'] }}</small>
                        </p>
                        <p class="card-text">Rp{{ number_format($product['price'], 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Tombol navigasi -->
        <!-- Tombol PREV -->
        <button class="carousel-control-prev position-absolute top-50 translate-middle-y bg-secondary bg-opacity-50 rounded-circle border-0"
            style="width: 40px; height: 40px; left: 10px;"
            type="button"
            data-bs-target="#promo-carousel"
            data-bs-slide="prev"
            aria-label="Previous">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <!-- Tombol NEXT -->
        <button class="carousel-control-next position-absolute top-50 translate-middle-y bg-secondary bg-opacity-50 rounded-circle border-0"
            style="width: 40px; height: 40px; right: 10px;"
            type="button"
            data-bs-target="#promo-carousel"
            data-bs-slide="next"
            aria-label="Next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>
</div>