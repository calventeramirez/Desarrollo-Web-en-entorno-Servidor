<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="container">
        <h2>Ver Trenes</h2>
        <table class="table table-primary table-hover">
            <thead class="table table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Pasajeros</th>
                    <th>Año</th>
                    <th>Tipo de tren</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $train -> name }}</td>
                    <td>{{ $train -> passengers }}</td>
                    <td>{{ $train -> year }}</td>
                    <td>{{ $train -> train_type_id }}</td>
                </tr>
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>