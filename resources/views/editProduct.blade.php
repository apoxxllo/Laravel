@include('template.header')
<div class="container-fluid">
    <h1>Edit product</h1>
    @if($errors)
        @foreach($errors->all() as $err)
            <div class="alert alert-danger">
                {{$err}}
            </div>
        @endforeach
    @endif
    <form action="{{route('editPost', ['id' => $product->id])}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" value="{{old('name') ? old('name') : $product->name}}" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="qty" class="form-label">Quantity</label>
            <input type="number" value="{{old('qty') ? old('qty') : $product->qty}}" class="form-control" id="qty" name="qty" >
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number"  step=".01" value="{{old('price') ? old('price') : $product->price}}" class="form-control" id="price" name="price" >
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image">
        </div>
        <input type="number" name="id" id="productId" value="{{$product->id}}" readonly>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@include('template.footer')