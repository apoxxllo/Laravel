@include('template.header')
<div class="container-fluid">
    <h1>Add product</h1>
    @if($errors)
        @foreach($errors->all() as $err)
            <div class="älert alert-danger">
                {{$err}}
            </div>
        @endforeach
    @endif
    <form action="/add-product" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" value="{{old('name')}}" class="form-control" id="name" name="name" placeholder="Shuriken ni jared">
        </div>
        <div class="mb-3">
            <label for="qty" class="form-label">Quantity</label>
            <input type="number" value="{{old('qty')}}" class="form-control" id="qty" name="qty" placeholder="1">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number"  step=".01" value="{{old('price')}}" class="form-control" id="price" name="price" placeholder="42.20">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@include('template.footer')