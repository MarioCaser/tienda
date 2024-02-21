<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Texto</title>
</head>
<body>
    <h2>Textos dentro de las etiquetas &lt;h3&gt;:</h2>

    @if (count($textosH3) > 0)
        @foreach ($textosH3 as $texto)
            <label>{{ $texto }}</label><br>
        @endforeach  
    @else
        <p>{{ $textosH3[0] }}</p>
    @endif
</body>
</html>
