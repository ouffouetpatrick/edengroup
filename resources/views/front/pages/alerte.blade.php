@if(session()->has('Ok'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        {{ session('Ok') }}.
    </div>
@elseif(session()->has('No'))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        {{ session('No') }}
    </div>
@elseif(session()->has('Info'))
    <div class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        {{ session('Info') }}.
    </div>
@endif