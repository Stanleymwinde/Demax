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
    <div class="hero page-inner overlay" style="background-image: url('images/pexels-max.jpg')">
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
                        <img src="images/vallen-sofa.avif" alt="Image" class="img-fluid" />
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
                            <h3 class="heading">Personal space </h3>
                            <p class="text-black-50">
                                Intensive workspace blocked
                                from outside(Ex. Immersion zone)
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Top rated Privacy</h3>
                            <p class="text-black-50">
                                Space that reflects individualsecurity
                                and rest in an open space (Phone booth,
                                Goods storage zone)
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
                        <img src="images/pillow-sofa.jpg" alt="Image" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-home2"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Communication space</h3>
                            <p class="text-black-50">
                                Idea space that everyone can access and
                                easily form a consensus.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-person"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Co-working space</h3>
                            <p class="text-black-50">
                                A space where you can easily share
                                opinions without division.
                                (Ex. Collaboration zone, Project zone)
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Workstation</h3>
                            <p class="text-black-50">
                                A space where furniture composition and
                                layout are determined considering
                                characteristics by job (Ex. Designated
                                seat, Motion zone)
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
                    <img src="images/cab.jpg" alt="Image" class="img-fluid" />
                </div>
                <div class="col-md-4 mt-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="images/pexels-element.jpg" alt="Image" class="img-fluid" />
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <img src="images/pexels.jpg" alt="Image" class="img-fluid" />
                </div>
            </div>
            <div class="row section-counter mt-5">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">9316</span></span>
                        <span class="caption text-black-50">No. of Buy Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">542181</span></span>
                        <span class="caption text-black-50">No. of Sold Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">1569316</span></span>
                        <span class="caption text-black-50">No. of All Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">7191</span></span>
                        <span class="caption text-black-50">No. of Agents</span>
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
                        Our Clientelle
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

                            <img src="images/Britam.png" alt="Image" class=""
                                style="height:200px; width:300px" />

                            {{-- <h3 class="h5 text-primary">BRITAM</h3> --}}
                            <p class="text-black-50">British American Insurance Co. Ltd</p>
                        </div>



                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/pro-gas.png" alt="Image" class=""
                                style="height:200px; width:300px" />
                            {{-- <h3 class="h5 text-primary">Carol Houston</h3> --}}
                            <p class="text-black-50">Pro Gas</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/huawei.jpg" alt="Image" class=""
                                style="height:200px; width:300px" />
                            {{-- <h3 class="h5 text-primary">Carol Houston</h3> --}}
                            <p class="text-black-50">Huawei</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/fidelity.jpg" alt="Image" class=" "
                                style="height:200px; width:300px" />
                            {{-- <h3 class="h5 text-primary">Carol Houston</h3> --}}
                            <p class="text-black-50">Fidelity</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/carrefour.png" alt="Image" class=""
                                style="height:200px; width:300px" />
                            {{-- <h3 class="h5 text-primary">Carol Houston</h3> --}}
                            <p class="text-black-50">carrefour</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/huawei.jpg" alt="Image" class=""
                                style="height:200px; width:300px" />
                            {{-- <h3 class="h5 text-primary">Carol Houston</h3> --}}
                            <p class="text-black-50">Huawei</p>
                        </div>
                    </div>

                    <div class="testimonial">
                        <img src="images/us-embassy.jpg" alt="Image" class=""
                            style="height:200px; width:300px" />
                        {{-- <h3 class="h5 text-primary">BRITAM</h3> --}}
                        <p class="text-black-50">United States Embassy</p>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/scan.png" alt="Image" class=""
                                style="height:200px; width:300px" />
                            {{-- <h3 class="h5 text-primary">Carol Houston</h3> --}}
                            <p class="text-black-50">Scan Group</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- clientelle --}}



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
