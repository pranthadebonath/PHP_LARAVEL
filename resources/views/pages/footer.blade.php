<h1>Footer Page</h1>
<br>
@foreach ($names as $n)
<p>{{$n}}</p>
@endforeach
<br>
<br>
@forelse ($names as $n)
 <p>{{$loop->iteration}}--{{$n}}</p>
@empty
    <p>This list is Empty</p>
@endforelse
