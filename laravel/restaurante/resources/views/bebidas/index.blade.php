<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebidas</title>
</head>
<body>
    <h1>Este es el index de las bebidas</h1>
    
    <table>
        <thead>
            <tr>
                <td>Bebida</td>
                <td>Precio</td>
                <td>Cantidad</td>
            </tr>
        </thead>
        <tbody>
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