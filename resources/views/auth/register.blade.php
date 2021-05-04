@extends('layouts.guest')

@section('title', 'Registrar')

@section('content')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="hero-static">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <!-- Sign Up Block -->
                        <div class="block block-rounded block-themed mb-0">
                            <div class="block-header bg-primary-dark">
                                <h2 class="block-title">PROJECT</h2>
                                <div class="block-options">
                                    <a class="btn-block-option" href="{{ route('login') }}" data-toggle="tooltip"
                                        data-placement="left" title="Logar no sistema">
                                        <i class="fa fa-sign-in-alt"></i>
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
                                        Por favor, preencha os dados abaixo.
                                    </p>

                                    <!-- Sign Up Form -->
                                    <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="py-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg form-control-alt"
                                                    id="name" name="name" placeholder="Nome completo" :value="old('name')"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-lg form-control-alt"
                                                    id="email" name="email" placeholder="Informe seu e-mail"
                                                    :value="old('email')" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-lg form-control-alt"
                                                    id="password" name="password" placeholder="Informe sua senha" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-lg form-control-alt"
                                                    id="password_confirmation" name="password_confirmation"
                                                    placeholder="Repita sua senha">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="signup-terms"
                                                        name="signup-terms" required>
                                                    <label class="custom-control-label font-w400" for="signup-terms">Eu
                                                        concordo com os <a href="javascript:void(0)" data-toggle="modal"
                                                            data-target="#one-signup-terms">Termos e condições</a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-xl-5">
                                                <button type="submit" class="btn btn-block btn-alt-success">
                                                    <i class="fa fa-fw fa-plus mr-1"></i> Cadastrar
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Sign Up Form -->
                                </div>
                            </div>
                        </div>
                        <!-- END Sign Up Block -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
    <!-- Terms Modal -->
    <div class="modal fade" id="one-signup-terms" tabindex="-1" role="dialog" aria-labelledby="one-signup-terms"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Terms &amp; Conditions</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                            luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis
                            tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti
                            vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                            luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis
                            tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti
                            vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                            luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis
                            tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti
                            vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                            luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis
                            tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti
                            vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                            luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis
                            tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti
                            vestibulum quis in sit varius lorem sit metus mi.</p>
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Terms Modal -->
@endsection
