<table border="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Created at</th>
        <th>Image</th>
        <th>Action</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->qty}}</td>
        <td>{{$product->created_at}}</td>
        <td><img src="{{$product->image}}" alt=""> </td>
        <td><a href="/productDetails/{{$product->id}}">VIEW DETAILS</a></td>
    </tr>
    @endforeach
</table>