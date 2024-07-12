<form action="{{ route('destino.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>
        <br>
        Nombre:
        <br>
        <input type="text" name="nombre">
    </label>

    <br>
    <label>
        Otros Datos:
        <br>
        <input type="text" name="otrosdatos">
    </label>

    <br>
    <br><br>
    <button type="submit">Enviar Formulario</button>
</form>