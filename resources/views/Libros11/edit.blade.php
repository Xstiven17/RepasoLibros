<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Libro</title>
</head>
<body>
    
    <h1>Editar Libro</h1>
    <form action="{{ route('libros.update', $libros->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" value="{{ $libros->codigo }}" required>
        <br>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="{{ $libros->titulo }}" required>
        <br>
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" value="{{ $libros->isbn }}" required>
        <br>
        <label for="editorial">Editorial:</label>
        <input type="text" id="editorial" name="editorial" value="{{ $libros->editorial }}" required>
        <br>
        <label for="paginas">Páginas:</label>
        <input type="text" id="paginas" name="paginas" value="{{ $libros->paginas }}" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('libros.index') }}">Volver</a>

</body>
</html>
