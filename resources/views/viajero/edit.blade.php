<form action="{{ route('viajero.update', $viajero) }}" method="POST">
    @csrf
    @method('put')

    <label>
        NDI:
        <br>
        <input name="ndi" type="text" value="{{ old('ndi', $viajero->ndi) }}">
    </label>
    <br>

    <label>
        Nombre:
        <br>
        <input name="nombre" type="text" value="{{ old('nombre', $viajero->nombre) }}">
    </label>
    <br>

    <label>
        Dirección:
        <br>
        <input name="direccion" type="text" value="{{ old('direccion', $viajero->direccion) }}">
    </label>
    <br>

    <label>
        Teléfono:
        <br>
        <input name="telefono" type="text" value="{{ old('telefono', $viajero->telefono) }}">
    </label>
    <br>

    <button type="submit">Actualizar</button>
</form>
