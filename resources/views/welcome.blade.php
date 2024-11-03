@php
    $users = ["Prantha Debonath","Jyotirmay","Shahid kapoor","Nirob Kumar","Dipu kumar","Hridoy Borman"];
    $dept = "CSE";
@endphp
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