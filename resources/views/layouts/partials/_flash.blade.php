@if(Session::has('message'))
    <p class="alert alert-success text-center">{{ Session::get('message') }}</p>
@endif
@if(Session::has('error'))
    <p class="alert alert-danger text-center">{{ Session::get('error') }}</p>
@endif