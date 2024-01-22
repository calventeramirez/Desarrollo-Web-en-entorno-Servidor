<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="container">
        <div class="mt-2 mb-2">
            <a href="{{ route('trains.index') }}">
                <button class="btn btn-success">Ir a trenes</button>
            </a>
        </div>
        <br>
        <h2>Editar Trenes</h2><br>
        <form method="post" action="{{route('trains.update', ['train'=>$train->id])}}"> 
            @csrf
            {{ method_field('PUT') }}
            <label class="form-label">Nombre: </label>
            <input type="text" name="name" class="form-control" value="{{ $train -> name }}">
            <label class="form-label">Pasajeros: </label>
            <input type="number" class="form-control" step="1" name="passengers" value="{{ $train -> passengers }}">
            <label class="form-label">Años: </label>
            <input type="number" class="form-control" step="1" name="year" value="{{ $train->year }}">
            <label class="form-label">Tipo: </label>
            <select name="train_type_id" class="form-select">
                @foreach ($typeTrains as $type)
                    <option value = "{{$type -> id}}">{{ $type -> type }}</option>
                @endforeach
            </select>
            <input class="btn btn-success" type="submit" value="Editar">
        </form>
        <br>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>