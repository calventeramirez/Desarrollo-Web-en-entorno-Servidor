<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Plato</title>
</head>
<body>
    <h1>Editar Plato</h1>
    {{-- Usando en cmd, php artisan route:list, vemos la ruta de store --}}
    {{-- El array de id, necesitamos pasarlo para indicar la informacion
        de la vista al controlador, indicando el id. En cmd de route:list
        vemos que el id se llama plato (viene indicado) asi que le cambiamos
        el nombre a 'plato' --}}
    <form action="{{route('platos.update', ['plato'=>$plato->id])}}" method="post">
        {{-- Laravel nos obliga a poner esto como proteccion ante atqs --}}
        @csrf

        {{-- Necesitamos decirle a laravel que aunque ponga
            method=post, se comporte como un put --}}
        {{ method_field('PUT') }}
        <label>Nombre: </label>
        <input type="text" name="nombre" value={{ $plato->nombre }}><br><br>
        <label>Precio: </label>
        <input type="text" name="precio" value={{ $plato->precio }}><br><br>
        <label>Tipo: </label>
        <select name="tipo">
            {{-- Para qiue salga indicado el tipo de option que tiene
                el plato que vamos a modificar. Hidden es para que salga
                una vez solamente --}}
            <option selected hidden value="{{ $plato->tipo }}">{{ $plato->tipo }}</option>
            <option value="Racion">Ración</option>
            <option value="Media Racion">Media Ración</option>
            <option value="Tapa">Tapa</option>
        </select>
        <br><br>
        <input type="submit" value="Editar">
    </form>  
</body>
</html>