<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Tren</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="mt-2 mb-2">
        <a href="{{ route('trains.index') }}">
            <button class="btn btn-success">Ir a trenes</button>
        </a>
    </div>
    <form method="post" action="{{ route('trains.store') }}">    
        @csrf
        <label>Nombre: </label>
        <input type="text" name="name">
        <label>Pasajeros: </label>
        <input type="number" step="1" name="passengers">
        <label>Año: </label>
        <input type="number" step="1" name="year">
        <label>Tipo: </label>
        <select name="train_type_id">
            <option value="1">Cercanías</option>
            <option value="2">Media Distancia</option>
            <option value="3">Alta Velocidad</option>
        </select>
        <br><br>
        <input type="submit" value="Crear">
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>