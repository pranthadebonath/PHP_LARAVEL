{{--
<h1>Header Page</h1>

<br>
<br>
@forelse ($names as $n)
 <p>{{$loop->iteration}}-{{$n}}</p>
@empty
    <p>This list is Empty</p>
@endforelse --}}

    <header>
        <h1>Welcome to My Simple Page</h1>
        <nav>
            <ul>
                <li><a href="/simple_page">Home</a></li>
                <li><a href="/about-us">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>