<table border="1" class="table table-hover">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Verified at</th>
        <th>Password</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->email_verified_at}}</td>
        <td>{{$user->password}}</td>
    </tr>
    @endforeach
</table>