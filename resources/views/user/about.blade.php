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

    <!--== Nav Area Start ==-->
    @include('inc/nav')
    <!--== Nav Area End ==-->
    <div class="hero page-inner overlay" style="background-image: url('images/hero_bg_3.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">About</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                About
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row text-left mb-5">
                <div class="col-12">
                    <h2 class="font-weight-bold heading text-primary mb-4">About Us</h2>
                </div>
                <div class="col-lg-6">
                    <p class="text-black-50">
                        Demax was incorporated in 2011 as space planning consultancy and supply of high Grade Office
                        furniture in East, North, Central and Southern Africa.This was after a thorough market survey
                        that showed a glaring lack of EXCELLENT and AFFORDABLE quality Office Furniture backed by an
                        impeccable service.


                    </p>
                    <p class="text-black-50">
                        Demax Limited network enjoins Developers, Architects, Interior Designers, Quantity Surveyors,
                        M&E Engineers, Project Managers and Corporate CEOs who offer unfailing support to the company at
                        all times.
                    </p>
                    {{-- <p class="text-black-50">

                    </p> --}}
                </div>
                <div class="col-lg-6">
                    <p class="text-black-50">
                        Started with only 8 casual employees, Demax , located along Mombasa Road, 1st floor Plaza 2000
                        has now grown to a full-fledged corporategiant.
                        It has two Directors, a top Management team and several site technicians comprising to a total
                        of 24 employees. The company offers a full range of pre and aftersale service including complete
                        2D and 3D layout presentation.
                        The biggest strength of Demax Limited is proven by a continuing growing list of SATISFIED
                        clients who have become part and parcel of the SMART OFFICE community.
                    </p>
                    {{-- <p class="text-black-50">
                        Enim, nisi labore exercitationem facere cupiditate nobis quod
                        autem veritatis quis minima expedita. Cumque odio illo iusto
                        reiciendis, labore impedit omnis, nihil aut atque, facilis
                        necessitatibus asperiores porro qui nam.
                    </p> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="section pt-0">
        <div class="container">
            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        <img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-home2"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Quality properties</h3>
                            <p class="text-black-50">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nostrum iste.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-person"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Top rated agents</h3>
                            <p class="text-black-50">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nostrum iste.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Easy and safe</h3>
                            <p class="text-black-50">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nostrum iste.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section pt-0">
        <div class="container">
            <div class="row justify-content-between mb-5">
                <div class="col-12">
                    <h2 class="font-weight-bold heading text-primary mb-4">Smart Office Demax concept</h2>
                </div>
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="img-about dots">
                        <img src="images/hero_bg_2.jpg" alt="Image" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-home2"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Quality properties</h3>
                            <p class="text-black-50">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nostrum iste.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-person"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Top rated agents</h3>
                            <p class="text-black-50">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nostrum iste.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Easy and safe</h3>
                            <p class="text-black-50">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nostrum iste.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
                </div>
                <div class="col-md-4 mt-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="images/img_3.jpg" alt="Image" class="img-fluid" />
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <img src="images/img_2.jpg" alt="Image" class="img-fluid" />
                </div>
            </div>
            <div class="row section-counter mt-5">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">2917</span></span>
                        <span class="caption text-black-50"># of Buy Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">3918</span></span>
                        <span class="caption text-black-50"># of Sell Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">38928</span></span>
                        <span class="caption text-black-50"># of All Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">1291</span></span>
                        <span class="caption text-black-50"># of Agents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-testimonials bg-light">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                        The Team
                    </h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev">Prev</span>

                        <span class="next" data-controls="next">Next</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4"></div>
            </div>
            <div class="testimonial-slider-wrap">
                <div class="testimonial-slider">
                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_1-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <h3 class="h5 text-primary">James Smith</h3>
                            <p class="text-black-50">Designer, Co-founder</p>

                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind texts.
                                Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_2-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <h3 class="h5 text-primary">Carol Houston</h3>
                            <p class="text-black-50">Designer, Co-founder</p>

                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind texts.
                                Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_3-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <h3 class="h5 text-primary">Synthia Cameron</h3>
                            <p class="text-black-50">Designer, Co-founder</p>

                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind texts.
                                Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_4.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <h3 class="h5 text-primary">Davin Smith</h3>
                            <p class="text-black-50">Designer, Co-founder</p>

                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind texts.
                                Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
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
