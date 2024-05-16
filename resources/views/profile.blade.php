
@include('template.header')
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

<div class="container-fluid">
    <h1>Profile</h1>
</div>

@include('template.footer')