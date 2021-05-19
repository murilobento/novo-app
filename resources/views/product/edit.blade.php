@extends('layouts.app')

@section('title', 'Editar Produto')

@section('content')

    <!-- Page Content -->
    <div class="content">

        <!-- Erro -->
        @include('layouts.error')

        <!-- Info -->
        <div class="block block-rounded block-themed">
            <div class="block-header bg-modern-dark">
                <h3 class="block-title">Editar Produto</h3>
            </div>
            <div class="block-content">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-12">
                        <form action="{{ route('product.update', $product->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="one-ecom-product-name">Nome:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                            </div>
                            <div class="form-group">
                                <label for="one-ecom-product-description-short">Descrição:</label>
                                <textarea class="form-control" id="description" name="description" rows="4">{{ $product->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                <label for="one-ecom-product-category">Categoria:</label>
                                <select class="js-select2 form-control" id="cat_id"
                                    name="cat_id" style="width: 100%;">
                                    @foreach ($categories as $category)

                                        <option value="{{ $category->id }}"
                                            @if($product->cat_id==$category->id) selected="selected" @endif>{{ $category->name }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="one-ecom-product-price">Preço:</label>
                                    <input type="text" class="form-control" id="price"
                                        name="price" value="{{ $product->price }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="one-ecom-product-stock">Estoque:</label>
                                    <input type="number" class="form-control" id="qtd"
                                        name="qtd" value="{{ $product->qtd }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Imagem do Produto:</label>
                                    <div class="custom-file">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file" class="custom-file-input" data-toggle="custom-file-input"
                                            id="image" name="image" value="foto">
                                        <label class="custom-file-label" for="example-file-input-custom">Escolha o arquivo...</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status do produto</label>
                                   <!-- <input type="checkbox" class="custom-control-input" id="status" name="status" >
                                    <label class="custom-control-label" for="status"></label> -->
                                @if($product->status==1)
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="statusON" name="status" checked="" value="1">
                                    <label class="custom-control-label" for="statusON">ON</label>

                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="statusOFF" name="status" value="0">
                                    <label class="custom-control-label" for="statusOFF">OFF</label>

                                </div>
                                @elseif ($product->status==0)
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="statusON" name="status" value="1">
                                    <label class="custom-control-label" for="statusON">ON</label>

                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="statusOFF" name="status" checked="" value="0">
                                    <label class="custom-control-label" for="statusOFF">OFF</label>

                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-success">Cadastrar</button>
                                <a href="{{ route('product.index') }}" type="button" class="btn btn-alt-info">Voltar</a>
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
