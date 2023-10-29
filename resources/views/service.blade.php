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
                <li><a class="nav-link scrollto " href="{{ url('/') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('about') }}">About Us</a></li>
                <li><a class="nav-link scrollto active" href="{{ route('service') }}">Services</a></li>
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
                <h1>Services</h1>
                <h2>We write for your results!</h2>
            </div>
        </div>
    </div>
</section><!-- End Hero -->
<section id="about" class="about">
    <div class="m-5 px-5" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-12 pt-lg-0 col-sm-12 order-2 order-lg-1 text-service" data-aos="fade-right" data-aos-delay="100">
                
            </div>
            <div class="col-lg-9 col-sm-12 col-md-12 pt-lg-0 order-2 order-lg-1 text-service" data-aos="fade-right" data-aos-delay="100">
                <ul>
                    <li>Defining the company's goals and vision.</li>
                    <li>Identifying the unique selling points and brand story.</li>
                    <li>Selecting suitable target niches and customer avatars.</li>
                    <li>Developing effective communication strategies.</li>
                    <li>Optimizing products and services.</li>
                    <li>Creating or improving marketing strategies.</li>
                    <li>Enhancing the online presence and social media management.</li>
                    <li>Implementing sales processes and customer acquisition methods.</li>
                    <li>Strategizing for successful marketing and customer retention.</li>
                    <li>Monitoring and evaluating sales success.</li>
                    <li>Utilizing</li>
                    <ul>
                        <li class="sub-service">Social Media</li>
                        <li class="sub-service">Email Marketing,</li>
                        <li class="sub-service">Websites</li>
                        <li class="sub-service">Landing Page</li>
                        <li class="sub-service">Advertising Campaigns</li>
                    </ul>
                    <li>Providing continuous and personalized support.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="hero-service-quote" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-lg-12 order-1 order-lg-2 text-center">
                <h1>"A well-crafted story is the key to unlocking hearts and opening wallets."</h1>
                <h2>- Joe Sugarman</h2>
            </div>
        </div>
    </div>
</section>
@endsection