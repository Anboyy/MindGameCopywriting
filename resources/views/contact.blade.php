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
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto " href="{{ url('/') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('about') }}">About Us</a></li>
                <li><a class="nav-link scrollto" href="{{ route('service') }}">Services</a></li>
                <li><a class="nav-link scrollto active" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <div class="icon text-center d-flex">
            <a href="https://www.instagram.com/mindgamecopywriting/" class="instagram"><i class="bx bxl-instagram p-2"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin p-2"></i></a>
        </div>
    </div>
@endsection
@section('main')
    <section id="hero-service" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-lg-12 text-end order-1 order-lg-2">
                    <h1>Contact Us</h1>
                    <h2>Get close to the game of Words</h2>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>PT. Real Perforrmance Consulting</h2>
                <p>Tim Hufnagel</p>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.2054335579282!2d115.17598371102412!3d-8.766733389494387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2447b1f621fe7%3A0x7b0c0cee326b98!2sJl.%20Bypass%20Ngurah%20Rai%20No.67%2C%20Pedungan%2C%20Denpasar%20Selatan%2C%20Kota%20Denpasar%2C%20Bali%2080221%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1697631707414!5m2!1sen!2sus" width="100%" height="270px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Jl. Bypass Ngurah Rai No. 67 <br>Kab. Badung - Bali 80361 - Indonesia</p>
                        </div>
                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>tim@mindgamecopywriting.com</p>
                        </div>
                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+49 174 8383766</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
