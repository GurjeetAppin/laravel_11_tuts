<h1>Welcome Page</h1>
<a href="{{route('hm')}}">Name Route</a><br>

{{__('welcome.heading1')}}
<h2>{{__('welcome.subHeading')}}</h2>
<a href="/localization_about">{{__('welcome.about')}}</a></br>
<a href="/localization_home">{{__('welcome.home')}}</a></br>
<a href="/localization_contact">{{__('welcome.contact')}}</a></br>



<H3>Choose your language</H3>
<a href="{{url('setLang/en')}}">Select English</a></br>
<a href="{{url('setLang/hi')}}">Select Hindi</a></br>
<a href="{{url('setLang/ko')}}">Select Korean</a></br>


<h1>{{__('welcome.aboutName',["name" => "Gurjeet Singh"])}}</h1></br>


