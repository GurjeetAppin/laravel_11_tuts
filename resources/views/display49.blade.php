<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=t, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="upload49">Upload More Images</a><br><br>
    <table border="2px solid">
        <head>
            <tr>
                <th>Id</th>
                <th>Image</th>
            </tr>
        </head>
        <tbody>
            @foreach($images as $image)
            <tr>
                <td>{{$image->id}}</td>
                <td><img src="{{url('storage/'.$image->path)}}" width="100px" height="100px" alt="" srcset=""></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>