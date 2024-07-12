<form action="{{ route('destino.update', $destino) }}" method="POST">
    @csrf
    @method('put')

    <label>
        Nombre:
        <br>
        <input name="nombre" type="text" value="{{ old('nombre', $destino->nombre) }}">
    </label>
    <br>

    <label>
        Otros Datos:
        <br>
        <input name="otrosdatos" type="text" value="{{ old('otrosdatos', $destino->otrosdatos) }}">
    </label>
    <br>

    <button type="submit">Actualizar</button>
</form>
