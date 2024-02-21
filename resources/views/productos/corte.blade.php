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
                <div class="imagen" style="background-image: url('https://www.abrasivosaguila.com/wp-content/uploads/2015/02/Easy-Diam1-468x576.jpg');"></div>
            </div>
            <h3>Pads Diamantados</h3>
        </div>

        <div class="categoria" id="adhesivos-y-masillas">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('https://www.abrasivosaguila.com/wp-content/uploads/2015/02/Lija-BR-468x576.jpg');"></div>
            </div>
            <h3>Para máquina manual</h3>
        </div>

        <div class="categoria" id="complementos">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('https://www.abrasivosaguila.com/wp-content/uploads/2015/02/Taco-BR-468x576.jpg');"></div>
            </div>
            <h3>Uso manual</h4>
        </div>
            
        <div class="categoria" id="consumibles-maquinaria">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('https://www.abrasivosaguila.com/wp-content/uploads/2015/02/Pulecanto-BR-468x576.jpg');"></div>
            </div>
            <h3>Para máquinas pulecantos automáticas</h3>
        </div>

        <div class="categoria" id="consumibles-maquinaria">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('https://www.abrasivosaguila.com/wp-content/uploads/2015/02/Corona-BRT1-468x576.jpg');"></div>
            </div>
            <h3>Para máquina mural y de puente</h3>
        </div>

        <div class="categoria" id="consumibles-maquinaria">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('https://www.abrasivosaguila.com/wp-content/uploads/2017/12/RINON-TS-45-468x576.jpg');"></div>
            </div>
            <h3>Pulido de pavimentos fijación anclaje</h3>
        </div>

        <div class="categoria" id="consumibles-maquinaria">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('https://www.abrasivosaguila.com/wp-content/uploads/2017/01/Frankfurt-BR-468x576.jpg');"></div>
            </div>
            <h3>Pulido de pavimentos fijación velour</h3>
        </div>

        <div class="categoria" id="consumibles-maquinaria">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('https://www.abrasivosaguila.com/wp-content/uploads/2017/01/FRANKFURT-M-1-468x576.jpg');"></div>
            </div>
            <h3>Linea de pulido</h3>
        </div>

        <div class="categoria" id="consumibles-maquinaria">
            <div class="contenedorImagen">
                <div class="imagen" style="background-image: url('https://www.abrasivosaguila.com/wp-content/uploads/2015/02/Plato-aluminio-468x576.jpg');"></div>
            </div>
            <h3>Accesorios para diamantados</h3>
        </div>


        
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