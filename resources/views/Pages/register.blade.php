@include('template.header')

<h1>Register page</h1>
<!-- @if($errors)
        @foreach($errors->all() as $err)
            <div class="alert alert-danger">
                {{$err}}
            </div>
        @endforeach
    @endif -->
<div class="container-fluid">
<form action='{{route('registerPost')}}' method='post'>
  @csrf
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" value="{{old('name')}}" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name">
    <small class="text-danger">{{$errors->first('name')}}</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" name="password" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter password">
    <small class="text-danger">{{$errors->first('password')}}</small>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Confirm Password</label>
    <input type="password" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}" name="password_confirmation" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input value="{{old('email')}}" type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small class="text-danger">{{$errors->first('email')}}</small>

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@include('template.footer')