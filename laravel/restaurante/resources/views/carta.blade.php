<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
</head>
<body>
    <h1>Este es el index de la carta</h1>
    
    <table>
        <thead>
            <tr>
                <td>Bebida</td>
                <td>Precio</td>
                <td>Cantidad</td>
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
            @foreach ($bebidas as $bebida)
                <tr>
                    <td>{{ $bebida[0] }}</td>
                    <td>{{ $bebida[1] }}</td>
                    <td>{{ $bebida[2] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>