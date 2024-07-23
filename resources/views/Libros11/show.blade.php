<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libro</title>
</head>
<body>

    <h1>{{ $libros->titulo }}</h1>
    <p><strong>Código:</strong> {{ $libros->codigo }}</p>
    <p><strong>ISBN:</strong> {{ $libros->isbn }}</p>
    <p><strong>Editorial:</strong> {{ $libros->editorial }}</p>
    <p><strong>Páginas:</strong> {{ $libros->paginas }}</p>
    <a href="{{ route('libros.edit', $libros->id) }}">Editar</a>
    <a href="{{ route('libros.index') }}">Volver</a>

</body>
</html>
