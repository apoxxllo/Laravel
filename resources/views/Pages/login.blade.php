@include('template.header')

<h1>Login page</h1>
<div class="container-fluid">
    <form action="/loginPost" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div>
            <label for="exampleInputEmail1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

@include('template.footer')