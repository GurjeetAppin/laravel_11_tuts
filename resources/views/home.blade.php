<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <!-- <h1>Home Page :- {{$user}}</h1>
    <p>{{rand()}}</p>
    <p>Array values :- {{$users[1]}}</p>
    @if($user == 'Gurjeet Singh')
        <h2>This is {{$user}}</h2>
    @elseif($user == "Singh")
        <h2>This is Singh</h2>
    @else
        <h2>No name found</h2>
    @endif

    <div>
        @for($i = 0; $i <= 3; $i++)
        <h6>{{$i}}</h6>
        @endfor
    </div>

    <div>
        @foreach($users as $userName)
            <h6>{{$userName}}</h6>
        @endforeach
    </div> -->
    @include('common.header')
    <h1>Home Page</h1>
    @includeIf('common.inner', ['page' => 'This is home page'])
    <x-message-banner msg='User login Successfully' class="success" />
    <x-message-banner msg='User SignUp Successfully' class="success" />
    <br><br>
    <x-message-banner msg="Error message" class="error" />

    <style>
        .success{
            background-color:lightgreen; 
            padding:3px 10px'
        }

        .error{
            background-color:red; 
            padding:3px 10px;
            color:green;
        }
    </style>

</body>
</html>