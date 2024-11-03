<h1>Our first page</h1>

{{5+2}}

<br>
<br>
<br>

{{"Hello World"}}

{!!"<h1>Hello World</h1>"!!}
<br>
<br>
@php
    $users = ["Prantha Debonath","Jyotirmay","Shahid kapoor"];
@endphp
<ul>
@foreach ($users as $user)
   <li>{{$user}}</li> 
@endforeach
</ul>
<br>
<br>
<a href="{{route('about')}}">About</a>
<br>
<a href="/post">Post</a>