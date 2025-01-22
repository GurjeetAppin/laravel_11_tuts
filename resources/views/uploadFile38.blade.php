<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upload file</h1>
    <form action="{{url('uploadFile')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="">
        <button>Upload file</button>
    </form>
    
</body>
</html>