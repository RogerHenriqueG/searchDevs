<!DOCTYPE html>
@extends('layouts.app')

@include('layouts.nav')

@include('layouts.user.sidebar')

@section('content')
    <main id="main" class="main">

{{--        @dd(auth()->user()->user_type)--}}

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

            </div>
        </section>

{{--        <div class="modal fade p-0" id="usertypeModal" tabindex="-1" aria-hidden="true" data-keyboard="false" role="dialog" style="display: block;" data-backdrop="static" [config]="{backdrop: 'static', keyboard: false}">--}}
{{--            <div class="modal-dialog" role="document" style="left: 0px; right: 0px;">--}}
{{--                <div class="modal-content" style="border-radius: 20px">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h5 class="modal-title" id="exampleModalLabel">Confirme o código enviado por whatsapp para e adicione o nome de sua empresa.</h5>--}}
{{--                        --}}{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">--}}
{{--                        --}}{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        --}}{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <form action="" method="post" class="form_submit">--}}
{{--                        @csrf--}}
{{--                        <div class="modal-body">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="">Código de validação *</label>--}}
{{--                                <input placeholder="######" type="number" name="code" class="form-control validate" required>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="">Nome da empresa *</label>--}}
{{--                                <input placeholder="" type="text" name="name" class="form-control" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="modal-footer">--}}
{{--                            <button type="submit" id="confirm" disabled class="btn btn-primary disabled submit">Validar e salvar</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </main><!-- End #main -->
@endsection
