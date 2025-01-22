<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Add</title>
</head>
<body>
    <h1>Add new student</h1>
    <form action="{{url('add_student_41')}}" method="post">
        @csrf
        <input type="text" name="name" id=""><br>
        <input type="email" name="email" id=""><br>
        <input type="text" name="batch" id=""><br>
        <button>Add Student</button>
    </form>
</body>
</html>