<x-layout>
    <x-css />
    <x-slot:title>
        {{ __('Detail Produk') }}
        </x-slot>

        <nav class="sticky-top z-3">
            <div class="bg-white bg-opacity-75 backdrop-blur-lg shadow-sm mt-2 mb-4 border-bottom rounded">
                <div class="container-fluid d-flex justify-content-between align-items-center px-3 py-4">
                    <h2 class="fw-bold text-dark m-0">iPhone 13</h2>
                    <ul class="nav nav-pills gap-2">
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-semibold px-4 py-2 border rounded-pill hover-detail" href="#spec">
                                Spesifikasi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-semibold px-4 py-2 border rounded-pill hover-detail" href="#review">
                                Ulasan User
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <!-- Kanan: Detail Produk -->
            <div class="card shadow-sm mb-5">
                <div class="row g-0">
                    <div class="col-md-7">
                        <img src="https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16pro__erw9alves2qa_xlarge_2x.png"
                            class="img-fluid rounded-start p-2" alt="iPhone 13">
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="card-body mt-5">
                            <h3 class="card-title">HP DONG</h3>
                            <p><small class="badge bg-primary">SAMSUNG</small></p>
                            <h4 class="text-primary">Rp13.999.000</h4>
                            <p class="text-muted"> Hp hadir dengan layar Super dengan sistem kamera ganda yang memungkinkan Anda mengambil foto dan video berkualitas tinggi. Dengan daya tahan baterai yang lebih lama.
                                <br>Performa yang cepat dan lancar berkat chip A15 Bionic, HP DONG adalah pilihan sempurna untuk pengguna yang menginginkan smartphone premium dengan fitur canggih.
                            </p>
                            </p>
                            <div class="d-flex gap-5 mt-3">
                                <button class="btn btn-outline-primary">Beli Sekarang</button>
                                <a class="nav-link mt-2" href="{{ url('/cart') }}">
                                    <i class="fas fa-shopping-cart fa-xl"></i>
                                </a>
                                <!-- <button class="btn btn-outline-secondary">Tambah ke Keranjang</button>
                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Section Spesifikasi -->
            <div class="container bg-light rounded p-4 mb-5 mt-5 shadow-lg" id="spec">
                <div class="row text-center gy-4">
                    <div class="col-md-4">
                        <img src="https://i05.appmifile.com/407_item_fr/25/09/2023/795876c4cb863f14a30ffeaf58241f1c.png" alt="Kamera" width="48">
                        <p class="mt-2">
                            <strong>Kamera Utama:</strong> 50 MP, 1/1.55", OIS<br>
                            <strong>Kamera Depan:</strong> 20 MP<br>
                            <strong>Ultra-Lebar:</strong> 8 MP<br>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" alt="Kamera Depan" width="48" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>

                        <p class="mt-2">
                            <strong>Layar:</strong> 6.67" AMOLED <br>
                            <strong>Resolusi:</strong> 3200x1440<br>
                            <strong>Refresh rate:</strong> 120 Hz<br>
                            <strong>Proteksi:</strong> Corning Gorilla Glass Victus
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://i05.appmifile.com/831_item_fr/25/09/2023/92a5ba5e32d54987ddf373a8e4b4c8f8.png" alt="Baterai" width="48">
                        <p class="mt-2">
                            <strong>Charging:</strong> 90W<br>
                            <strong>Baterai:</strong> 6000 mAh (standar)<br>
                            <strong>Pengisian Daya:</strong> 50% dalam 15 menit
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://cdn-icons-png.flaticon.com/128/727/727803.png" alt="Layar" width="48">
                        <p class="mt-2">

                        </p>
                    </div>
                    <div class="col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" alt="Prosesor" width="48" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                        </svg>
                        <p class="mt-2">
                            <strong>Prosesor:</strong> Snapdragon 8 Gen 3<br>
                            <strong>Teknologi:</strong> 4nm
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section Ulasan -->
            <div class=" container my-5 shadow-sm" id="review">
                <!--  Box Kiri: Ringkasan Rating -->
                <div class=" row mb-5 border p-5">
                    <div class="image col-4 ps-5 ms-5">
                        <img src="https://th.bing.com/th/id/OIP.6rEmHDf3ORQc44w62pVjNwHaHa?w=158&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
                            class="img-fluid rounded mb-3" alt="iPhone 13" style="max-width: 200px;">
                    </div>
                    <div class="ulasan col-6">
                        <h4>Ulasan Pelanggan <span class="text-warning">124</span> ulasan</h4>
                        <div class="display-4 fw-bold text-orange">5.0</div>
                        <div class="mb-2">
                            ⭐⭐⭐⭐⭐ <small class="text-muted">5.0 dari 5 bintang</small>
                        </div>

                        <!-- Bar rating -->
                        <div>
                            @for($i = 5; $i >= 1; $i--)
                            <div class="d-flex align-items-center mb-1">
                                <div class="me-1" style="width: 24px">{{ $i }}</div>
                                <div class="progress flex-grow-1" style="height: 10px;">
                                    <div class="progress-bar bg-orange" style="width:{{ $i == 5 ? '100%' : '0%' }}"></div>
                                </div>
                                <div class="ms-2 small">{{ $i == 5 ? 124 : 0 }}</div>
                                <!-- Checkbox hanya satu yang bisa dicentang script js yg menghasilkan filetring ulasan bawah tuh  -->
                                <input type="checkbox" class="form-check-input border border-dark ms-2 rating-filter" value="{{ $i }}">
                            </div>
                            @endfor

                        </div>
                    </div>
                </div>

                <!-- 🔷 Box Kanan: Filter & Daftar Ulasan -->
                <div class="ps-4">
                    <!-- Filter -->
                    <div class="mb-3">
                        <button class="btn btn-outline-warning text-dark ">Semua (124)</button>
                        <button class="btn btn-outline-warning text-dark  ">Terbaru</button>
                    </div>

                    <!-- Ulasan filtering -->
                    <div class="d-flex justify-content-between border rounded p-3 mb-3">
                        <div class="ulasaan">
                            <div class="fw-bold">⭐⭐⭐⭐⭐ oleh <span class="text-muted">Rhiki</span></div>
                            <div class="text-muted small mt-1">2 hari lalu</div>
                            <p class="mb-1">Produk sangat bagus! Pengiriman cepat, packing rapi.</p>
                            <img src="..." class="img-thumbnail" style="max-width: 150px; margin-bottom: 20px;">

                            <div class="rate komen d-flex align-items-center gap-3">
                                <p class="mb-0">Setuju dengan ulasan ini?</p>

                                <!-- Like -->
                                <div class="d-flex align-items-center gap-1">
                                    <i class="fas fa-thumbs-up" style="color: rgb(30, 48, 80); cursor: pointer;"></i>
                                    <span>(3)</span>
                                </div>

                                <!-- Dislike -->
                                <div class="d-flex align-items-center gap-1">
                                    <i class="fas fa-thumbs-down" style="color: rgb(30, 48, 80); cursor: pointer;"></i>
                                    <span>(0)</span>
                                </div>
                            </div>

                        </div>
                        <div class="tanggal">
                            <span class="text-muted"> 09-01-2025 12:08</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between border rounded p-3 mb-3">
                        <div class="ulasaan">
                            <div class="fw-bold">⭐⭐⭐⭐⭐ oleh <span class="text-muted">Mark-Zukerbreg</span></div>
                            <div class="text-muted small mt-1">1 hari lalu</div>
                            <p class="mb-1">Worth it</p>
                            <img src="..." class="img-thumbnail" style="max-width: 150px; margin-bottom: 20px;">

                            <div class="rate komen d-flex align-items-center gap-3">
                                <p class="mb-0">Setuju dengan ulasan ini?</p>

                                <!-- Like -->
                                <div class="d-flex align-items-center gap-1">
                                    <i class="fas fa-thumbs-up" style="color: rgb(30, 48, 80); cursor: pointer;"></i>
                                    <span>(1k)</span>
                                </div>

                                <!-- Dislike -->
                                <div class="d-flex align-items-center gap-1">
                                    <i class="fas fa-thumbs-down" style="color: rgb(30, 48, 80); cursor: pointer;"></i>
                                    <span>(0)</span>
                                </div>
                            </div>

                        </div>
                        <div class="tanggal">
                            <span class="text-muted"> 09-01-2025 12:08</span>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>

</x-layout>
<script>
    // Ambil semua checkbox dengan class rating-filter
    document.querySelectorAll('.rating-filter').forEach((checkbox) => {
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                // Hilangkan centang dari checkbox lain
                document.querySelectorAll('.rating-filter').forEach((cb) => {
                    if (cb !== this) cb.checked = false;
                });
            }
        });
    });
</script>