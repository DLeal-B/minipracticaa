<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Artista</title>
</head>
<body>

    <h1>{{ $artista->nombre }}</h1>

<p>
    <strong>Nombre:</strong>
    {{ $artista->nombre }}
</p>

<p>
    <strong>País:</strong>
    {{ $artista->pais }}
</p>

<p>
    <strong>Biografía:</strong>
    {{ $artista->biografia }}
</p>

<p>
    <strong>Imagen:</strong>
    {{ $artista->imatge_url }}
</p>

<p>
    <strong>Activo:</strong>

    @if ($artista->activo)
        <span style="background-color: green; color: white; padding: 5px;">
                Actiu
            </span>
    @else
        <span style="background-color: gray; color: white; padding: 5px;">
                Inactiu
            </span>
    @endif
</p>

<br>

<a href="{{ route('artistas.index') }}">
    Tornar a la llista
</a>

<br><br>

<a href="{{ route('artistas.edit', $artista->id) }}">
    Editar
</a>

</body>
</html>
