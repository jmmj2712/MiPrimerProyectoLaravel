<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prueba 2</h1>

    <ul>
    @foreach (['Carlo', 'Esteban', 'Pablo'] as $item)
    <li>{{ $item }}</li>
    @endforeach
    </ul>

    <a href="{{ route("test") }}">Volver</a>
</body>
</html>
    
