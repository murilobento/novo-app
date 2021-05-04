@extends('layouts.app')

@section('title', 'Meu Perfil')

@section('content')

    <!-- Page Content -->

    <div class="content content-full text-center">
        <div class="my-3">
            <img class="img-avatar img-avatar-thumb" src="{{ asset('media/avatars/avatar13.jpg') }}">
        </div>
        <h1 class="h2 mb-0">{{ Auth::user()->name }}
        </h1>
        <h2 class="h4 font-w400">
            {{ Auth::user()->email }}
        </h2>
        <a class="btn btn-info text-white" href="{{ route('dashboard') }}">
            <i class="fa fa-fw fa-arrow-left text-white"></i> Voltar ao Dashboard
        </a>
    </div>
    <div class="content content-boxed">

        <!-- User Profile -->

        <div class="block block-rounded">
            <div class="block-header">
                <h3 class="block-title">Perfil do usuário</h3>
            </div>
            <div class="block-content">
                <form method="POST" action="{{ route('user-profile-information.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="row push">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="one-profile-edit-name">Nome</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your name.." value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="one-profile-edit-email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your email.." value="{{ Auth::user()->email }}">
                            </div>
                            <!--
                    <div class="form-group">
                        <label>Sua foto</label>
                        <div class="push">
                            <img class="img-avatar" src="assets/media/avatars/avatar13.jpg" alt="">
                        </div>
                        <div class="custom-file">

                            <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="one-profile-edit-avatar" name="one-profile-edit-avatar">
                            <label class="custom-file-label" for="one-profile-edit-avatar">Trocar sua foto</label>
                        </div>
                    </div>
                    -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-primary">
                                    Atualizar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END User Profile -->

        <!-- Change Password -->
        <div class="block block-rounded">
            <div class="block-header">
                <h3 class="block-title">Mudar sua senha</h3>
            </div>
            <div class="block-content">

                <form method="POST" action="{{ route('user-password.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="row push">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="one-profile-edit-password">Senha atual</label>
                                <input type="password" class="form-control" id="current_password" name="current_password">
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="one-profile-edit-password-new">Nova senha</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="one-profile-edit-password-new-confirm">Confirme nova senha</label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-primary">
                                    Atualizar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Change Password -->

    </div>
    <!-- END Page Content -->
@endsection
