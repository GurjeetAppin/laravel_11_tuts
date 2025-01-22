<div>
    <h1>Home Url Generation</h1>
    <h3>{{URL::current()}}</h3> <!-- For get the current URL -->
    <h3>{{URL::full()}}</h3><!-- Get the full url form the web browser like :-  http://127.0.0.1:8000/home-url-generation?name=gurjeet -->
    <h3>{{url()->current()}}</h3>
    <h2>Previous URL</h2>
    <h3>{{URL::previous()}}</h3>
    <!-- <a href="/about-url-generation"> About URL</a> -->
    <a href="{{URL::to('about-url-generation')}}"> About URL</a><!-- Make link using laravel -->
    <a href="{{URL::to('about-url-generation', ['gurjeet'])}}"> Child Url :- {{URL::to('about-url-generation', ['gurjeet'])}}</a>
</div>
