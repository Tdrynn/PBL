@extends('layouts.app')

@section('content')
    @include('layouts.navbar.navbar_main')

    {{-- Home Section --}}
    <div class="row">
        <section id="home" class="text-white d-flex align-items-center HomePage1 img-fluid">
            <div class="ms-5 w-50">
                <h1 style="font-size: 110px; font-weight: 660; color: #FFFFFF;">Angklung River Camp</h1>
                <p style="font-size: 29px;">Angklung River Camp is a serene riverside camping site in Klungkung, Bali,
                    perfect for
                    nature lovers seeking a peaceful escape.</p>

                <a href="{{ '#' }}" class="btn btn-success d-flex align-items-center gap-2 px-4 py-2 mb-3"
                    style="background-color: #B5C7B2; color: #114A06; border-radius: 64px; height: 60px; width: 250px; font-size: 20px;">
                    <span class="fw-bold mx-auto">BOOKING NOW</span>
                    <img src="{{ Vite::asset('resources/images/BookingLogo.png') }}" alt="Booking Icon" width="30"
                        height="30">
                </a>
                <div class="gap-2 ms-3">
                    <a href="{{ 'https://www.instagram.com/angklung_river_camp/' }}"
                        class="text-decoration-none link-light mt-3" target="blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                        Angklung_River_Camp
                    </a>
                    <a href="{{ 'https://www.tiktok.com/@angklung.river.camp' }}"
                        class="text-decoration-none link-light mt-3 ms-4" target="blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path
                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                        </svg>
                        Angklung.River.Camp
                    </a>
                </div>
            </div>
        </section>
    </div>



    {{-- About Section --}}
    <div class="row">
        <section id="about" class="HomePage2 text-white py-5 d-flex align-items-center justify-content-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 d-flex justify-content-center position-relative">
                        <div class="shadow-box"></div>
                        <img src="{{ Vite::asset('resources/images/CP1.png') }}" alt="Foto"
                            class="imgPg2 rounded-4 shadow-lg">
                    </div>
                    <div class="col-md-6 ps-md-5 mt-4 mt-mt-0 align-items-centerx">
                        <h3 class="fw-bold text-start">ABOUT US</h3>
                        <h1 class="fw-bold">WHO ARE WE?</h1>
                        <p>Located in edging clear river in Klungkung regency, Angklung River Camp offers a
                            tranquil camping
                            experience perfectly at one with nature. Perfect for families, groups, and organizations.
                        </p>
                        <p class="mb-4">Go check it, by clicking find out more button below</p>
                        <a href="{{ '#' }}" class="btn btn-dark d-flex align-items-center gap-2 px-4 py-2 mb-3"
                            style="background-color: #1F2922; color: #FFFFFF; border-radius: 64px; height: 60px; width: 250px; font-size: 20px;">
                            <span class="fw-bold mx-auto">FIND OUT MORE</span>
                            <img src="{{ Vite::asset('resources/images/Search.png') }}" alt="Search" width="30" height="30">
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </div>

    {{-- Gallery Section --}}
    <div class="row">
        <section id="gallery" class="HomePage3  text-white">
            <div id="carouselExampleIndicators" class="carousel slide d-flex justify-content-center">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner img-fluid" style="width: 50vw; height: 40vh; border: solid;">
                        <div class="carousel-item active img-fluid">
                            <img src="{{ Vite::asset('resources/images/GalleryT.png') }}" class="d-block w-100" style="width: 50vw; height: 40vh" alt="Foto">
                        </div>
                        <div class="carousel-item img-fluid">
                            <img src="{{ Vite::asset('resources/images/GalleryKa.png') }}" class="d-block w-100" alt="Foto">
                        </div>
                        <div class="carousel-item img-fluid">
                            <img src="{{ Vite::asset('resources/images/GalleryKi.png') }}" class="d-block w-100" alt="Foto">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            <div class="d-flex justify-content-center">
                <h1 class="fw-bold">OUR GALLERY</h1>
            </div>
        </section>
    </div>

    {{-- Reviews Section --}}
    <div class="row">
        <section id="reviews" class="HomePage4  text-white d-flex align-items-center object-fit-cover">

        </section>
    </div>

    {{-- More Informations Section --}}
    <div class="row">
        <section id="moreinfo" class="HomePage5">

        </section>
        @include('layouts.footer')
@endsection