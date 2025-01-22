<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Student</title>
    <style>
        .w-5,.h-5{
            width: 20px;
        }
    </style>
</head>
<body>
    <h1>List Student</h1>
    <div style="margin-bottom: 1%;">
    <form action="{{url('search')}}" method="get">
        <input type="text" name="search" value="{{@$serach}}"placeholder="Search students" id="">
        <button>Search</button>
    </form>
    </div>
    <form action="delete_multi" method="post">
        @csrf
        <button>Delete</button><br />
    <table border="1px">
        <thead>
            <tr>
                <td>Section</td>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Batch</td>
                <td>Created AT</td>
                <td>Operation</td>
            </tr>
        </thead>
        <tbody>
            @foreach($studentdata as $student)
                <tr>
                    <td><input type="checkbox" name="ids[]" id="" value="{{$student->id}}" /></td>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->batch}}</td>
                    <td>{{$student->created_at}}</td>
                    <td>
                        <a class="btn btn-success" href="{{url('edit',$student->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{url('delete',$student->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </form>
    <br>
    <br>
    {{$studentdata->links()}}
</body>
</html>