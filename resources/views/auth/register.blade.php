@extends('layouts.app')

@section('content')
    @include('layouts.navbar.navbar_back')
    <div class="row">
        <div class="vh-100 text-white d-flex align-items-center justify-content-center HomePage1 object-fit-cover">
            <div class="login-card text-center text-black">
                <img src="{{ Vite::asset('resources/images/LogoCLR.png') }}" alt="Logo" width="60">
                <h4 class="" style="font-weight: 700;">Create a new account</h4>
                <p style="font-size: 14px; color: #555;">Your amazing camping will begin here</p>

                {{-- FORM REGISTER --}}
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-container mx-auto">

                        {{-- NAMA --}}
                        <div class="text-start mt-2">
                            <label for="name" class="form-label fw-semibold mb-0">Full Name</label>
                            <input type="text" name="name" id="name" required class="form-control custom-input"
                                placeholder="Enter your full name">
                        </div>
                        {{-- EMAIL --}}
                        <div class="text-start mt-2">
                            <label for="email" class="form-label fw-semibold mb-0">Email</label>
                            <input type="email" name="email" id="email" required class="form-control custom-input"
                                placeholder="example@email.com">
                        </div>
                        {{-- NOMOR TELEPON --}}
                        <div class="text-start mt-2">
                            <label for="phone" class="form-label fw-semibold mb-0">Phone Number</label>
                            <input type="tel" name="phone" id="phone" required class="form-control custom-input"
                                placeholder="e.g. 081234567890">
                        </div>
                        {{-- PASSWORD --}}
                        <div class="text-start mt-2">
                            <label for="password" class="form-label fw-semibold mb-0">Password</label>
                            <input type="password" name="password" id="password" required class="form-control custom-input"
                                placeholder="Enter your password">
                        </div>

                        {{-- KONFIRMASI PASSWORD --}}
                        <div class="text-start mt-2">
                            <label for="password_confirmation" class="form-label fw-semibold mb-0">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required
                                class="form-control custom-input" placeholder="Re-enter your password">
                        </div>

                        <button type="submit" class="btn btn-success btn-green w-100 my-3 mt-4">Create Account</button>
                    </div>

                    <div class="text-center mt-1">
                        <p>Already have an account?
                            <a href="{{ route('login') }}" class="text-primary">Log in</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection