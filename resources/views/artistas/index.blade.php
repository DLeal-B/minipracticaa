<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Artistes</title>
</head>
<body>

<h1>Artistes</h1>

<br><br>

<table border="1">
    <thead>
    <tr>
        <th>Nom</th>
        <th>País</th>
        <th>Actiu</th>
        <th>Accions</th>
    </tr>
    </thead>

    <tbody>
    @foreach ($artistas as $artista)
        <tr>
            <td>{{ $artista->nombre}}</td>

            <td>{{ $artista->pais}}</td>

            <td>
                @if ($artista->activo)
                    <span style="background-color: green; color: white; padding: 5px;">
                                Actiu
                            </span>
                @else
                    <span style="background-color: gray; color: white; padding: 5px;">
                                Inactiu
                            </span>
                @endif
            </td>
            <td>
                <a href="{{ route('artistas.show', $artista->id) }}">
                    Show
                </a>

                <a href="{{ route('artistas.edit', $artista->id) }}">
                    Edit
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
```
