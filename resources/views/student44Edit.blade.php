<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Data</h1>
    <form action="{{url('edit_student',$studentData->id)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" id="" value="{{$studentData->name}}">
        <input type="text" name="batch" id="" value="{{$studentData->batch}}">
        <input type="submit" name="submit" value="Update Records" id="">
        <a href="">Cancel</a>
    </form>
</body>
</html>