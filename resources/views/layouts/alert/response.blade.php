@if(Session::has('primary'))
<div class="alert bg-primary alert-primary text-white" role="alert">
    {{ session('primary') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="ik ik-x"></i>
    </button>
</div>
@endif

@if(Session::has('default'))
<div class="alert bg-secondary alert-secondary text-white alert-dismissible fade show" role="alert">
    {{ session('default') }}

</div>
@endif

@if(Session::has('success'))
<div class="alert bg-success alert-success text-white alert-dismissible fade show" role="alert">
    {{ session('success') }}

</div>
@endif

@if(Session::has('danger'))
<div class="alert bg-danger alert-danger text-white alert-dismissible fade show" role="alert">
    {{ session('danger') }}

</div>
@endif

@if(Session::has('warning'))
<div class="alert bg-warning alert-warning text-white alert-dismissible fade show" role="alert">
    {{ session('warning') }}

</div>
@endif

@if(Session::has('info'))
<div class="alert bg-info alert-info text-white alert-dismissible fade show" role="alert">
    {{ session('info') }}

</div>
@endif

@if(Session::has('message'))
    <div class="alert bg-info alert-info text-white alert-dismissible fade show" role="alert">
        {{ session('message') }}

    </div>
@endif

