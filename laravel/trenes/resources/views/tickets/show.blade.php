<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="container">
        <h2>Ver Tickets</h2>
        <table class="table table-primary table-hover">
            <thead class="table table-dark">
                <tr>
                    <th>Fecha del ticket</th>
                    <th>Precio</th>
                    <th>Tren</th>
                    <th>Tipo de ticket</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $ticket -> date }}</td>
                    <td>{{ $ticket -> price }}</td>
                    <td>{{ $ticket -> train_id }}</td>
                    <td>{{ $ticket -> ticket_type_id }}</td>
                </tr>
            </tbody>
        </table>
        <div class="mt-2 mb-2">
            <a href="{{ route('tickets.index') }}">
                <button class="btn btn-success">Ir a tickets</button>
            </a>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>