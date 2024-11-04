@php
    $users = ["Prantha Debonath","Jyotirmay","Shahid kapoor","Nirob Kumar","Dipu kumar","Hridoy Borman"];
    $dept = ["CSE","EEE","ME","FE","CE","TE"];
    $val=true;
@endphp
@include('pages.header',['names'=> $dept])

@includeIf('pages.something')
{{-- This includeif check first the path, is there any file exist on this path.
if exist then include it, otherwise not--}}

@includeWhen($val,'about')
{{-- This includeWhen check first the condition, is there have true value then 
include it, otherwise not--}}
<br>
<br>
@includeUnless(empty($dept),'post' )
{{-- This includeUnless check first the condition, is there have false value then 
include it, otherwise not--}}
<br>
<br>
<ul>
@foreach ($users as $user)
   <li>{{$loop->index}}-{{$user}}</li> 
@endforeach

<br>
<br>
@foreach ($users as $user)
   <li>{{$loop->iteration}}-{{$user}}</li> 
@endforeach

<br>
<br>
@foreach ($users as $user)
<li>{{$loop->count}}</li>
@endforeach

<br>
<br>
@foreach ($users as $user)
  @if ($loop->first)
  <li style="color:red">{{$loop->iteration}}-{{$user}}</li> 
  @elseif($loop->last)
  <li style="color:green">{{$loop->iteration}}-{{$user}}</li> 
  @else
  <li>{{$loop->iteration}}-{{$user}}</li>
  @endif
@endforeach

<br>
<br>
@foreach ($users as $user)
  @if ($loop->even)
  <li style="color:red">{{$loop->iteration}}-{{$user}}</li> 
  @elseif($loop->odd)
  <li style="color:green">{{$loop->iteration}}-{{$user}}</li> 
  @endif
@endforeach
</ul>

<br>
@include('pages.footer',['names'=> $users])