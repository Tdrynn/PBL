@extends('layouts.app')

@section('content')
    @include('layouts.navbar.navbar_back')

    <div class="row">
        <div id="picnic" class="text-light learnMore py-4">
            <div class="container-fluid px-0 my-1 mt-3 mb-4">
                <h1 class="text-center fw-bold">Picnic</h1>

                <div class="row gx-0 justify-content-center align-items-start">
                    <div class="col-md-6 d-flex justify-content-end pe-1">
                        <img src="{{ Vite::asset('resources/images/PN1.png') }}" alt="picnic"
                            class="rounded-4 object-fit-cover" width="525px" height="auto">
                    </div>

                    <div class="col-md-6 ps-1">
                        <div class="d-flex flex-wrap gap-1">
                            <img src="{{ Vite::asset('resources/images/PN2.png') }}" alt="picnic"
                                class="rounded-4 object-fit-cover" width="300px" height="170px">
                            <img src="{{ Vite::asset('resources/images/PN3.png') }}" alt="picnic"
                                class="rounded-4 object-fit-cover" width="300px" height="170px">
                            <img src="{{ Vite::asset('resources/images/PN4.png') }}" alt="picnic"
                                class="rounded-4 object-fit-cover" width="300px" height="170px">
                            <img src="{{ Vite::asset('resources/images/PN5.png') }}" alt="picnic"
                                class="rounded-4 object-fit-cover" width="300px" height="170px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class=" mx-5 text-start mb-0">
                    <h4 class="fw-bold text-start text-dark ms-4 mt-2">Facility</h4>
                </div>
                <div class="d-flex flex-row gap-5 align-items-center justify-content-center my-0">
                    <div class="form-check d-flex align-items-center gap-2 p-2">
                        <img src="{{ Vite::asset('resources/images/toilet.png') }}" alt="toilet" width="40px" height="40px">
                        <p class="fs-5 text-dark fw-semibold">Toilet</p>
                    </div>
                    <div class="form-check d-flex align-items-center gap-2 p-2">
                        <img src="{{ Vite::asset('resources/images/parking.png') }}" alt="parking" width="40px"
                            height="40px">
                        <p class="fs-5 text-dark fw-semibold">Parking</p>
                    </div>
                    <div class="form-check d-flex align-items-center gap-2 p-2">
                        <img src="{{ Vite::asset('resources/images/electrical.png') }}" alt="electrical" width="40px"
                            height="40px">
                        <p class="fs-5 text-dark fw-semibold">Electrical Socket</p>
                    </div>
                    <div class="form-check d-flex align-items-center gap-2 p-2">
                        <img src="{{ Vite::asset('resources/images/sink.png') }}" alt="sink" width="40px" height="40px">
                        <p class="fs-5 text-dark fw-semibold">Wash Basin</p>
                    </div>
                </div>

                <div class="d-flex align-item-center justify-content-center">
                    <hr class="border border-dark opacity-75 mt-1 mb-3" style="width: 90%;">
                </div>

                <div class="d-flex align-item-center justify-content-center">
                    <div class="rounded d-flex" style="background-color: #fff; width: 90%; min-height: 125px;">
                        <div class="text-start p-2 flex-grow-1">
                            <p class="fw-bold fs-5 text-dark ms-3 mt-0">price</p>
                        </div>

                        <div class="text-start text-dark ms-3 mt-5 mb-2 border-end border-3"
                            style="width: 250px; border-color: #ccc;">
                            <p class="mb-0">tent 1-person IDR 25k (weekdays)</p>
                            <p class="mb-0">tent 1-person IDR 35k (weekend)</p>
                            <p class="mb-0">1 day</p>
                        </div>

                        <div class="text-start text-dark ms-3 mt-5 mb-2">
                            <p class="mb-0">tent 2-person IDR 150k</p>
                            <p class="mb-0">tent 4-person IDR 250k</p>
                            <p class="mb-0">1 day</p>
                        </div>

                        <div class="text-end p-2 d-flex gap-2"> <img
                                src="{{ Vite::asset('resources/images/calendar.png') }}" alt="calendar" width="30px"
                                height="30px">
                            <p class="fw-bold fs-5 text-dark me-3 mt-0">Show Availaibility</p>
                        </div>
                        <div> <button type="button" class="btn text-light fw-semibold rounded-3"
                                style="background-color: #114A06; width: 90px; height: 40px;">Booking</button> </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection