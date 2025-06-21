
@php
$categories = ['APPLE', 'SAMSUNG', 'VIVO', 'XIAOMI', 'REALME'];

// Data dummy per kategori
$dummyProducts = [
['name' => 'iPhone 13', 'price' => 13999000, 'image' => 'https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16pro__erw9alves2qa_xlarge_2x.png', 'category' => 'APPLE'],
['name' => 'Samsung S25 Ultra', 'price' => 24999000, 'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2501/gallery/id-galaxy-s25-s938-sm-s938bzbcxid-thumb-544701608?$310_N_PNG$', 'category' => 'SAMSUNG'],
['name' => 'Vivo X80 Pro', 'price' => 12999000, 'image' => 'https://www.vivo.com/id/products/x80pro/images/x80pro-hero.png', 'category' => 'VIVO'],
['name' => 'Xiaomi 12 Pro', 'price' => 11999000, 'image' => 'https://www.mi.com/global/static/img/phone/12pro/12pro-hero.png', 'category' => 'XIAOMI'],
['name' => 'Realme GT2 Pro', 'price' => 10999000, 'image' => 'https://www.realme.com/id/products/gt2-pro/images/gt2-pro-hero.png', 'category' => 'REALME'],
['name' => 'iPhone 14 Pro', 'price' => 17999000, 'image' => 'https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16pro__erw9alves2qa_xlarge_2x.png', 'category' => 'APPLE'],
['name' => 'Samsung Galaxy Z Fold4', 'price' => 29999000 , 'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2501/gallery/id-galaxy-zfold4-f936-sm-f936bzbcxid-thumb-544701608?$310_N_PNG$', 'category' => 'SAMSUNG'],
['name' => 'Vivo V23 Pro', 'price' => 15999000, 'image' => 'https://www.vivo.com/id/products/v23pro/images/v23pro-hero.png', 'category' => 'VIVO'],
['name' => 'Xiaomi Redmi Note 11 Pro', 'price' => 2499000, 'image' => 'https://www.mi.com/global/static/img/phone/redmi-note-11-pro/redmi-note-11-pro-hero.png', 'category' => 'XIAOMI'],
['name' => 'Realme 9 Pro+', 'price' => 3999000 , 'image' => 'https://www.realme.com/id/products/9proplus/images/9proplus-hero.png', 'category' => 'REALME'],
['name' => 'iPhone SE 2022', 'price' => 8999000, 'image' => 'https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_se__erw9alves2qa_xlarge_2x.png', 'category' => 'APPLE'],
['name' => 'Samsung Galaxy A53', 'price' => 4999000, 'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2501/gallery/id-galaxy-a53-5g-sm-a536bzbcxid-thumb-544701608?$310_N_PNG$', 'category' => 'SAMSUNG'],
['name' => 'Vivo Y33s', 'price' => 2999000, 'image' => 'https://www.vivo.com/id/products/y33s/images/y33s-hero.png', 'category' => 'VIVO'],
['name' => 'Xiaomi Poco X4 Pro', 'price' => 3999000, 'image' => 'https://www.mi.com/global/static/img/phone/poco-x4-pro/poco-x4-pro-hero.png', 'category' => 'XIAOMI'],
['name' => 'Realme C25Y', 'price' => 1999000, 'image' => 'https://www.realme.com/id/products/c25y/images/c25y-hero.png', 'category' => 'REALME'],
['name' => 'iPhone 15', 'price' => 15999000, 'image' => 'https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16pro__erw9alves2qa_xlarge_2x.png', 'category' => 'APPLE'],
['name' => 'Samsung Galaxy S22', 'price' => 17999000, 'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2501/gallery/id-galaxy-s22-sm-s901bzbcxid-thumb-544701608?$310_N_PNG$', 'category' => 'SAMSUNG'],
['name' => 'Vivo V21e', 'price' => 3999000, 'image' => 'https://www.vivo.com/id/products/v21e/images/v21e-hero.png', 'category' => 'VIVO'],
['name' => 'Xiaomi Mi 11', 'price' => 8999000, 'image' => 'https://www.mi.com/global/static/img/phone/mi-11/mi-11-hero.png', 'category' => 'XIAOMI'],
['name' => 'Realme Narzo 50A', 'price' => 1999000, 'image' => 'https://www.realme.com/id/products/narzo50a/images/narzo50a-hero.png', 'category' => 'REALME'],
];
@endphp

<x-layout>
    <x-slot:title>
        {{ __('allProduct') }}
    </x-slot:title>
    <x-css/>

    <div class="container py-2 mb-3" data-aos="fade-up">
        <h3 class="text-black mb-4">Semua Produk Smartphone</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach ($dummyProducts as $product)
            <div class="col">
                 <div class="card text-center group hover-shadow" style="height: 31rem;">
                        <img src="{{ $product['image'] }}" class="card-img-top mb-1" alt="{{ $product['name'] }}" >
                        <div class="card-body position-relative">

                            <!-- Info biasa (nama, kategori, harga) -->
                            <div class="card-info">
                                <h6 class="card-title">{{ $product['name'] }}</h6>
                                <p><small class="badge bg-primary">{{ $product['category'] }}</small></p>
                                <p class="card-text">Rp{{ number_format($product['price'], 0, ',', '.') }}</p>
                            </div>
                            <!-- Tombol aksi -->
                            <div class="card-action">
                                <a href="/produkdetail" class="btn btn-primary btn-sm">Lihat Detail</a>
                            </div>
                            
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
    <br>
</x-layout>
