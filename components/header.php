<header class="navbar navbar-expand-lg header bg-white">
    <div class="container-fluid header__top mx-5">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="assets/images/gemak-logo.png" alt="Logo" class="header__logo">
        </a>

        <!-- Mobil Menü Butonu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menü İçeriği -->
        <nav class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav header__menu mx-auto">
                <li class="nav-item"><a class="nav-link header__menu-item" href="#">Anasayfa</a></li>
                <li class="nav-item"><a class="nav-link header__menu-item" href="#faaliyetler">Faaliyetler</a></li>
                <li class="nav-item"><a class="nav-link header__menu-item" href="#inovasyon">İnovasyon</a></li>
                <li class="nav-item"><a class="nav-link header__menu-item" href="#kariyer">Kariyer</a></li>
                <li class="nav-item"><a class="nav-link header__menu-item" href="#medya">Medya</a></li>
                <li class="nav-item"><a class="nav-link header__menu-item" href="#iletisim">İletişim</a></li>

                <!-- Mobilde Görünecek Arama ve Dil Seçimi -->
                <li class="nav-item d-lg-none text-center mt-3">
                    <img src="assets/images/icons/search.svg" alt="Search" class="header__search">
                </li>
                <li class="nav-item d-lg-none text-center mt-2">
                    <p class="header__language d-inline">TR</p>
                    <div class="header__divider d-inline-block"></div>
                    <p class="header__language d-inline ms-2">ENG</p>
                </li>
            </ul>

            <!-- Desktop için Arama ve Dil Seçimi -->
            <div class="d-flex align-items-center d-none d-lg-flex">
                <img src="assets/images/icons/search.svg" alt="Search" class="header__search me-3">
                <p class="mb-0 header__language">TR</p>
                <div class="header__divider"></div>
                <p class="mb-0 header__language ms-2">ENG</p>
            </div>
        </nav>
    </div>
</header>
