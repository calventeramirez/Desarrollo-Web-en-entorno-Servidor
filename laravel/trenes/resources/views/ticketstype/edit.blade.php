<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar tipo tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="container">
        <br>
        <h2>Editar tipo de tickets</h2><br>
        <form method="post" action="{{route('ticketstype.update', ['ticketstype'=>$ticketstype->id])}}"> 
            @csrf
            {{ method_field('PUT') }}
            <label class="form-label">Nombre: </label>
            <input type="text" name="type" class="form-control" value="{{ $ticketstype -> type }}">
            <input class="btn btn-success" type="submit" value="Editar">
        </form>
        <br>
        <div class="mt-2 mb-2">
            <a href="{{ route('ticketstype.index') }}">
                <button class="btn btn-success">Ir a tipo de tickets</button>
            </a>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>