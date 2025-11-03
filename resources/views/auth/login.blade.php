@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="vh-100 text-white d-flex align-items-center justify-content-center HomePage1 object-fit-cover">
            <div class="login-card text-center text-black">
                <img src="{{ Vite::asset('resources/images/LogoCLR.png') }}" alt="Logo" width="60">
                <h4 style="font-weight: 700;">Log in to your account</h4>
                <p style="font-size: 14px; color: #555;">Your amazing camping will begin here</p>
                <form>
                    <div class="form-container mx-auto">
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" name="email" id="email" required class="form-control custom-input">
                        </div>

                        <div class="mb-3 text-start">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <input type="password" name="password" id="password" required class="form-control custom-input">
                        </div>

                        <button type="submit" class="btn btn-success btn-green w-100 my-3">Log In</button>
                    </div>
                    
                    <div class="text-center my-3">
                        <p>Don't have an account? <a href="{{ ('#') }}" class="text-primary">Create account</a></p>
                    </div>
                </form>
                </div>
            </div>
    </div>
    </div>
@endsection