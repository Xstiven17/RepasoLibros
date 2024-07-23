<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Libro</title>
</head>
<body>
    <h1>Crear Libro</h1>

    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" required>
        <br>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <br>
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" required>
        <br>
        <label for="editorial">Editorial:</label>
        <input type="text" id="editorial" name="editorial" required>
        <br>
        <label for="paginas">Páginas:</label>
        <input type="text" id="paginas" name="paginas" required>
        <br>
        <button type="submit">Crear</button>
    </form>
    <a href="{{ route('libros.index') }}">Volver</a>

</body>
</html>
