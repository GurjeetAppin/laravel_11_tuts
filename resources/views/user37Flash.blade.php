<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Flash session</h1>
    {{session('message')}}
    {{session()->reflash()}} <!-- To hold the session message -->
    {{session()->keep(['name'])}} <!-- To hold the spacific session message with keep() function -->
    <form action="{{url('addFlashUser')}}" method="post">
        @csrf
        <input type="text" name="username" id=""><br><br>
        <input type="email" name="email" id=""><br><br>
        <input type="text" name="phone" id=""><br><br>
        <button>Add new user</button>
    </form>
</body>
</html>