<h1>Header Page</h1>

<br>
<br>
@forelse ($names as $n)
 <p>{{$loop->iteration}}-{{$n}}</p>
@empty
    <p>This list is Empty</p>
@endforelse