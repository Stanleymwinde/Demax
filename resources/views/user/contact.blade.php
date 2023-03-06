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
                    <h1 class="heading" data-aos="fade-up">Contact Us</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Contact
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info">
                        <div class="address mt-2">
                            <i class="icon-room"></i>
                            <h4 class="mb-2">Location:</h4>
                            <p>
                                Show Room: 1st Floor Plaza 2,000 ,Mombasa Road
                                <br /> Nairobi, Kenya
                            </p>
                        </div>

                        <div class="open-hours mt-4">
                            <i class="icon-clock-o"></i>
                            <h4 class="mb-2">Open Hours:</h4>
                            <p>
                                Sunday-Friday:<br />
                                08:00 AM - 05:00 PM
                            </p>
                        </div>

                        <div class="email mt-4">
                            <i class="icon-envelope"></i>
                            <h4 class="mb-2">Email:</h4>
                            <p>info@demaxltd.com</p>
                        </div>

                        <div class="phone mt-4">
                            <i class="icon-phone"></i>
                            <h4 class="mb-2">Call:</h4>
                            <p>+254 731 659 139</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    @if (session('success_message'))
                        <div class="alert alert-success">
                            {{ session('success_message') }}
                        </div>
                    @endif
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" />
                            </div>
                            <div class="col-6 mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" />
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" />
                            </div>
                            <div class="col-12 mb-3">
                                <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Message"></textarea>
                            </div>

                            <div class="col-12">
                                <input type="submit" value="Send Message" class="btn btn-primary" />
                            </div>
                        </div>
                    </form>
                    {{-- @component('mail::message')
                        # New Contact Form Submission

                        **Name:** {{ $data['name'] }}<br>
                        **Email:** {{ $data['email'] }}<br>
                        **Subject:** {{ $data['subject'] }}<br>
                        **Message:**<br>
                        {{ $data['message'] }}
                    @endcomponent --}}
                </div>
            </div>
        </div>
    </div>
    <!-- /.untree_co-section -->

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
