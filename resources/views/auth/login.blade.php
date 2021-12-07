@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/Logo3.png" alt="" style="width: 200px; max-height: 150px !important;">
{{--                                <span class="d-none d-lg-block">NiceAdmin</span>--}}
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4" style="color: #FF5C00 ;">Faça login na sua conta</h5>
                                    <p class="text-center small">Digite seu e-mail e senha para fazer o login</p>
                                </div>

                                <form class="row g-3 needs-validation" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">E-mail</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="yourUsername" value="{{ old('email') }}" required>
{{--                                            <div class="invalid-feedback">Por favor, insira seu e-mail!</div>--}}

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Senha</label>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required autocomplete="current-password">
                                        <div class="invalid-feedback">Por favor, insira sua senha!</div>
                                        @error('password')--}}
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="rememberMe">Lembre-me</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn w-100" style="background-color: #FF5C00 ; color: #ffffff;" type="submit">Entrar</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Não tem conta? <a href="{{ route('select') }}">Crie sua conta</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

{{--                        <div class="credits">--}}
{{--                            <!-- All the links in the footer should remain intact. -->--}}
{{--                            <!-- You can delete the links only if you purchased the pro version. -->--}}
{{--                            <!-- Licensing information: https://bootstrapmade.com/license/ -->--}}
{{--                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->--}}
{{--                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->
<!-- Vendor JS Files -->
<script src="/dash/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="/dash/vendor/php-email-form/validate.js"></script>
<script src="/dash/vendor/quill/quill.min.js"></script>
<script src="/dash/vendor/tinymce/tinymce.min.js"></script>
<script src="/dash/vendor/simple-datatables/simple-datatables.js"></script>
<script src="/dash/vendor/chart.js/chart.min.js"></script>
<script src="/dash/vendor/apexcharts/apexcharts.min.js"></script>
<script src="/dash/vendor/echarts/echarts.min.js"></script>

<!-- Template Main JS File -->
<script src="/dash/js/main.js"></script>
@endsection
