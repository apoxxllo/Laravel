@include('template.header')

<x-navbar/>


<h1>Products list</h1>
<x-products :products="$products"/>

<h1>All users</h1>
<x-users :users="$users"/>


@include('template.footer')