@extends('layouts.app')


@section('styles')
    <style>
        .opcion{
            border:none;
            background-color: transparent;
            font-weight: 500;
            font-size: 1.5rem;
            color:#212529;
        }
        .opcion:hover{
            color: #d5ac63;
            cursor: pointer;
        }

        .menuOpcionesI{
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            padding-left: 2vw;
        }

        .menuOpcionesI h3{
            padding-right: 1vw;
            padding-left: 1vw;
        }
        .menuOpcionesI h3:hover{
            color: #d5ac63;
            cursor: pointer;
        }

        .contenedor-imagenes {
            columns: 4 200px;
            column-gap: 1.5rem;
            width: 90%;
            margin: 0 auto;
        }

        .contenedor-imagenes div{
            width: 150px;
            margin: 0 1.5rem 1.5rem 0;
            display: inline-block;
            width: 100%;
            /*border: solid 2px black;*/
            padding: 5px;
            border-radius: 5px;
        }

        .contenedor-imagenes div img {
            width: 100%;
            border-radius: 5px;
        }
    </style>
    <script src="{{ asset('js/scriptFiltro.js') }}" defer></script>
    
@endsection



@section('content')


<div id="inicioFiltro">

    <h1 style="text-align: center;padding-top: 3vw;padding-bottom: 3vw;">Inspiración</h1>

    <div class="menuOpcionesI">
        <form action="/inspiracion" method="post">
            @csrf
            <input type="hidden" name="tipo" value="todos">
            <input type="submit" id="todos" value="Ver Todo" class="opcion">
        </form>
        <form action="/inspiracion" method="post">
            @csrf
            <input type="hidden" name="tipo" value="baths">
            <input type="submit" id="todos" value="Baños" class="opcion">
        </form>
        <form action="/inspiracion" method="post">
            @csrf
            <input type="hidden" name="tipo" value="cocinas">
            <input type="submit" id="todos" value="Cocinas" class="opcion">
        </form>
        <form action="/inspiracion" method="post">
            @csrf
            <input type="hidden" name="tipo" value="interiores">
            <input type="submit" id="todos" value="Interiores" class="opcion">
        </form>
        <form action="/inspiracion" method="post">
            @csrf
            <input type="hidden" name="tipo" value="paredes">
            <input type="submit" id="todos" value="Paredes" class="opcion">
        </form>
    </div>
    <div id="contenedor-imagenes" class="contenedor-imagenes">
        <?php
        // print_r($todos);
            foreach ($todos as $imagen) {
        ?>
        <div>
            <img src='<?php echo 'storage/imagenes/todos/' . $imagen; ?>' alt="">
        </div>
        @php
            }
        @endphp
    </div>
  </div>
@endsection