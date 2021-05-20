@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('content')

    <!-- Page Content -->
    <div class="content">

        <!--Sucesso-->
        @include('layouts.success')

        <div class="row">
            <div class="col-6 col-lg-2">
                <a class="block block-rounded block-link-shadow text-center" href="{{ route('product.create') }}">
                    <div class="block-content bg-flat">
                        <div class="font-size-h2 text-white">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                    <div class="block-content py-2 bg-flat">
                        <p class="font-w600 font-size-sm text-white mb-0">
                            Adicionar novo registro
                        </p>
                    </div>
                </a>
            </div>
            @if(Request::is('*off'))
            <div class="col-6 col-lg-2">
                <a class="block block-rounded block-link-shadow text-center" href="{{ route('product.index') }}">
                    <div class="block-content bg-success">
                        <div class="font-size-h2 text-white">
                            <i class="fa fa-toggle-on"></i>
                        </div>
                    </div>
                    <div class="block-content py-2 bg-success">
                        <p class="font-w600 font-size-sm text-white mb-0">
                            Produtos Ativos
                        </p>
                    </div>
                </a>
            </div>
            @else
            <div class="col-6 col-lg-2">
                <a class="block block-rounded block-link-shadow text-center" href="{{ route('product.off') }}">
                    <div class="block-content bg-danger">
                        <div class="font-size-h2 text-white">
                            <i class="fa fa-toggle-off"></i>
                        </div>
                    </div>
                    <div class="block-content py-2 bg-danger">
                        <p class="font-w600 font-size-sm text-white mb-0">
                            Produtos Inativos
                        </p>
                    </div>
                </a>
            </div>
            @endif
        </div>

        <!-- Dynamic Table with Export Buttons -->
        <div class="block block-rounded block-themed">
            <div class="block-header bg-modern-dark">
                <h3 class="block-title">LISTAGEM DE PRODUTOS</h3>
            </div>
            <div class="block-content block-content-full">

                @if (count($products) === 0)

                <br>
                <div class="alert alert-info alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <p class="mb-0"><b>OPS!!!</b> Nenhum registro encontrado!</p>
                </div>
                @else

                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-sm table-hover table-vcenter">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center" style="width: 8%;">Status</th>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th style="width: 5%;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="text-center font-w600 font-size-sm">
                                    @if($product->status === 1) <span class="badge badge-success">ON</span> @else <span class="badge badge-danger">OFF</span> @endif
                                </td>
                                <td class="font-w600 font-size-sm">
                                    <a href="{{ route('product.edit', $product->id) }}">{{ $product->name }}</a>
                                </td>
                                <td class="font-w600 font-size-sm">
                                    {{ $product->cat_name }}
                                </td>

                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('product.edit', $product->id) }}" type="button"
                                            class="btn btn-sm btn-light" data-toggle="tooltip"
                                            title="Editar {{ $product->name }}">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                        <a href="javascript:;" data-toggle="modal" onclick="deleteData({{ $product->id }})"
                                            data-target="#DeleteModal" class="btn btn-sm btn-light"
                                            title="Remover {{ $product->name }}"><i class="fa fa-fw fa-times"></i></a>
                                        <div id="DeleteModal" class="modal fade " tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <form action="{{ route('product.destroy', $product->id) }}"
                                                    id="deleteForm" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger">
                                                            <h5 class="text-white modal-title mt-0" id="myLargeModalLabel">
                                                                <i class='fas fa-exclamation-circle'></i> CUIDADO!</h5>
                                                            <button type="button" class="close text-white" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <p class="text-center">Tem certeza de que deseja excluir?</p>
                                                        </div>
                                                        <div class="modal-footer ">
                                                            <button type="button" class="btn btn-success"
                                                                data-dismiss="modal">Cancelar</button>
                                                            <button type="submit" name="" class="btn btn-danger"
                                                                data-dismiss="modal" onclick="formSubmit()">Sim,
                                                                excluir.</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
                <div class="block-content">
                        {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->
    <!--MODAL-->
    <script type="text/javascript">
        function deleteData(id) {
            var id = id;
            var url = '{{ route('product.destroy', ':id') }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }

    </script>

@endsection
