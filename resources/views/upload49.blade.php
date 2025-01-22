<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <form action="uploadImage49" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="">
        <button>Upload</button>
    </form>
</body>
</html>