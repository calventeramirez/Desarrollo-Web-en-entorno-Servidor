<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipo Ticket</title>
</head>
<body>
    <h1>Indice Tipo Ticket</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipos</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($tipostickets as $tipoticket)
                <tr>
                    <td>{{ $tipoticket -> id }}</td>
                    <td>{{ $tipoticket -> type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>