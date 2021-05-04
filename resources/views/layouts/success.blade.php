@if(Session::has('mensagem_ok'))
    <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="alert-heading h4 my-2">Sucesso!</h3>
        <p class="mb-0">{{ Session::get('mensagem_ok') }}</p>
    </div>
@endif

@if(Session::has('mensagem_destroy'))
    <div class="alert alert-danger alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="alert-heading h4 my-2">Sucesso!</h3>
        <p class="mb-0">{{ Session::get('mensagem_destroy') }}</p>
    </div>
@endif
