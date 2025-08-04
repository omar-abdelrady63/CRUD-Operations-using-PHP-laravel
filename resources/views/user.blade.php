<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome User <br>
    
    timestamp , {{time()}}  

    <?php
    $array = [
        "name" => "John Doe",
        "age" => 18
    ]
    ?>

    @foreach($array as $key => $value)
        <br>
        {{$key}} : {{$value}}
        @if($key == "age" && $value <= 18)
            <br>
            Teen
            @endif
    @endforeach

    <br>

    @for ($i = 0; $i < 10; $i++)
        {{$i}}
    @endfor
        

    @php
    dd($array);
    @endphp
   

    
    </h1>
</body>
</html>