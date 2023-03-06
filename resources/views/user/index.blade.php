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

    {{-- fb embedded code  --}}
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v16.0"
        nonce="bZIeTJSh"></script>


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

    <div class="hero">
        <div class="hero-slide">
            <div class="img overlay" style="background-image: url('images/sofa.jpg')"></div>
            <div class="img overlay" style="background-image: url('images/homeslide1.jpeg')"></div>
            <div class="img overlay" style="background-image: url('images/modern-office-space-interior.jpg')"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="heading" data-aos="fade-up">
                        Easiest way to find your dream funiture
                    </h1>
                    <p data-aos="fade-up" style="color:white">Welcome to Demax, your one-stop-shop for stylish and
                        affordable furniture. Our collection includes everything from sleek and modern designs to
                        classic and traditional pieces, all crafted
                        with the highest quality materials. Whether you're looking to upgrade your living room, bedroom,
                        or dining space, we have the perfect furniture to fit your unique style and budget. Explore our
                        website today and discover why Demax is the ultimate destination for all your furniture needs.
                    </p>
                    <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <input type="text" class="form-control px-4"
                            placeholder="Your ZIP code or City. e.g. Nairobi" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">
                        Popular Properties
                    </h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p>
                        <a href="{{ route('properties') }}" class="btn btn-primary text-white py-3 px-4">View all
                            properties</a>
                    </p>
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
                            <!-- .item -->

                            {{-- <div class="property-item">
                                <a href="{{ route('propertysingle') }}" class="img">
                                    <img src="images/img_2.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="{{ route('propertysingle') }}" class="btn btn-primary py-2 px-3">See
                                            details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="{{ route('propertysingle') }}" class="img">
                                    <img src="images/img_3.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="{{ route('propertysingle') }}" class="btn btn-primary py-2 px-3">See
                                            details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="{{ route('propertysingle') }}" class="img">
                                    <img src="images/img_4.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="{{ route('propertysingle') }}" class="btn btn-primary py-2 px-3">See
                                            details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="{{ route('propertysingle') }}" class="img">
                                    <img src="images/img_5.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="{{ route('propertysingle') }}" class="btn btn-primary py-2 px-3">See
                                            details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="{{ route('propertysingle') }}" class="img">
                                    <img src="images/img_6.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="{{ route('propertysingle') }}" class="btn btn-primary py-2 px-3">See
                                            details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="{{ route('propertysingle') }}" class="img">
                                    <img src="images/img_7.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="{{ route('propertysingle') }}" class="btn btn-primary py-2 px-3">See
                                            details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="{{ route('propertysingle') }}" class="img">
                                    <img src="images/img_8.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="{{ route('propertysingle') }}" class="btn btn-primary py-2 px-3">See
                                            details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="{{ route('propertysingle') }}" class="img">
                                    <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="{{ route('propertysingle') }}" class="btn btn-primary py-2 px-3">See
                                            details</a>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- .item -->
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

    <section class="features-1">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature">
                        <span class="flaticon-house"></span>
                        <h3 class="mb-3">THE SURVEY</h3>
                        <p>
                            We analyze current problems by
                            surveying users’ questionnaires,
                            group interviews, and so on
                        </p>
                        <p><a href="{{ route('services') }}" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature">
                        <span class="flaticon-building"></span>
                        <h3 class="mb-3">IDENTIFYING WORK
                            CHARACTERISTICS</h3>
                        <p>
                            Identify work practices and
                            associations by department to
                            maximize user performance.
                        </p>
                        <p><a href="{{ route('services') }}" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <span class="flaticon-house-3"></span>
                        <h3 class="mb-3">ANALYZING OFFICE
                            ENVIRONMENT</h3>
                        <p>
                            We study the status of office
                            space usage and improve space
                            efficiency and value
                        </p>
                        <p><a href="{{ route('services') }}" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature">
                        <span class="flaticon-house-1"></span>
                        <h3 class="mb-3">PROPOSING OFFICE
                            ENVIRONMENT</h3>
                        <p>
                            We complete efficientspace
                            layout and workstation plan that
                            accurately identifies your needs
                        </p>
                        <p><a href="{{ route('services') }}" class="learn-more">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div>
        <div class="section sec-testimonials">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col-md-6">
                        <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                            Client Reviews
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
                                <img src="images/man.jpeg" alt="Image"
                                    class="img-fluid rounded-circle w-25 mb-4" />
                                <div class="rate">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                </div>
                                <h3 class="h5 text-primary mb-4">Brian Muga</h3>
                                <blockquote>
                                    <p>
                                        &ldquo;I recently purchased a sofa from Demax Furniture and I'm extremely happy
                                        with my purchase. The quality of the sofa is exceptional and it has added a new
                                        dimension to my living room. The sales team was very helpful in guiding me
                                        through the purchasing process and delivery was prompt. Highly
                                        recommended!.&rdquo;
                                    </p>
                                </blockquote>
                                <p class="text-black-50">Human resources (HR) manager</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial">
                                <img src="images/man.jpeg" alt="Image"
                                    class="img-fluid rounded-circle w-25 mb-4" />
                                <div class="rate">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                </div>
                                <h3 class="h5 text-primary mb-4">Stan Mwinde</h3>
                                <blockquote>
                                    <p>
                                        &ldquo;I bought a dining table and chairs from Demax Furniture and it was a
                                        wonderful experience. The furniture is of high quality and the design is
                                        elegant. The staff was knowledgeable and provided great customer service. I
                                        would definitely shop at Demax Furniture again..&rdquo;
                                    </p>
                                </blockquote>
                                <p class="text-black-50">Research and development (R&D) specialist</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial">
                                <img src="images/lady.jpeg" alt="Image"
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
                                        &ldquo;I had a great experience buying a bed from Demax Furniture. The
                                        salesperson was friendly and patient, and helped me choose the perfect bed for
                                        my needs. Delivery was quick and hassle-free, and the bed is very comfortable. I
                                        would definitely recommend Demax Furniture to anyone in the market for new
                                        furniture.&rdquo;
                                    </p>
                                </blockquote>
                                <p class="text-black-50">Accountant</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial">
                                <img src="images/man.jpeg" alt="Image"
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
                                        &ldquo;I recently purchased a coffee table from DEMAX Furniture and I'm very
                                        satisfied with my purchase. The table is stylish and well-made, and it looks
                                        great in my living room. The price was reasonable and the staff was friendly and
                                        helpful. I would definitely shop at DEMAX Furniture again..&rdquo;
                                    </p>
                                </blockquote>
                                <p class="text-black-50">IT specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-4 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        Let's find Office Funiture that's perfect for you
                    </h2>
                    <p class="text-black-50">
                        The application method is the trend of office furniture that isseeking
                        diversity out of the right work space such as open space, autonomous seat, stand seating,
                        lounge, and rest area.
                    </p>
                </div>
            </div>
            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        <img src="images/whatsaapimg.jpeg" alt="Image" class="img-fluid"
                            style="border-radius: 8px" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-home2"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">1M Products</h3>
                            <p class="text-black-50">
                                DEMAX, a furniture consulting firm specializing in office
                                environment, promises to propose an optimized office environment to SKY Hynix.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-person"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Top Rated Agents</h3>
                            <p class="text-black-50">
                                Our team of top rated agents is dedicated to making your real estate experience as
                                smooth and stress-free as possible. With years of experience and a commitment to
                                excellence, we are here to help you navigate the buying or selling process and achieve
                                your goals with confidence
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Legit Products</h3>
                            <p class="text-black-50">
                                Legit properties refer to real office assets that are legally and rightfully owned by
                                individuals or entities. These products are free from any legal disputes, claims, or
                                encumbrances that may affect their ownership, use, or transferability.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-counter mt-5">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">9316</span></span>
                        <span class="caption text-black-50">No. of Buy Products</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">542181</span></span>
                        <span class="caption text-black-50">No of Sold Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">1569316</span></span>
                        <span class="caption text-black-50">No of All Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">7191</span></span>
                        <span class="caption text-black-50">No of Agents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="row justify-content-center footer-cta" data-aos="fade-up">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="mb-4">Be a part of our growing real state Company</h2>
                <p>
                    <a href="{{ route('contact') }}" target="_blank" class="btn btn-primary text-white py-3 px-4">Be
                        apart of us?</a>
                </p>
            </div>
            <!-- /.col-lg-7 -->
        </div>
        <!-- /.row -->
    </div>

    <div class="section section-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6 mb-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        Our Agents
                    </h2>
                    <p class="text-black-50">
                        With our well-established customer care department, we respond to our clients’ needs on time and
                        ensure all our clients are attended to promptly.
                        Our qualified sales teams will always advice to suit the clients’ financial situation while at
                        the same time ensuring quality.
                        Demax boasts of an extensive list of corporate clients ranging from Multinationals to local
                        giants
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img src="images/man.jpeg" alt="Image" class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">James Doe</a></h2>
                            <span class="meta d-block mb-3">Real Estate Agent</span>
                            <p>
                                Working as an agent for Demax has been a fantastic experience. The company provides
                                excellent training and support, and the management team is always available to answer
                                any questions and provide guidance. The company culture is also very positive, and
                                everyone is focused on helping our clients achieve their goals. I highly recommend Demax
                                as a great place to work.
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
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img src="images/man.jpeg" alt="Image" class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">Jean Smith</a></h2>
                            <span class="meta d-block mb-3">Real Estate Agent</span>
                            <p>
                                As an agent for Demax, I have had the opportunity to work with some amazing clients and
                                help them achieve their financial goals. The company provides us with the resources and
                                tools we need to succeed, and the compensation structure is very competitive. I also
                                appreciate the emphasis on work-life balance, which allows me to take care of my family
                                while still being successful in my career.
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
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img src="images/lady.jpeg" alt="Image" class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">Alicia Huston</a></h2>
                            <span class="meta d-block mb-3">Real Estate Agent</span>
                            <p>
                                I have been working as an agent for Demax for several years now, and I have to say that
                                it is one of the best companies I have ever worked for. The training and support are
                                top-notch, and the management team is always available to help with any issues. The
                                company also provides a great work environment, with a strong emphasis on collaboration
                                and teamwork.
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
