<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Plato</title>
</head>
<body>
    <h1>Crear Plato</h1>
    {{-- Usando en cmd, php artisan route:list, vemos la ruta de store --}}
    <form action="{{route('platos.store')}}" method="post">
        {{-- Laravel nos obliga a poner esto como proteccion ante atqs --}}
        @csrf

        <label>Nombre: </label>
        <input type="text" name="nombre"><br><br>
        <label>Precio: </label>
        <input type="text" name="precio"><br><br>
        <label>Tipo: </label>
        <select name="tipo">
            <option value="Racion">Ración</option>
            <option value="Media Racion">Media Ración</option>
            <option value="Tapa">Tapa</option>
        </select>
        <br><br>
        <input type="submit" value="Crear">
    </form>
    
</body>
</html>