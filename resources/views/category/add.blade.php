@extends('layouts.app')

@section('title', 'Cadastrar Categoria')

@section('content')

    <!-- Page Content -->
    <div class="content">

        <!-- Erro -->
        @include('layouts.error')

        <!-- Info -->
        <div class="block block-rounded block-themed">
            <div class="block-header bg-modern-dark">
                <h3 class="block-title">Cadastrar Categoria</h3>
            </div>
            <div class="block-content">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-12">
                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="one-ecom-product-name">Nome:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-success">Cadastrar</button>
                                <a href="{{ route('category.index') }}" type="button" class="btn btn-alt-info">Voltar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Info -->

    </div>
    <!-- END Page Content -->

@endsection
