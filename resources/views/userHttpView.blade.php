<div>
    <h1>Http User Data</h1>    
    <!-- {{print_r($response)}} -->

    <ul>
        <li>
            <span>Name :- <span><b>{{$response->name}}</b></span></span>
        </li>
        <li>
            <span>User Name :- <span><b>{{$response->username}}</b></span></span>
        </li>
        <li>
            <span>Email :- <span><b>{{$response->email}}</b></span></span>
        </li>
        <li>
            <span>Website :- <span><b>{{$response->website}}</b></span></span>
        </li>
        <li>
            <span>Phone no :- <span><b>{{$response->phone}}</b></span></span>
        </li>
    </ul>
</div>
