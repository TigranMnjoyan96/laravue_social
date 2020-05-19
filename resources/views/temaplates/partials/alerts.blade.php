@if(Session::has('info'))

    <div class="alert alert-warning" role="alert">
        {{Session::get('info')}}
    </div>
@endif
