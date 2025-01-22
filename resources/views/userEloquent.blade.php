<table border="1px solid">
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <tbody>
        @foreach($response as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
