@include('template.header')

<x-navbar/>


<h1>Products Details</h1>
<img src="{{$product->image}}">
<p>Product name: {{$product->name}}</p>
<p>Product qty available: {{$product->qty}}</p>
<p>Product price: {{$product->price}}</p>

<h2>Featured Products: </h2>
<x-products :products="$products"/>
@include('template.footer')