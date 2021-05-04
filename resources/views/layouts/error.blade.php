@if($errors->any())
    <div class="alert alert-danger alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="alert-heading h4 my-2">ERRO!</h3>
        <p class="mb-0">
        @foreach ($errors->all() as $error)
            * {{ $error }}
        @endforeach
        </p>
    </div>
@endif
