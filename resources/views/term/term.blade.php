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
                <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
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

@section('main')
    <section id="hero-service" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-lg-12 text-center order-1 order-lg-2">
                    <h1>Term of Service</h1>
                    {{-- <h2>We write for your results!</h2> --}}
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
    <section id="about" class="about">
        <div class="" data-aos="fade-up">
            <div class="row align-items-center text-justify">
                <div class="container my-5 col-lg-6 pt-4 px-4 pt-lg-0 order-2 order-lg-1 about-text" data-aos="fade-right"
                    data-aos-delay="100">
                    <p>Welcome to MindGameCopywriting, a platform dedicated to providing top-quality copywriting services.
                        By accessing or using our website, you agree to comply with and be bound by the following terms and
                        conditions. Please read these terms carefully before using our services.</p>
                    <ol>
                        <li>
                            <p> <strong>Acceptance of Terms</strong>
                                By using our website, you agree to be bound by these Terms of Service and our Privacy
                                Policy. If
                                you do not agree with any part of these terms, you should not use our services.</p>
                        </li>
                        <li>
                            <p><strong>Privacy Policy </strong>
                                Your use of our services is also governed by our Privacy Policy. Please review our Privacy
                                Policy to understand how we collect, use, and protect your personal information.</p>
                        </li>
                        <li>
                            <p>
                                <strong>Use of Services</strong> 
                                You may use our website and services for lawful purposes only. You agree not to use our
                                services for any
                                unlawful activities, including, but not limited to, distributing harmful or illegal content,
                                interfering
                                with the functionality of the website, or violating any applicable laws or regulations.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Intellectual Property </strong>
                                All content and materials on our website, including but not limited to text, images,
                                graphics, logos,
                                and software, are the property of [Your Company Name] and are protected by copyright and
                                other
                                intellectual property laws.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Termination of Services </strong>
                                We reserve the right to terminate or suspend your access to our services at our discretion,
                                without
                                notice or liability, for any reason, including but not limited to a breach of these Terms of
                                Service.
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
@endsection