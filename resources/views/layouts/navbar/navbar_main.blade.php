<nav class="navbar navbar-expand-lg fixed-top bg-transparent navbar-dark py-2 mt-0">
    <div class="container-fluid">
        <a class="navbar-brand" href={{ url('/') }}>
            <img src="{{ Vite::asset('resources/images/Logo.png') }}" width="50px" alt="Logo">
            Angklung River Camp
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active me-4" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="#reviews">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="#moreinfo">More Informations</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-success me-4">Login</button>
                </li>
            </ul>
        </div>
    </div>
</nav>