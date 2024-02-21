@extends('layouts.app')


@section('styles')
    <style>
        .categorias{
            /* border: 1px solid black; */
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1600px;
            padding-right: 15px;
            padding-left: 15px;
            width: 100%;
        }

        .categoria {
            flex: 0 0 auto;
            margin: 15px 30px;
            transition: opacity 0.5s ease;
            width: 220px;
            cursor: pointer;
        }

        .categoria h3{
            text-align: center;
            font-size: 18px;
            word-wrap: break-word;
            margin-top: 10px;
        }
        .contenedorImagen{
            padding: 5%;
        }

        .imagen {
            width: 100%;
            aspect-ratio: 1|1;
            /* height: 220px; */
            aspect-ratio: 1 / 1;
            background-image: url('ruta-de-tu-imagen.jpg');
            background-size: cover;
            background-position: center;
            /* border: 1px solid black; */
            border-radius: 50%;
        }

        @media screen and (min-width: 1300px) and (max-width: 1490px) {
            .categoria{
                width: 180px;
            }
        }
        @media screen and (min-width: 1050px) and (max-width: 1299px) {
            .categoria{
                width: 180px;
            }
        }
        /* cuatro productos por fila */
        @media screen and (min-width: 680px) and (max-width: 1049px) {
            .categorias{
                width: 100%;
            }
            .categoria {
                width: 22%;
                text-align:center;
                margin: 12px 1.5%;
            }
            .categoria h3{
                font-size: 15px;
            }
            .contenedorImagen{
                padding: 7%;
            }
        }
        /* tres productos por fila */
        @media screen and (min-width: 500px) and (max-width: 679px) {
            .categorias{
                width: 100%;
            }
            .categoria {
                width: 27%;
                text-align:center;
                margin: 12px 3%;
            }
            .categoria h3{
                font-size: 15px;
            }
        }
        @media screen and (min-width: 380px) and (max-width: 499px) {
            .categorias{
                padding-left: 5px;
                padding-right: 5px;
            }
            .categoria {
                width: 29%;
                text-align:center;
                margin: 12px 2.16%;
            }
            .categoria h3{
                font-size: 14px;
            }
            .contenedorImagen{
                padding: 6%;
            }
        }
        @media screen and (min-width: 320px) and (max-width: 379px) {
            .categorias{
                padding-left: 0px;
                padding-right: 0px;
            }
            .categoria {
                width: 33.3%;
                text-align:center;
                margin: 6px 0%;
            }
            .categoria h3{
                font-size: 14px;
            }
            .contenedorImagen{
                padding: 9%;
            }
        }
        @media screen and (min-width: 10px) and (max-width: 319px) {
            .categorias{
                padding-left: 0px;
                padding-right: 0px;
            }
            .categoria {
                width: 33.3%;
                text-align:center;
                margin: 6px 0%;
            }
            .categoria h3{
                font-size: 12px;
            }
            .contenedorImagen{
                padding: 9%;
            }
        }
    </style>
@endsection



@section('content')
<h3 style="text-align: center;margin-top: 25px;margin-bottom: 25px;">Nuestros productos</h3>
<div style="margin-bottom: 25px; width: 100%; display: flex; justify-content: center;">

  
    <div class="categorias">
        <div class="categoria" id="quimicos">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/quimico.jpg') }}');"></div>
            </div>
            <h3>Químicos</h3>
        </div>

        <div class="categoria" id="adhesivos-y-masillas">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/corte.jpg') }}');"></div>
            </div>
            <h3>Diamantados</h3>
        </div>

        <div class="categoria" id="complementos">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/abrasivo.jpg') }}');"></div>
            </div>
            <h3>Abrasivos</h4>
        </div>
            
        <div class="categoria" id="consumibles-maquinaria">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/consumiblesMaquinaria.jpg') }}');"></div>
            </div>
            <h3>Otros</h3>
        </div>

        {{-- <div class="categoria" id="corte">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/corte.jpg') }}');"></div>
            </div>
            <h3>Corte</h3>
        </div> --}}

        {{-- <div class="categoria" id="desbaste">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/desbaste.jpg') }}');"></div>
            </div>
            <h3>Desbaste</h3>
        </div>

        <div class="categoria" id="elevacion-y-manipulacion">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/elevacion.jpg') }}');"></div>
            </div>
            <h3>Elevación y manipulación</h3>
        </div>

        <div class="categoria" id="herramientas">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/herramientas.jpg') }}');"></div>
            </div>
            <h3>Herramientas</h3>
        </div> --}}

        {{-- <div class="categoria" id="cnc">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/CNC.jpg') }}');"></div>
            </div>
            <h3>Herramientas CNC</h3>
        </div>

        <div class="categoria" id="maquinaria">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/maquinaria.jpg') }}');"></div>
            </div>
            <h3>Maquinaria</h3>
        </div>

        <div class="categoria" id="perforacion">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/perforacion.jpg') }}');"></div>
            </div>
            <h3>Perforación</h3>
        </div> --}}

        {{-- <div class="categoria" id="pulido">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/pulido.jpg') }}');"></div>
            </div>
            <h3>Pulido</h3>
        </div>

        <div class="categoria" id="tratamiento-piedra">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/tratamiento.jpg') }}');"></div>
            </div>
            <h3>Tratamiento de la piedra</h3>
        </div>

        <div class="categoria" id="proteccion-laboral">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('{{ asset('storage/imagenes/productos/proteccion.jpg') }}');"></div>
            </div>
            <h3>Protección laboral</h3>
        </div> --}}
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.categoria').click(function() {
            // Obtener el id del elemento clicado
            let id = $(this).attr('id');
            
            // Redireccionar a la ruta /categorias/{id}
            window.location.href = '/categorias/' + id;
        });
    });

    var elementoContacto = document.getElementById('liProductos');
    if (elementoContacto) {
        elementoContacto.classList.remove('menuEnlaces');
    }
    elementoContacto.style.borderBottom = '1px solid white';

</script>

<script>
    document.getElementById("enlaceProductos").style.color = "#de9d3c";
</script>

@endsection