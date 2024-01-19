<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipo Trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Indice Tipo Trenes</h1>
    <div class="mt-2 mb-2">
        <a href="{{ route('trains.index') }}">
            <button class="btn btn-success">Ir a trenes</button>
        </a>
    </div>
    <div class="mt-2 mb-2">
        <a href="{{ route('trainstype.index') }}">
            <button class="btn btn-success">Ir a tipo de trenes</button>
        </a>
    </div>
    <div class="mt-2 mb-2">
        <a href="{{ route('tickets.index') }}">
            <button class="btn btn-success">Ir a tickets</button>
        </a>
    </div>
    <div class="mt-2 mb-2">
        <a href="{{ route('ticketstype.index') }}">
            <button class="btn btn-success">Ir a tipo de tickets</button>
        </a>
    </div>
    <div class="container col-5">
        <table class="table table-primary table-hover">
            <thead class="table table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tipos</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainstype as $traintype)
                    <tr>
                        <td>{{ $traintype -> id }}</td>
                        <td>{{ $traintype -> type }}</td>
                        <td>
                            <form method="get" 
                            action="{{ route('trainstype.show', ['trainstype'=>$traintype->id])}}">
                                <input class="btn btn-primary" type="submit" value="Mostrar">
                            </form>
                        </td>
                        <td>
                            <form method="get" 
                            action="{{ route('trainstype.edit', ['trainstype'=>$traintype->id])}}">
                                <input class="btn btn-warning" type="submit" value="Editar">
                            </form>
                        </td>
                        <td>
                            <form method="post" 
                            action="{{ route('trainstype.destroy', ['trainstype'=>$traintype->id])}}">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input class="btn btn-danger" type="submit" value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-2 mb-2">
            <a href="{{ route('trainstype.create') }}">
                <button class="btn btn-success">Crear tipo de tren</button>
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>