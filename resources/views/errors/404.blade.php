@extends('layouts.app')

@section('title', 'Erro 404')

@section('content')

<!-- Page Content -->
<div class="hero">
    <div class="hero-inner text-center">
        <div class="bg-white">
            <div class="content content-full overflow-hidden">
                <div class="py-4">
                    <!-- Error Header -->
                    <h1 class="display-1 font-w600 text-city">404</h1>
                    <h2 class="h4 font-w400 text-muted mb-5">OPS! Está página não foi encontrada...</h2>
                    <!-- END Error Header -->
                </div>
            </div>
        </div>
        <div class="content content-full text-muted">
            <!-- Error Footer -->
            <p class="mb-1">
                Você gostaria de nos informar sobre isso?
            </p>


            <a class="link-fx" href="mailto:murilobento@gmail.com">Reportar</a> ou <a class="link-fx" href="{{ route('dashboard') }}">Voltar ao Dashboard</a>

            <!-- END Error Footer -->
        </div>
    </div>
</div>
<!-- END Page Content -->


@endsection
