@extends('layouts.app')


@section('styles')
    <style>
        
    </style>
@endsection



@section('content')


@if(isset($resultado))
    <pre>Modificados correctamente: {{ $resultado[0] }}</pre>
    <pre>Errores al insertar: {{ $resultado[1] }}</pre>
    @php
        if($resultado[1] > 0){
            echo "<br><label>Posiciones en las que hay errores: ";
            foreach($errores as $error){
                echo $error . " ";
            }
            echo "</label>";
        }
    @endphp
@else
    <p>No se ha proporcionado contenido.</p>
@endif



@if(session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@else
    <p>Se ha insertado correctamente</p>
@endif

@endsection