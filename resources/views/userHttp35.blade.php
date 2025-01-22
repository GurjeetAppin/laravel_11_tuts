<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('user_form')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter name" id=""><br /><br />
        <input type="password" name="password" placeholder="Enter password" id=""><br /><br />
        <button>Login</button>
    </form>
</body>
</html>