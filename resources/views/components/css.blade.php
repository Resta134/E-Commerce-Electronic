<style>
    /* Efek hover utama card */
    .hover-shadow {
        transition: all 0.6s ease;
        box-shadow: none;
        position: relative;
        overflow: hidden;
    }

    .hover-shadow:hover {
        transform: translateY(-15px);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.54);
        cursor: pointer;
    }

    /* Atur tinggi tetap biar konten tidak loncat-loncat */
    .card-body {
        position: relative;
        height: 110px;
        /* Atur sesuai kebutuhan tinggi konten */
    }

    /* Info produk: nama, kategori, harga */
    .card-info {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        transition: all 0.6s ease;
        z-index: 1;
    }

    /* Tombol lihat detail */
    .card-action {
        position: absolute;
        bottom: -30px;
        left: 0;
        right: 0;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.4s ease;
        z-index: 2;
    }

    /* Saat hover: info naik + tombol muncul */
    .hover-shadow:hover .card-info {
        opacity: 0;
        transform: translateY(-40px);
        pointer-events: none;
    }

    .hover-shadow:hover .card-action {
        opacity: 1;
        transform: translateY(0);
        bottom: 35px;
    }

    /* Tombol lihat detail */

    /* style detailproduk */
    .hover-detail {
        transition: all 0.5s ease;
        background-color: rgba(71, 69, 69, 0.03);
    }

    .hover-detail:hover {
        background: linear-gradient(to right, rgb(91, 102, 227), rgb(11, 18, 126));
        color: white !important;
        transform: scale(1.05);
    }

    .text-orange {
        color: #ff5722;
    }

    .bg-orange {
        background-color: #ff5722;
    }
</style>