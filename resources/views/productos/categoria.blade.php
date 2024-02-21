@extends('layouts.app')


@section('styles')
    <style>
        
    </style>
@endsection


@section('content')

    <ul>
        @foreach($productos as $producto)
            <li>{{ $producto->nombre }} - {{ $producto->categoria }} - ${{ $producto->precio }}</li>
        @endforeach
    </ul>

    <script>
        document.getElementById("enlaceProductos").style.color = "#de9d3c";
    </script>

@endsection