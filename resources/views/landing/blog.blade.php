<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Artikel - iTrash</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assetsTemplate/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assetsTemplate/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assetsTemplate/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assetsTemplate/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assetsTemplate/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assetsTemplate/css/main.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="blog-page">
    <main class="main">
        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container">
                <h1>Artikel</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Rumah</a></li>
                        <li class="current">Artikel</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Blog Posts 2 Section -->
        <section id="blog-posts-2" class="blog-posts-2 section">
            <div class="container">
                <div class="row gy-5">
                    @forelse ($artikel as $itemArtikel)
                        <div class="col-lg-4 col-md-6">
                            <article>
                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center">{{ $itemArtikel->category }}</li>
                                        <li class="d-flex align-items-center">
                                            <i class="bi bi-dot"></i> {{ $itemArtikel->created_at->format('d F Y') }}
                                        </li>
                                    </ul>
                                </div>

                                <h2 class="title">
                                    <a
                                        href="{{ route('landing.show', $itemArtikel->id) }}">{{ $itemArtikel->title }}</a>
                                </h2>
                            </article>

                        </div>
                    @empty
                        <h1>Yaah belum ada artikel</h1>
                    @endforelse
                    <!-- End post list item -->
                </div>
                <!-- End blog posts list -->
            </div>
        </section>
        <!-- /Blog Posts 2 Section -->

        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="blog-pagination section">
            <div class="container bg-[#34bf49]">
                <!-- Pagination Links -->
                {{ $artikel->links('pagination::bootstrap-5') }}
            </div>
        </section>
        <!-- /Blog Pagination Section -->
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
                        class="px-1 sitename">iTrash</strong>. <span>All Rights Reserved</span></p>
            </div>

        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="assetsTemplate/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetsTemplate/vendor/php-email-form/validate.js"></script>
    <script src="assetsTemplate/vendor/aos/aos.js"></script>
    <script src="assetsTemplate/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assetsTemplate/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assetsTemplate/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assetsTemplate/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assetsTemplate/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assetsTemplate/js/main.js"></script>
</body>

</html>
