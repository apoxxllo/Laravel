@include('template.header')


<div class="container-fluid">
    <h1>Products list</h1>
    <a href="/add-product" class="btn btn-primary mb-3">Add New Product</a>
    <x-products :products="$products"/>

    <h1>All users</h1>
    <x-users :users="$users"/>
</div>

@include('template.footer')