@extends('master')
@push('style')
    <style>
        a {
            text-decoration: none;
        }

        .login-page {
            width: 100%;
            height: 100vh;
            display: inline-block;
            display: flex;
            align-items: center;
        }

        .form-right i {
            font-size: 100px;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login-page bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <h3 class="mb-3">Login Now</h3>
                                <div class="bg-white shadow rounded">
                                    <div class="row">
                                        <div class="col-md-7 pe-0">
                                            <div class="form-left h-100 py-5 px-5">
                                                <form method="POST" action="{{ route('login') }}" class="row g-4">
                                                    @csrf
                                                    <div class="col-12">
                                                        <label>Username<span class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="bi bi-person-fill"></i>
                                                            </div>
                                                            <input id="email" type="email"
                                                                placeholder="Enter Username"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                name="email" value="{{ old('email') }}" required
                                                                autocomplete="email" autofocus>
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <label>Password<span class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="bi bi-lock-fill"></i>
                                                            </div>
                                                            <input id="password" type="password"
                                                                placeholder="Enter Password"
                                                                class="form-control @error('password') is-invalid @enderror"
                                                                name="password" required autocomplete="current-password">
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="inlineFormCheck">
                                                            <label class="form-check-label" for="inlineFormCheck">Remember
                                                                me</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <a href="{{ route('register') }}" class="float-end text-primary">Register?</a>
                                                    </div>
                                                    {{-- <div class="col-sm-6">
                                                        <a href="#" class="float-end text-primary">Forgot
                                                            Password?</a>
                                                    </div> --}}

                                                    <div class="col-12">
                                                        <button type="submit"
                                                            class="btn btn-primary px-4 float-end mt-4">login</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-5 ps-0 d-none d-md-block">
                                            <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                                <i class="bi bi-bootstrap"></i>
                                                <h2 class="fs-1">Welcome Back!!!</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-end text-secondary mt-3">Bootstrap 5 Login Page Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
