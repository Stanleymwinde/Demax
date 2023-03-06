<!-- /*
* Template Name: products
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">
<!--== Header Area Start ==-->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="/images/favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="/fonts/icomoon/style.css" />
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="/css/tiny-slider.css" />
    <link rel="stylesheet" href="/css/aos.css" />
    <link rel="stylesheet" href="/css/style.css" />

    <title>
        products &mdash; Demax Ltd
    </title>
</head>
<!--== Header Area End ==-->

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <!--== Nav Area Start ==-->
    @include('inc/nav')
    <!--== Nav Area End ==-->

    <div class="hero page-inner overlay" style="background-image: url('/images/hero_bg_3.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">
                        {{ $products['address'] }}
                    </h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('properties') }}">Properties</a>
                            </li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                {{ $products['address'] }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <div class="img-products-slide-wrap">
                        <div class="img-products-slide">
                            <img src="/{{ $products['image'] }}" alt="Image" class="img-fluid" />
                            <img src="/images/pexels.jpg" alt="Image" class="img-fluid" />
                            <img src="/images/pexels-element.jpg" alt="Image" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2 class="heading text-primary">{{ $products['address'] }}</h2>
                    <p class="meta">{{ $products['city'] }}</p>
                    <p class="text-black-50">
                        {{ $products['desc'] }}
                    </p>
                    <p class="text-black-50">
                        {{ $products['desc2'] }}
                    </p>

                    <div class="d-block agent-box p-5">
                        <div class="img mb-4">
                            <img src="/images/lady.jpeg" alt="Image" class="img-fluid" />
                        </div>
                        <div class="text">
                            <h3 class="mb-0">Alicia Huston</h3>
                            <div class="meta mb-3">Real Estate</div>
                            <p>
                                I recently purchased this from DEMAX Furniture and I'm very
                                satisfied with my purchase. very stylish and well-made, and it looks
                                great in my office. The price was reasonable and the staff was friendly and
                                helpful. I would definitely shop at DEMAX Furniture again
                            </p>
                            <ul class="list-unstyled social dark-hover d-flex">
                                <li class="me-1">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                                <li class="me-1">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="me-1">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="me-1">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer start --}}
    @include('inc.footer');
    {{-- footer ends --}}

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/tiny-slider.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/navbar.js"></script>
    <script src="/js/counter.js"></script>
    <script src="/js/custom.js"></script>
</body>

</html>
