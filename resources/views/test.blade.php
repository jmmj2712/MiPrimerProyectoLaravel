<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <h2><?php echo $name ?></h2>
    {{$name}}<br>
    {{$age}}<br>

    @if($name != "Manolo")
        <h4>Tu nombre no es Manolo</h4>
    @else 
        <h4>Tu nombre es Manolo</h4>
    @endif

    <ul>
    @foreach ([1,2,3,4,5] as $item)
       <li>{{ $item }}</li>
    @endforeach
    </ul>

    <a href="{{ route("prueba2") }}">Prueba 2</a>
</body>
</html>