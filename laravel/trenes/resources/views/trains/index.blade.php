<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1>Indice Trenes</h1>
    <table class="table table-primary table-hover">
        <thead class="table table-dark">
            <tr>
                <th>Nombre</th>
                <th>Pasajeros</th>
                <th>Año</th>
                <th>Tipo de tren</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($trenes as $tren)
                <tr>
                    <td>{{ $tren -> name }}</td>
                    <td>{{ $tren -> passengers }}</td>
                    <td>{{ $tren -> year }}</td>
                    <td>{{ $tren -> train_type_id }}</td>
                    <td>
                        <form method="get" 
                        action="{{ route('trains.show', ['trenes'=>$tren->id])}}">
                            <input class="btn btn-secondary" type="submit" value="Mostrar">
                        </form>
                    </td>
                    <td>
                        <form method="get" 
                        action="{{ route('trains.edit', ['trenes'=>$tren->id])}}">
                            <input class="btn btn-success" type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form method="post" 
                        action="{{ route('trains.destroy', ['trenes'=>$tren->id])}}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-danger" type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>