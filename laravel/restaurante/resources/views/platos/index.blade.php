<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platos</title>
</head>
<body>
    <h1>Este es el index de los platos</h1>
    <h2>{{ $mensaje }}</h2>
    
    <table>
        <thead>
            <tr>
                <td>Plato</td>
                <td>Precio</td>
                <td>Tipo</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($platos as $plato)
                <tr>
                    <td>{{ $plato[0] }}</td>
                    <td>{{ $plato[1] }}</td>
                    <td>{{ $plato[2] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>