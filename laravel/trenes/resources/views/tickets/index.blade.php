<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Indice Ticket</h1>
    <table class="table table-primary table-hover">
        <thead class="table table-dark">
            <tr>
                <th>Fecha</th>
                <th>Precio</th>
                <th>Tren</th>
                <th>Tipo de tren</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket -> date }}</td>
                    <td>{{ $ticket -> price }}</td>
                    <td>{{ $ticket -> train_id }}</td>
                    <td>{{ $ticket -> ticket_type_id }}</td>
                    <td>
                        <form method="get" 
                        action="{{ route('tickets.show', ['ticket'=>$ticket->id])}}">
                            <input class="btn btn-primary" type="submit" value="Mostrar">
                        </form>
                    </td>
                    <td>
                        <form method="get" 
                        action="{{ route('tickets.edit', ['ticket'=>$ticket->id])}}">
                            <input class="btn btn-warning" type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form method="post" 
                        action="{{ route('tickets.destroy', ['ticket'=>$ticket->id])}}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-danger" type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-2 mb-2">
        <a href="{{ route('tickets.create') }}">
            <button class="btn btn-success">Crear ticket</button>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>