<form action="{{ $action }}" method="POST">

    @csrf

    @if ($method === 'PUT')
        @method('PUT')
    @endif

    <div>
        <label for="nombre">Nombre:</label>

        <input
            type="text"
            id="nombre"
            name="nombre"
            value="{{ old('nombre', $artista->nombre ?? '') }}"
        >

        @error('nombre')
        <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label for="pais">País:</label>

        <input
            type="text"
            id="pais"
            name="pais"
            value="{{ old('pais', $artista->pais ?? '') }}"
        >

        @error('pais')
        <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label for="biografia">Biografía:</label>

        <textarea
            id="biografia"
            name="biografia"
        >{{ old('biografia', $artista->biografia ?? '') }}</textarea>

        @error('biografia')
        <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label for="imatge_url">URL de la imagen:</label>

        <input
            type="text"
            id="imatge_url"
            name="imatge_url"
            value="{{ old('imatge_url', $artista->imatge_url ?? '') }}"
        >

        @error('imatge_url')
        <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label for="activo">Activo:</label>

        <input type="hidden" name="activo" value="0">

        <input
            type="checkbox"
            id="activo"
            name="activo"
            value="1"
            {{ old('activo', $artista->activo ?? false) ? 'checked' : '' }}
        >

        @error('activo')
        <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <br>

    <button type="submit">
        Guardar
    </button>

</form>
