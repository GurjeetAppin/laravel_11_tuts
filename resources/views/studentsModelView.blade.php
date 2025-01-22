<div>
    <!-- {{print_r($students)}} -->
     <table border="2">
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->batch}}</td>
            </tr>
        @endforeach
     </table>
</div>
