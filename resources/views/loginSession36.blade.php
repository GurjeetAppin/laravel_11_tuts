<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>
    <form action="{{url('loginSession')}}" method="post">
        @csrf
        <input type="text" name="user" id=""><br><br>
        <input type="password" name="password" id=""><br><br>
        <button>Login</button>
    </form>
    
</body>
</html>