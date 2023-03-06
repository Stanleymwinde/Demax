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

    <div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Services</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Services
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature mb-4">
                        <span class="flaticon-house mb-4 d-block"></span>
                        <h3 class="text-black mb-3 font-weight-bold">Quality Properties</h3>
                        <p class="text-black-50">Far far away, behind the word mountains, far from the countries Vokalia
                            and Consonantia, there live the blind texts.</p>
                        <a type="button" class="learn-more" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-modal-title="Quality Properties"
                            data-modal-desc="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.">Read
                            more</a>
                    </div>
                </div>
                {{-- modal --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="modal-desc"></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- modal end --}}


                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature mb-4">
                        <span class="flaticon-house-2 mb-4 d-block-3"></span>
                        <h3 class="text-black mb-3 font-weight-bold">Top Rated Agent</h3>
                        <p class="text-black-50">
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts.
                        </p>
                        <p><a type="button" class="learn-more" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                data-modal-title="Top Rated Agent"
                                data-modal-desc="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.">Read
                                more</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature mb-4">
                        <span class="flaticon-building mb-4 d-block"></span>
                        <h3 class="text-black mb-3 font-weight-bold">
                            OFFICE CONSULTING.
                        </h3>
                        <p class="text-black-50">
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts.
                        </p>
                        <p><a type="button" class="learn-more" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                data-modal-title="OFFICE CONSULTING."
                                data-modal-desc="Demax Limited network enjoins Developers, Architects, Interior Designers, Quantity Surveyors, M&E Engineers, Project Managers and Corporate CEOs who offer unfailing support to the company at all times.">Read
                                more</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature mb-4">
                        <span class="flaticon-house-3 mb-4 d-block-1"></span>
                        <h3 class="text-black mb-3 font-weight-bold">House for Sale</h3>
                        <p class="text-black-50">
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts.
                        </p>
                        <p><a type="button" class="learn-more" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                data-modal-title="House for Sale"
                                data-modal-desc="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.">Read
                                more</a></p>
                    </div>
                </div>

                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature mb-4">
                        <span class="flaticon-house-4 mb-4 d-block"></span>
                        <h3 class="text-black mb-3 font-weight-bold">
                            Quality Properties
                        </h3>
                        <p class="text-black-50">
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts.
                        </p>
                        <p><a type="button" class="learn-more" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-modal-title="Quality Properties"
                                data-modal-desc="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.">Read
                                more</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature mb-4">
                        <span class="flaticon-building mb-4 d-block-3"></span>
                        <h3 class="text-black mb-3 font-weight-bold">Top Rated Agent</h3>
                        <p class="text-black-50">
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts.
                        </p>
                        <p><a type="button" class="learn-more" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-modal-title="Top Rated Agent"
                                data-modal-desc="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.">Read
                                more</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature mb-4">
                        <span class="flaticon-house mb-4 d-block"></span>
                        <h3 class="text-black mb-3 font-weight-bold">
                            Property for Sale
                        </h3>
                        <p class="text-black-50">
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts.
                        </p>
                        <p><a type="button" class="learn-more" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-modal-title="Property for Sale"
                                data-modal-desc="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.">Read
                                more</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature mb-4">
                        <span class="flaticon-house-1 mb-4 d-block-1"></span>
                        <h3 class="text-black mb-3 font-weight-bold">House for Sale</h3>
                        <p class="text-black-50">
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts.
                        </p>
                        <p><a type="button" class="learn-more" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-modal-title="House for Sale"
                                data-modal-desc="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.">Read
                                more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-testimonials">
        <div class="container">
            <div class="row mb-5 align-items-center">x
                <div class="col-md-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                        Customer Says
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
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">James Smith</h3>
                            <blockquote>
                                <p>
                                    &ldquo;Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;
                                </p>
                            </blockquote>
                            <p class="text-black-50">Designer, Co-founder</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_2-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Mike Houston</h3>
                            <blockquote>
                                <p>
                                    &ldquo;Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;
                                </p>
                            </blockquote>
                            <p class="text-black-50">Designer, Co-founder</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_3-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Cameron Webster</h3>
                            <blockquote>
                                <p>
                                    &ldquo;Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;
                                </p>
                            </blockquote>
                            <p class="text-black-50">Designer, Co-founder</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_4-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Dave Smith</h3>
                            <blockquote>
                                <p>
                                    &ldquo;Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;
                                </p>
                            </blockquote>
                            <p class="text-black-50">Designer, Co-founder</p>
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

    <script>
        var myModalEl = document.getElementById('exampleModal')
        myModalEl.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-* attributes
            var modalTitle = button.getAttribute('data-modal-title')
            var modalDesc = button.getAttribute('data-modal-desc')
            // Update the modal's content
            var modalTitleEl = myModalEl.querySelector('.modal-title')
            var modalDescEl = myModalEl.querySelector('#modal-desc')
            modalTitleEl.textContent = modalTitle
            modalDescEl.textContent = modalDesc
        })
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>
