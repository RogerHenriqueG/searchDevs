@extends('layouts.app')

@section('content')
    <main>
        <div class="container">



            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-8 d-flex flex-column align-items-center justify-content-center">
                            <div class="row">
                                <div class="col">
                                    <div class="card mb-3">

                                        <div class="card-body">

                                            <div class="pt-4 pb-2 text-center">
                                                <h5 class="card-title text-center pb-0 fs-4" style="color: #FF5C00 ;">Sou Desenvolvedor e quero prestar serviço</h5>
                                                <a href="{{ route('register.dev') }}" class="btn btn-secondary">Cadastre-se</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mb-3">

                                        <div class="card-body">

                                            <div class="pt-4 pb-2 text-center">
                                                <h5 class="card-title text-center pb-0 fs-4" style="color: #FF5C00 ;">Quero construir minha aplicação</h5>
                                                <a href="{{ route('register') }}" class="btn btn-secondary">Cadastre-se</a>
                                            </div>
                                        </div>
                                    </div>
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
