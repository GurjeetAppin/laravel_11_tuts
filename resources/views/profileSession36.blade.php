<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profile Page</h1>
   <!-- To check the session is created or not -->
    @if(session('user'))
        <h5>User session name :- {{session('user')}}</h5>
    @else
        <h5>No session found <a href="{{url('loginSession36')}}">Login</a></h5>
    @endif

    <a href="{{url('session36logout')}}">Logout</a>
</body>
</html>