<!-- category produk menggunakan data dummy -->
@php
$categories = ['APPLE', 'SAMSUNG', 'VIVO', 'XIAOMI', 'REALME'];

// Data dummy per kategori (bisa dikembangkan sendiri)

@endphp

<div class="container py-5 mb-5 mt-5" >
    <h3 class=" text-black mb-4">Category Handphone</h3>

    <!-- Flex horizontal dengan scroll kalau melebihi lebar -->
    <div class="d-flex flex-row gap-4 overflow-auto pb-2">
        @foreach ($categories as $category)
            <div class="card flex-shrink-0 text-center" style="width: 15rem; height: 12rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $category }}</h5>
                    <p class="card-text">Temukan produk terbaru dari {{ $category }} di sini.</p>
                    <a href="{{ url('/category/' . strtolower($category)) }}" class="btn btn-primary mt-4
                    ">Lihat Produk</a>
                </div>
            </div>
        @endforeach
    </div>
    
    <!-- Hanya 1x tampil -->
    <div class="mt-4">
        <a href="{{ url('/category') }}" class="btn btn-outline-dark">Lihat Semua Kategori</a>
    </div>

        <!-- Garis pemisah -->
        <hr class="border-top border-black opacity-25 my-3" />
                                                                                 
</div>
