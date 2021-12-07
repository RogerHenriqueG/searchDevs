@extends('layouts.app')

@section('content')
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
                                    <h5 class="card-title text-center pb-0 fs-4" style="color: #FF5C00 ;">Bem vindo Dev</h5>
                                    <p class="text-center small">Agora é só fazer seu cadastro</p>
                                </div>

                                <form class="row g-3 needs-validation" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="col-12">
                                        <label for="" class="form-label">Nome</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            {{--                                            <div class="invalid-feedback">Por favor, insira seu e-mail!</div>--}}

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">E-mail</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="yourUsername" value="{{ old('email') }}" required>
                                            <input type="hidden" name="user_type" value="1">
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
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required autocomplete="new-password">
{{--                                        <div class="invalid-feedback">Por favor, insira sua senha!</div>--}}
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Confirme a senha</label>
                                        <input type="password" name="password_confirmation" class="form-control" required autocomplete="new-password">
                                    </div>

                                    <div class="col-12">
                                        <button class="btn w-100" style="background-color: #FF5C00 ; color: #ffffff;" type="submit">Cadastre-se</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
