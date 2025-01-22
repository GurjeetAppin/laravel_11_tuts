<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <style>
        .footer p{
            position : absolute;
            bottom : 0;
            background-color : skyblue;
            width: 100%;
            margin : 0;
            padding : 10px;
            text-align : center;
        }

        ul li{
            display : inline; 
        }

        li a {
            text-decoration : none;
        }
    </style>
</head>
<body>
    <div class="header">
        <ul>
            <li><a href="">Home Page</a></li>
            <li><a href="">About Page</a></li>
            <li><a href="">Login Page</a></li>
            <li><a href="">Contact Page</a></li>
        </ul>
    </div>
    {{$main}}
    <div class="footer">
        <p>Footer Page</p>
    </div>
</body>
</html><div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div>
