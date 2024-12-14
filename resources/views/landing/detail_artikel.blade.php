<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>AiTrash - Detail artikel</title>
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
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">


    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="blog-details-page">
    <main class="main">
        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container">
                <h1>Detail Artikel</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('landing') }}">Artikel</a></li>
                        <li class="current">Detail artikel</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Details Section -->
                    <section id="blog-details" class="blog-details section">
                        <div class="container">
                            <article class="article">

                                <div class="post-img">
                                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                                </div>

                                <h2 class="title">{{ $article->title }}
                                </h2>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i
                                                class="bi bi-person"></i>{{ $article->author }}</li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                            {{ $article->created_at->format('d F Y') }}
                                        </li>
                                    </ul>
                                </div><!-- End meta top -->

                                <div class="content">
                                    <p>
                                        {{ $article->content }}
                                    </p>
                                </div><!-- End post content -->

                                <div class="meta-bottom">
                                    <i class="bi bi-tags"></i>
                                    <ul class="tags">
                                        <li>{{ $article->category }}</li>
                                    </ul>
                                </div><!-- End meta bottom -->

                            </article>


                        </div>
                    </section><!-- /Blog Details Section -->
                </div>
                <div class="col-lg-4 sidebar">

                    <div class="widgets-container">


                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">
                            <h3 class="widget-title">Artikel terbaru</h3>
                            @forelse ($latesArticles as $itemArtikel)
                                <div class="post-item">
                                    <h4><a
                                            href="{{ route('landing.show', $itemArtikel->id) }}">{{ $itemArtikel->title }}</a>
                                    </h4>
                                    <p>{{ $itemArtikel->created_at->format('d F Y') }}</p>
                                </div><!-- End recent post item-->
                            @empty
                                <h1>Yaah artikel terbaru belum ada!</h1>
                            @endforelse
                        </div><!--/Recent Posts Widget -->
                    </div>

                </div>
            </div>
        </div>
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
                            <li><a href="/">Tentang kami</a></li>
                            <li><a href="{{ route('landing') }}">Artikel</a></li>
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


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        // Menambahkan tahun secara otomatis ke elemen dengan id "currentYear"
        document.addEventListener("DOMContentLoaded", function() {
            const currentYear = new Date().getFullYear(); // Mendapatkan tahun saat ini
            document.getElementById("currentYear").textContent = currentYear; // Menambahkan tahun ke elemen
        });
    </script>

</body>

</html>
