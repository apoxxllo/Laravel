@include('template.header')



<h1>Products Details</h1>
<a href="/edit-product/{{$product->id}}" class="btn btn-primary">Edit product</a>
<img src="{{$product->image}}">
<p>Product name: {{$product->name}}</p>
<p>Product qty available: {{$product->qty}}</p>
<p>Product price: {{$product->price}}</p>

<h2>Featured Products: </h2>
<x-products :products="$products"/>
@include('template.footer')