<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">
<!--== Header Area Start ==-->
@include('inc/header')
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

    <!--== Header Area Start ==-->
    @include('inc/nav')
    <!--== Header Area End ==-->

    <div class="hero page-inner overlay" style="background-image: url('images/pillow-sofa.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Properties</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Properties
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    <h2 class="font-weight-bold text-primary heading">
                        Featured Properties
                    </h2>
                </div>
            </div>
            <?php
            $properties = config('properties');
            ?>
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider">

                            @foreach ($properties as $property)
                                <div class="property-item">
                                    <a href="{{ route('propertysingle', ['id' => $property['id']]) }}" class="img">
                                        <img src="{{ $property['image'] }}" alt="Image" class="img-fluid"
                                            style="height:25rem; width:27rem;" />
                                    </a>

                                    <div class="property-content">
                                        <div class="price mb-2"><span>{{ $property['price'] }}</span></div>
                                        <div>
                                            <span class="d-block mb-2 text-black-50">{{ $property['address'] }}</span>
                                            <span class="city d-block mb-3">{{ $property['city'] }}</span>

                                            {{-- <div class="specs d-flex mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <span class="icon-bed me-2"></span>
                                                    <span class="caption">{{ $property['beds'] }}</span>
                                                </span>
                                                <span class="d-block d-flex align-items-center">
                                                    <span class="icon-bath me-2"></span>
                                                    <span class="caption">{{ $property['baths'] }}</span>
                                                </span>
                                            </div> --}}

                                            <a href="{{ route('propertysingle', ['id' => $property['id']]) }}"
                                                class="btn btn-primary py-2 px-3">See details</a>
                                            {{-- <a href="{{ route('propertysingle1') }}"
                                                class="btn btn-primary py-2 px-3">See details</a> --}}




                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property"
                                tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property"
                                tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $products = config('products');
    ?>
    <div class="section section-properties">
        <div class="container">
            <div class="row">
                @foreach ($paginator as $product)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="property-item mb-30">
                            <a href="property-single.html" class="img">
                                <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>{{ $product['price'] }}</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">{{ $product['address'] }}</span>
                                    <span class="city d-block mb-3">{{ $product['city'] }}</span>

                                    {{-- <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div> --}}

                                    <a href="{{ route('propertysingle', ['id' => $product['id']]) }}"
                                        class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->
                    </div>
                @endforeach

                <div class="row align-items-center py-5">
                    <div class="col-lg-3">Pagination ({{ $paginator->currentPage() }} of {{ $paginator->lastPage() }})
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="custom-pagination">
                            @if ($paginator->currentPage() > 1)
                                <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            @endif

                            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                                @if ($i == $paginator->currentPage())
                                    <a href="#" class="active">{{ $i }}</a>
                                @else
                                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                                @endif
                            @endfor

                            @if ($paginator->hasMorePages())
                                <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>


            </div>
        </div>

        {{-- footer start --}}
        @include('inc/footer')
        {{-- footer ends --}}
        <!-- Preloader -->
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/tiny-slider.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/navbar.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>
</body>

</html>
