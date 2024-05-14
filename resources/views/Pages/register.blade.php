@include('template.header')

<h1>Register page</h1>
@if($errors)
        @foreach($errors->all() as $err)
            <div class="alert alert-danger">
                {{$err}}
            </div>
        @endforeach
    @endif
<div class="container-fluid">
<form action='{{route('registerPost')}}' method='post'>
  @csrf
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control is-notvalid" name="name" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Confirm Password</label>
    <input type="password" class="form-control" name="password_confirmation" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@include('template.footer')