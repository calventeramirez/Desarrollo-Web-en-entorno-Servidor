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
            @foreach($platos as $plato)
                {{-- aqui html sin mas --}}
                <tr>
                    <td> {{ $plato -> nombre }}</td>
                    <td> {{ $plato -> precio }}</td>
                    <td> {{ $plato -> tipo_plato -> tipo}}</td>
                    <td>
                        <form action="{{ route('platos.show', ['plato'=>$plato->id])}}" 
                        method="get">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('platos.edit', ['plato'=>$plato->id])}}"
                            method="get">
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('platos.destroy', ['plato'=>$plato->id])}}"
                            method="post">
                            {{-- Laravel no deja completar un formulario con post
                                sin poner esto --}}
                            @csrf
                            {{ method_field('DELETE')}}
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
                @endforeach   

        </tbody>
    </table>
</body>
</html>