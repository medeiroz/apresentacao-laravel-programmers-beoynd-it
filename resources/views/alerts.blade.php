@if ($errors->any())
    {!!  implode('', $errors->all('<div class="alert alert-danger" role="alert">:message <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>')) !!}
@endif


