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
                    <h1>Privacy & Policy</h1>
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
                            <p><strong>Information Collection</strong>
                                BWe collect and store information you provide to us when using our services. This may include personal information such as your name, email address, and other contact details. We may also collect non-personal information, such as website usage data.</p>
                        </li>
                        <li>
                            <p> <strong>Use of Information</strong>
                                We use your information to provide and improve our services. We may use your contact information to communicate with you and send you updates, newsletters, or promotional materials.</p>
                        </li>
                        <li>
                            <p>
                                <strong>Security</strong> 
                                We take reasonable steps to protect your personal information, but we cannot guarantee the security of your data. You are responsible for maintaining the confidentiality of your account information.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Changes to Privacy Policy</strong>
                                We may update our Privacy Policy from time to time. We will notify you of any significant changes. Continued use of our services after any such changes shall constitute your consent to such changes.
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
