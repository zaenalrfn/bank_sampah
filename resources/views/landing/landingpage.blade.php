<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>AiTrash - Kelola Sampahmu</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetsTemplate/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsTemplate/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsTemplate/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsTemplate/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsTemplate/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">


    <!-- Main CSS File -->
    <link href="{{ asset('assetsTemplate/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <h1 class="sitename text-success">AiTrash.</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.html" class="active">Rumah</a></li>
                    <li><a href="#about">Tentang kami</a></li>
                    <li><a href="#blog-posts">Artikel</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assetsTemplate/img/sampah2.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assetsTemplate/img/sampah4.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assetsTemplate/img/sampah6.jpg" alt="Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-1">
                        <span class="section-subtitle" data-aos="fade-up">Selamat Datang</span>
                        <h1 class="mb-4" data-aos="fade-up">
                            Mari Jaga Kebersihan Bersama:
                        </h1>
                        <p data-aos="fade-up">

                            Lingkungan bersih mencerminkan kepedulian kita. Mulailah dari hal sederhana - buang sampah
                            pada tempatnya. Dengan aksi kecil ini, kita dapat menciptakan perubahan besar untuk
                            lingkungan yang lebih sehat dan nyaman bagi semua.
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- About 2 Section -->
        <section id="about-2" class="about-2 section light-background">

            <div class="container">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
                            <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                                <div class="img">
                                    <img src="assetsTemplate/img/sampah7.jpg" alt="circle image" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
                            <div class="px-3">
                                <span class="content-subtitle">Misi Kami</span>
                                <h2 class="content-title text-start">
                                    Bersama, Wujudkan Dunia Bebas Sampah!
                                </h2>
                                <p class="lead">
                                    Sampah bukan hanya masalah lingkungan, tetapi juga tanggung jawab kita bersama.
                                    Setiap langkah kecil yang kita ambil hari ini dapat menciptakan perubahan besar di
                                    masa depan. Mari bersatu untuk mengelola sampah dengan bijak, mendaur ulang, dan
                                    menjaga keindahan bumi kita.
                                </p>
                                <p>
                                    Jangan biarkan sampah menguasai kita, mari kita yang mengelola sampah untuk masa
                                    depan yang lebih hijau.
                                </p>
                                <p>
                                    <a href="/login" target="_blank" class="btn-get-started">Mulai sekarang!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About 2 Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <div class="container">
                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-3">
                        <div class="services-item" data-aos="fade-up">
                            <div class="services-icon">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <div>
                                <h3>Pengelolaan Sampah Modern</h3>
                                <p>Menggunakan teknologi canggih untuk mendaur ulang sampah dan mengurangi dampak buruk
                                    terhadap lingkungan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="services-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="services-icon">
                                <i class="bi bi-command"></i>
                            </div>
                            <div>
                                <h3>Desain untuk Bumi Bersih</h3>
                                <p>Kami merancang solusi inovatif untuk pengelolaan sampah, mendukung gaya hidup ramah
                                    lingkungan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="services-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="services-icon">
                                <i class="bi bi-bar-chart"></i>
                            </div>
                            <div>
                                <h3>Branding untuk Kesadaran Lingkungan</h3>
                                <p>Menginspirasi masyarakat melalui kampanye kreatif agar lebih peduli terhadap
                                    pengelolaan sampah.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /Services Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container">

                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-5">
                        <div class="images-overlap">
                            <img src="assetsTemplate/img/sampah5.jpg" alt="student" class="img-fluid img-1"
                                data-aos="fade-up">
                        </div>
                    </div>

                    <div class="col-lg-4 ps-lg-5">
                        <span class="content-subtitle">Mengapa Kami</span>
                        <h2 class="content-title">Kelola Sampahmu!</h2>
                        <p class="lead">
                            Jauh di sana, di balik gunung-gunung kata, jauh dari negeri Vokalia dan Konsonantia,
                            Tinggalah sampah yang terlupakan. Terpisah, mereka berada di Tempat Pembuangan, tepat di
                            tepi Samudra Limbah,
                            di mana polusi dan sampah mengalir tanpa henti.


                        </p>
                        <div class="row mb-5 count-numbers">

                            <!-- Start Stats Item -->
                            <div class="col-4 counter" data-aos="fade-up" data-aos-delay="100">

                                <span class="d-block">limbah</span>
                            </div>
                            <!-- End Stats Item -->

                            <!-- Start Stats Item -->
                            <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">

                                <span class="d-block">Kompos</span>
                            </div>
                            <!-- End Stats Item -->

                            <!-- Start Stats Item -->
                            <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">

                                <span class="d-block">Daur Ulang</span>
                            </div>
                            <!-- End Stats Item -->

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- /Stats Section -->

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Artikel</h2>
            </div><!-- End Section Title -->
            <div class="container">

                <div class="row gy-4">
                    @forelse ($latestArticles as $artikel)
                        <div class="col-md-6 col-lg-4">
                            <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                                <div class="post-content ">
                                    <div class="meta">
                                        <a href="#" class="cat">{{ $artikel->category }}</a>
                                        <span class="date">{{ $artikel->created_at->format('d F Y') }}</span>
                                    </div>
                                    <h3><a
                                            href="{{ route('landing.show', $artikel->id) }}">{{ substr($artikel->title, 0, 25) }}...</a>
                                    </h3>
                                    <p class="overflow-hidden">
                                        {{ substr($artikel->content, 0, 100) }}...
                                    </p>

                                    <div class="d-flex author align-items-center">
                                        <div class="author-name">
                                            <strong class="d-block">{{ $artikel->author }}</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1>Yaah belum ada artikel</h1>
                    @endforelse
                    <a href="{{ route('landing') }}" class="btn-get-started text-center mt-5">Lihat semua artikel</a>
                </div>
            </div>
        </section><!-- /Blog Posts Section -->

        <!-- Tabs Section -->
        <section id="tabs" class="tabs section light-background">

            <div class="container">
                <div class="row gap-x-lg-4 justify-content-between">
                    <div class="col-lg-4 js-custom-dots">
                        <a href="#" class="service-item link horizontal d-flex active" data-aos="fade-left"
                            data-aos-delay="0">
                            <div class="service-icon color-1 mb-4">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3>Pengelolaan Sampah Modern</h3>
                                <p>
                                    Meningkatkan kesadaran masyarakat tentang pentingnya daur ulang sampah demi masa
                                    depan yang lebih bersih.
                                </p>
                            </div>
                            <!-- /.service-contents-->
                        </a>
                        <!-- /.service -->

                        <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left"
                            data-aos-delay="100">
                            <div class="service-icon color-2 mb-4">
                                <i class="bi bi-bag-check"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3>Daur Ulang dan Manfaatnya</h3>
                                <p>
                                    Daur ulang sampah menjadi produk berguna untuk mengurangi dampak lingkungan dan
                                    memanfaatkan sumber daya.
                                </p>
                            </div>
                            <!-- /.service-contents-->
                        </a>
                        <!-- /.service -->

                        <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left"
                            data-aos-delay="200">
                            <div class="service-icon color-3 mb-4">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3>Kebersihan Setiap Hari</h3>
                                <p>
                                    Menjaga lingkungan tetap bersih dengan memilah sampah secara rutin dari rumah hingga
                                    ke tempat pembuangan akhir.
                                </p>
                            </div>
                            <!-- /.service-contents-->
                        </a>
                        <!-- /.service -->

                        <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left"
                            data-aos-delay="300">
                            <div class="service-icon color-4 mb-4">
                                <i class="bi bi-easel"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3>Hidup Lebih Hijau</h3>
                                <p>
                                    Mengurangi penggunaan plastik sekali pakai dan beralih ke alternatif ramah
                                    lingkungan untuk menciptakan bumi yang lebih sehat.
                                </p>
                            </div>
                            <!-- /.service-contents-->
                        </a>
                        <!-- /.service -->
                    </div>

                    <div class="col-lg-8">
                        <div class="swiper init-swiper-tabs">
                            <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoHeight": true,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assetsTemplate/img/pabrik.jpeg" alt="Image" class="img-fluid">
                                    <div class="p-4">
                                        <h3 class="text-black h5 mb-3">Pengelolaan Sampah Modern</h3>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <p>
                                                    Jauh di sana, di balik kesadaran masyarakat yang tinggi, pengelolaan
                                                    sampah terus menjadi perhatian utama.
                                                    Dengan pendekatan daur ulang dan pengurangan limbah, kita
                                                    menciptakan lingkungan yang lebih bersih dan sehat.
                                                </p>
                                                <p>
                                                    Sebuah aliran kesadaran seperti sungai kecil mengalir di
                                                    komunitas-komunitas, memberikan dukungan dan edukasi
                                                    yang diperlukan. Ini adalah langkah menuju kehidupan berkelanjutan,
                                                    di mana setiap bagian sampah dapat menjadi
                                                    sesuatu yang lebih berarti.
                                                </p>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="list-unstyled list-check">
                                                    <li>Kurangi penggunaan plastik sekali pakai</li>
                                                    <li>Pilah sampah organik dan anorganik dengan benar</li>
                                                    <li>Dukung program daur ulang di lingkungan sekitar</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assetsTemplate/img/daurulang.jpeg" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assetsTemplate/img/sampah8.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assetsTemplate/img/hijau.jpeg" alt="Image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Tabs Section -->


        </div>
        </div>
        </section><!-- /Faq Section -->

    </main>

    <footer id="footer" class="footer light-background">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                    <div class="widget">
                        <h3 class="widget-heading">Tentang kami</h3>
                        <p class="mb-4">
                            Website ini bertujuan untuk meningkatkan kesadaran dan memberikan solusi dalam pengelolaan
                            sampah yang berkelanjutan. Dengan informasi, tips, dan program daur ulang, kami membantu
                            masyarakat menciptakan lingkungan yang lebih bersih dan hijau. Mari bersama-sama mengubah
                            sampah menjadi peluang!
                        </p>
                        <p class="mb-0">
                            <a href="/login" class="btn-learn-more">Mulai sekarang</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
                    <div class="widget">
                        <h3 class="widget-heading">Arah</h3>
                        <ul class="list-unstyled float-start me-5">
                            <li><a href="/">Rumah</a></li>
                            <li><a href="#about">Tentang kami</a></li>
                            <li><a href="#blog-posts">Artikel</a></li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
                <p>© <span id="currentYear"></span> <span>Copyright</span> <strong
                        class="px-1 sitename">Aitrash</strong>. <span>All Rights Reserved</span></p>
            </div>

        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assetsTemplate/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetsTemplate/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assetsTemplate/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assetsTemplate/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assetsTemplate/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assetsTemplate/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assetsTemplate/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assetsTemplate/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assetsTemplate/js/main.js') }}"></script>
    <script>
        // Menambahkan tahun secara otomatis ke elemen dengan id "currentYear"
        document.addEventListener("DOMContentLoaded", function() {
            const currentYear = new Date().getFullYear(); // Mendapatkan tahun saat ini
            document.getElementById("currentYear").textContent = currentYear; // Menambahkan tahun ke elemen
        });
    </script>

</body>

</html>
