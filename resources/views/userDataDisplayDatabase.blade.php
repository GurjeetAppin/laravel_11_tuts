<div>
    <h1>User data display</h1>
        <table border="2">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
            </tr>
            @foreach($users as $user)
                <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                </tr>
            @endforeach
        </table>
</div>
