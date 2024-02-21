<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Imágenes</title>
</head>
<body>
    <h2>Atributos <code>src</code> de las imágenes dentro de las etiquetas &lt;a&gt;:</h2>

    @if (count($srcDeImagenes) > 0)
        <ul>
            @foreach ($srcDeImagenes as $src)
                <li>{{ $src }}</li>
            @endforeach
        </ul>
    @else
        <p>{{ $srcDeImagenes[0] }}</p>
    @endif
</body>
</html>
