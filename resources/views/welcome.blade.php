@extends('template.app')
@section('nav')
    <div class="container d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img src="assets/img/logo2.png" alt="" width="auto" height="50px">
            <h1 class="logo me-auto me-lg-0 d-none d-md-block">
                <a href="{{ url('/') }}">
                    Mind Game Copywriting
                </a>
            </h1>
        </div>

        <!-- Uncomment below if you prefer to use an image logo -->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('about') }}">About Us</a></li>
                <li><a class="nav-link scrollto" href="{{ route('service') }}">Services</a></li>
                <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <div class="icon text-center d-flex">
            <a href="https://www.instagram.com/mindgamecopywriting/" class="instagram"><i class="bx bxl-instagram p-2"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin p-2"></i></a>
        </div>
    </div>
@endsection
@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-lg-6 order-1 order-lg-2">
                    <h1>Mind Game Copywriting</h1>
                    <h2>Living Words For Better Sales</h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 mt-3" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{ asset("assets/img/Tim/profile.jpg") }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
@endsection
@section('main')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="m-5 px-5" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box my-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                        <h1><strong>Services</strong></h1>
                    </div>
                    <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                        <i class='bx bx-check-double'></i>
                        <h4>High-Converting Email Marketing</h4>
                        <p>Transform your emails into revenue-generating powerhouses with our high-converting email
                            marketing expertise.</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class='bx bx-check-double'></i>
                        <h4>Lead-Generating Advertising Campaigns</h4>
                        <p>Our advertising campaigns are not just about clicks; they're about creating leads that propel
                            your business forward.</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class='bx bx-check-double'></i>
                        <h4>Engaging Landing Pages:</h4>
                        <p>First impressions count. Make them unforgettable with our engaging landing pages that captivate
                            your audience from the first click.</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class='bx bx-check-double'></i>
                        <h4>Captivating Website Texts:</h4>
                        <p>Your website is your digital storefront. Let us craft captivating texts that leave a lasting
                            impression on your visitors.</p>
                    </div>
                </div>
                <div class="col-lg-3 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/Tim/about1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-3 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/Tim/about2.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
    <section id="hero2" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-lg-8 order-1 order-lg-2">
                    <h2>We are not any AI - We are humans!</h2>
                    <h1>Enter the Realm of Words</h1>
                    <h2>Our text has emotions! And emotions sell!</h2>
                    <a href="{{ route('about') }}" class="btn btn-warning mt-3 px-4 py-2">About Us</a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
    <section class="quote-table m-5">
        <div class="border-atas row border border-top-0 text-center m-auto">
            <div class="border border-end-0 col-lg-3 col-md-12 col-sm-12 mx-auto d-block center quote-text1 p-5">
                <strong>CAPTIVATING</strong>
            </div>
            <div class="border border-end-0 col-lg-3 col-md-12 col-sm-12 mx-auto d-block center quote-text2 p-5">
                <strong>BREATHTAKING</strong>
            </div>
            <div class="border border-end-0 col-lg-3 col-md-12 col-sm-12 mx-auto d-block center quote-text3 p-5">
                <strong>MONETIZING</strong>
            </div>
            <div class="border col-md-12 col-lg-3 col-sm-12 mx-auto d-block center quote-text4 p-5">
                <strong>SUCCESSFULL</strong>
            </div>
        </div>
    </section>
    </section><!-- End About Section -->
    <section id="testimonials" class="testimonials">
        <div class="" data-aos="zoom-in">
            <div class="container title">
                <h1 style="color: black"><strong>Customer Review</strong></h1>
            </div>
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src={{ asset('assets/img/testimonials/testimonials-1.jpg') }} class="testimonial-img"
                                alt="">
                            <h3>Freddy Steimle</h3>
                            {{-- <h4>Ceo &amp; Founder</h4> --}}
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                I wanted to say thank you again for the brilliant work from you and your team. Your passion
                                is evident, and the results speak for themselves. It's only been 2 months, and our sales
                                have already increased by 37%. A huge thank you for that.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src={{ asset('assets/img/testimonials/testimonials-2.jpg') }} class="testimonial-img"
                                alt="">
                            <h3>Andrea Schraut</h3>
                            {{-- <h4>Designer</h4> --}}
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                A heartfelt thank you Tim for the convincing redesign of my website. Your creativity
                                transformed my vision into impressive words. Thanks to you, my website shines like new and I
                                am amazed by your professionality.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src={{ asset('assets/img/testimonials/testimonials-3.jpg') }} class="testimonial-img"
                                alt="">
                            <h3>Max Vennemann</h3>
                            {{-- <h4>Store Owner</h4> --}}
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                I just wanted to thank you again for the smooth collaboration. Since I put your texts on my
                                website, my conversion has increased significantly. Because of you I were finally able to
                                reach my sales goal!
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src={{ asset('assets/img/testimonials/testimonials-4.jpg') }} class="testimonial-img"
                                alt="">
                            <h3>Tobias Dolde</h3>
                            {{-- <h4>Freelancer</h4> --}}
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Hey Tim, I love the lyrical style of your texts. The poetry is very special und profound. You bring boring letters into life. Thanks for the amazing work.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    {{-- <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src={{ asset('assets/img/testimonials/testimonials-5.jpg') }} class="testimonial-img"
                                alt="">
                            <h3>Andre Wurster</h3>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                I wanted to leave a big thank you for the brilliant work you have done for me. Your ideas and texts make my work every day a lot easier. This enabled me to make good progress on the way to my goals..
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div> --}}
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src={{ asset('assets/img/testimonials/testimonials-5.jpg') }} class="testimonial-img"
                                alt="">
                            <h3>Robin Brandoni</h3>
                            {{-- <h4>Entrepreneur</h4> --}}
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Unbelievable! Never expected that impact on my website! Thank you so much for your effort. I am going to recommend you to all my friends and my business partner.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->
    <section id="hero3" class="d-flex align-items-center justify-content-center text-center">
        <div class="p-5" data-aos="fade-up">
            <div class="row align-items-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-lg-12 order-1 order-lg-2">
                    <h1>"Copy is not written. Copy is assembled." - Gary Halbert</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
