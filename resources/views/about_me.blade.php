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
                <li><a class="nav-link scrollto active" href="{{ route('about') }}">About Us</a></li>
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
    <section id="hero-service" class="d-flex align-items-center text-center justify-content-center p-0 m-0">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-lg-12 order-1 order-lg-2">
                    <img src="{{ asset('assets/img/logo2.png') }}" alt="" srcset="" width="400px"
                        height="auto">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
    <section id="about" class="about">
        <div class="" data-aos="fade-up">
            <div class="row align-items-center text-justify">
                <div class="col-lg-3 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <video width="100%" height="auto" controls>
                        <source src="{{ asset('assets/videos/mmc.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="container my-5 col-lg-6 pt-4 px-4 pt-lg-0 order-2 order-lg-1 about-text" data-aos="fade-right" data-aos-delay="100">
                    <p>Welcome to Mind Game Copywriting, where the power of words meets the art of persuasion.</p>
                    <p>We are not your ordinary copywriting agency; we are trailblazers, storytellers, and dream-weavers,
                        driven by a fascination for the potential words hold in transforming businesses and lives.

                    </p>
                    <p>
                        At Mind Game, we believe that every brand has a unique story, a captivating essence waiting to be
                        unleashed upon the world. Our mission is to help you discover and articulate that story, to craft
                        words that resonate, ignite emotions, and leave an indelible mark on your audience's hearts.
                    </p>
                    <p>
                        Behind the scenes, you'll find a team of passionate wordsmiths, each with a flair for weaving
                        narratives that captivate and inspire. Our years of experience have taught us that powerful
                        copywriting is not just about fancy words; it's about understanding your business, your values, and
                        your vision. We dive deep into your world, discovering what sets you apart and why your message
                        matters.
                    </p>

                    <p>
                        From defining your company's goals and vision to strategizing effective communication tactics, we
                        leave no stone unturned in our quest to elevate your brand. We excel in identifying your unique
                        selling points, selecting target niches, and creating marketing strategies that not only attract
                        customers but turn them into loyal advocates.
                    </p>
                    <p>
                        Our expertise extends to the digital realm, where we optimize your online presence, manage social
                        media, and create persuasive landing pages that convert. We harness the power of email marketing and
                        advertising campaigns to reach a wider audience, leaving an unforgettable impression.
                    </p>
                    <p>
                        But it's not just about business; it's about building meaningful connections. We take pride in
                        providing personalized support throughout our journey together, ensuring you feel heard, understood,
                        and valued.
                    </p>

                    <p>So, if you're ready to play the Mind Game, to transform your brand into a magnetic force that
                        captures hearts and drives success, then join us on this exhilarating ride. Let's unleash the magic
                        of words together and create a legacy that stands the test of time.</p>
                    <p>
                        Welcome to Mind Game Copywriting, where the extraordinary begins!
                    </p>
                </div>

                <div class="col-lg-3 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset("assets/img/Tim/smile.jpg") }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
    <section id="hero-service-quote" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-lg-12 order-1 order-lg-2 text-center">
                    <h1>"A well-crafted story is the key to unlocking hearts and opening wallets."</h1>
                    <h2>- Joe Sugarman</h2>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
@endsection
