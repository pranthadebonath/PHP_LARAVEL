@extends('layouts.masterLayout')

@section('content')
    <h2>Contact Page</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis voluptatibus nam tenetur blanditiis possimus est aperiam, quia voluptates molestias ad laudantium numquam facere asperiores enim! Odio molestiae, dolorum vero, dignissimos fuga similique incidunt itaque accusamus ratione dolorem laboriosam voluptatibus in nulla voluptatum commodi earum eaque repellat sunt sit iste nam placeat id non quos? Non facere fugiat perspiciatis qui esse tempora voluptate. Dolor illo iste rem nesciunt aut? Accusamus incidunt architecto placeat tenetur praesentium ad porro, distinctio aut, quisquam magni totam. Eos quod quo dolorum unde dicta, asperiores consequuntur perferendis amet expedita quia officia nemo quas, atque aperiam nihil iusto!</p>
@endsection
@section('title')
Contact    
@endsection

@section('sidebar')
    @parent {{--after giving this parent tag ,the s
    ection will include the previous content of this section.--}}
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Nobis, quos quaerat illum quibusdam error vero repellendus praesentium 
        architecto non maxime reiciendis quia reprehenderit facilis qui fugit iure 
        similique numquam.</p>
@endsection