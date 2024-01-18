<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipo Trenes</title>
</head>
<body>
    <h1>Indice Tipo Trenes</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipos</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($tipotrenes as $tipotren)
                <tr>
                    <td>{{ $tipotren -> id }}</td>
                    <td>{{ $tipotren -> type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>