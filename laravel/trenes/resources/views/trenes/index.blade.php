<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trenes</title>
</head>
<body>
    <h1>Indice Trenes</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Pasajeros</th>
                <th>Año</th>
                <th>Tipo de tren</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($trenes as $tren)
                <tr>
                    <td>{{ $tren -> name }}</td>
                    <td>{{ $tren -> passengers }}</td>
                    <td>{{ $tren -> year }}</td>
                    <td>{{ $tren -> train_type_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>