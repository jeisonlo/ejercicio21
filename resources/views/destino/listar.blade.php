<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de destinos</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Lista de destinos</h1>

    @foreach ($des as $destino)
    <tr>
        <td>{{ $destino->nombre }}</td>
        <td>{{ $destino->otrosdatos }}</td>
        
        
        <td><a href="{{ route('destino.show', $destino->id) }}">Detalle</a></td>
        <td><a href="{{ route('destino.edit', $destino->id) }}">Editar</a></td>
        <form action="{{ route('destino.destroy', $destino->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
    </tr>
    @endforeach
   
</body>
</html>