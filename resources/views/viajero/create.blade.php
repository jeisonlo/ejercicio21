<form action="{{ route('viajero.store') }}" method="POST">
    @csrf

    <label>
        NDI:
        <br>
        <input type="text" name="ndi">
    </label>

    <br>
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre">
    </label>

    <br>
    <label>
        Dirección:
        <br>
        <input type="text" name="direccion">
    </label>

    <br>
    <label>
        Teléfono:
        <br>
        <input type="text" name="telefono">
    </label>

    <br><br>
    <button type="submit">Enviar Formulario</button>
</form>
