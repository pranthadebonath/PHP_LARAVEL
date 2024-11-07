@php
    $user = "Prantha Debonath";
    $fruits = ["Apple","Orange","Banana"];
@endphp

<script>
    var data = @json($user);
    console.log(data);
    var data2 = @json($fruits);

    data2.forEach(function(entry){
        console.log(entry);
    });
</script>