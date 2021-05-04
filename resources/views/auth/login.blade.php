@extends('layouts.guest')

@section('title', 'Login')

@section('content')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="hero-static">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <!-- Sign In Block -->
                        <div class="block block-rounded block-themed mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">project</h3>
                                <div class="block-options">
                                    <a class="btn-block-option font-size-sm"
                                        href="{{ route('password.request') }} ">Esqueceu a
                                        senha?</a>
                                    <a class="btn-block-option" href="{{ route('register') }}" data-toggle="tooltip"
                                        data-placement="left" title="Criar nova conta">
                                        <i class="fa fa-user-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="block-content">


                                <div class="p-sm-3 px-lg-4 py-lg-5">
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissable" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h3 class="alert-heading h4 my-2">OPS!</h3>
                                            @foreach ($errors->all() as $error)
                                                <p class="mb-0">{{ $error }}</p>
                                            @endforeach
                                        </div>
                                    @endif
                                    <p class="text-muted">
                                        Bem-vindo! Por favor, preencha os dados abaixo.
                                    </p>

                                    <!-- Sign In Form -->
                                    <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="py-3">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-alt form-control-lg"
                                                    id="email" name="email" placeholder="Informe seu e-mail"
                                                    :value="old('email')" required autofocus>

                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-alt form-control-lg"
                                                    id="password" name="password" placeholder="Informe sua senha" required
                                                    autocomplete="current-password">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-xl-5">
                                                <button type="submit" class="btn btn-block btn-alt-primary">
                                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Entrar
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Sign In Form -->
                                </div>
                            </div>
                        </div>
                        <!-- END Sign In Block -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
