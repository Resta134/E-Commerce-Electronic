<div>
    <nav class="navbar navbar-dark navbar-expand-lg p-4" style="background-color: #020f5e;">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a href="isi"><img src="{{ asset('img/logo.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> </a>
            <a class="navbar-brand" href="#">Electronic Handphone</a>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/allproduct">Product</a>
                    </li>
                    <!-- kategori -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item bg-primary text-white" href="https://www.apple.com/id/iphone/">APPLE</a></li>
                            <li><a class="dropdown-item bg-primary text-white" href="https://www.samsung.com/id/smartphones/">SAMSUNG</a></li>
                            <li><a class="dropdown-item bg-primary text-white" href="https://www.vivo.com/id/">VIVO</a></li>
                            <li><a class="dropdown-item bg-primary text-white" href="https://www.xiaomi.com/id/">XIAOMI</a></li>
                            <li><a class="dropdown-item bg-primary text-white" href="https://www.realme.com/id/">REALME</a></li>
                        </ul>
                    </li>
                    <!-- kolom & button search -->
                    <li class="nav-item">
                        <form class="d-flex" action="{{ url('/search') }}" method="GET">
                            <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>
                    </li>
                    <!-- login -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                    <!-- logo keranjang buat cart -->
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/cart') }}">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
