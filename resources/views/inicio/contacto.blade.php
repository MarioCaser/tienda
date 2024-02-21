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
        .formularioContacto{
            flex-direction: row;
            padding-left: 5%;
            padding-right: 5%;
        }
        .formularioDatos{
            /* padding-right: 50px; */
        }
        @media (max-width: 350px) {
            /* Estilos específicos para pantallas menores de 700px */
            .row{
                padding-left: 5px;
                padding-right: 5px;
            }
        }

        .columna{
            display: flex;
            flex-direction: column;
            text-align: center;
            /* flex: 1; */
            /* align-items: center; */
        }
        .bloqueCompleto{
            /* display: flex;
            flex-direction: row; */
            padding-top: 4%;
            padding-left: 12%;
            padding-right: 12%;
            padding-bottom: 3%;
            /* border: 1px solid black; */
            justify-content: space-between;
        }

        @media screen and (max-width: 800px) {
            .col-sm-4 {
                width: 100%;
            }
            .form-group:nth-child(1) {
                margin-bottom: 10px;
            }
        }
        @media screen and (max-width: 900px) {
            .bloqueCompleto{
                padding-left: 9%;
                padding-right: 9%;
            }
        }
        /* @media screen and (max-width: 750px) {
            .bloqueCompleto{
                flex-direction: column;
                text-align: center;
            }
        } */





        /* Estilos para pantallas más grandes (800px o más) */
        @media (min-width: 480px) {
            .bloqueCompleto {
                display: flex;
                flex-wrap: wrap;
            }
            .columna {
                width: calc(33.33% - 20px); /* Ancho de cada columna */
                margin-right: 20px; /* Espacio entre columnas */
            }
            .columna:last-child {
                margin-right: 0; /* Quita el margen derecho de la última columna */
            }
        }

        /* Estilos para pantallas entre 800px y 1200px */
        @media (min-width: 480px) and (max-width: 768px) {
            .columna {
                width: calc(50% - 20px); /* Ancho de cada columna en dos columnas por fila */
                margin-right: 20px; /* Espacio entre columnas */
                margin-bottom: 20px; /* Espacio entre filas */
            }
            .columna:nth-child(2n) {
                margin-right: 0; /* Quita el margen derecho de cada segunda columna */
            }
        }

        /* Estilos para pantallas inferiores a 800px */
        @media (max-width: 480px) {
            .columna {
                width: 100%; /* Cada columna ocupa todo el ancho */
                margin-bottom: 20px; /* Espacio entre filas */
            }
        }




        
        .botonSubmit{
            padding: 10px 25px;
            font-weight: 500;
            color:white;
            border: none;
            background-color: #41484E;
        }

        .imagen {
            text-align: center;
            width: 100%;
            /* background-color: #d0cccc; */
        }
        @media screen and (max-width: 1000px) {
            .textoContacto h4 {
                font-size: 18px; /* Elige el tamaño de fuente que desees para pantallas más pequeñas */
            }
        }
        @media screen and (max-width: 750px) {
            .textoContacto h4 {
                font-size: 16px; /* Elige el tamaño de fuente que desees para pantallas más pequeñas */
            }
        }
        @media screen and (max-width: 400px) {
            .textoContacto h4 {
                font-size: 15px; /* Elige el tamaño de fuente que desees para pantallas más pequeñas */
            }
        }
        .mapaContacto{
            width: 300px;
            height:225px;
        }
        @media screen and (max-width: 400px) {
            .mapaContacto{
                width: 250px;
                height: 200px;
            }
        }
        @media screen and (max-width: 315px) {
            .mapaContacto{
                width: 220px;
            }
        }






        /* para la transicion */

        .icono-ubicacion {
            width: 102px; /* Ancho del icono */
            height: 102px; /* Alto del icono */
            position: relative;
            border-radius: 50%;
            background-color: black; /* Color inicial del círculo */
            transition: background-color 0.3s ease; /* Transición de color */
            cursor: pointer;
        }

        .icono-ubicacion::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 25px; /* Ancho del icono de ubicación */
            height: 38px;
            background-image: url("{{ asset('storage/imagenes/ubicacionIcono2.png') }}"); /* Reemplaza con la ruta de tu icono */
            background-size: contain;
            /* background-repeat: no-repeat; */
            transition: background-color 0.5s ease; /* Transición de color */
            
        }

        .icono-ubicacion:hover {
            background-color: white; /* Color al pasar el ratón por encima */
            border: 1px solid black;
        }

        .icono-ubicacion:hover::before {
                filter: invert(100%);
        }



        .icono-telefono {
            width: 102px; /* Ancho del icono */
            height: 102px; /* Alto del icono */
            position: relative;
            border-radius: 50%;
            background-color: black; /* Color inicial del círculo */
            transition: background-color 0.3s ease; /* Transición de color */
            cursor: pointer;
        }

        .icono-telefono::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 25px; /* Ancho del icono de ubicación */
            height: 25px;
            background-image: url("{{ asset('storage/imagenes/telefono.png') }}"); /* Reemplaza con la ruta de tu icono */
            background-size: contain;
            /* background-repeat: no-repeat; */
            transition: background-color 0.5s ease; /* Transición de color */
            
        }

        .icono-telefono:hover {
            background-color: white; /* Color al pasar el ratón por encima */
            border: 1px solid black;
        }

        .icono-telefono:hover::before {
            filter: invert(100%);
        }




        .icono-correo {
            width: 102px; /* Ancho del icono */
            height: 102px; /* Alto del icono */
            position: relative;
            border-radius: 50%;
            background-color: black; /* Color inicial del círculo */
            transition: background-color 0.3s ease; /* Transición de color */
            cursor: pointer;
        }

        .icono-correo::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 35px; /* Ancho del icono de ubicación */
            height: 35px;
            background-image: url("{{ asset('storage/imagenes/email.png') }}"); /* Reemplaza con la ruta de tu icono */
            background-size: contain;
            /* background-repeat: no-repeat; */
            transition: background-color 0.5s ease; /* Transición de color */
            
        }

        .icono-correo:hover {
            background-color: white; /* Color al pasar el ratón por encima */
            border: 1px solid black;
        }

        .icono-correo:hover::before {
            filter: invert(100%);
        }

        /* Estilos adicionales si es necesario */
        #contenedor {
            background-image: url('https://evdsdiamond.net:8443/vertex-web-api/rest/families/get-image/14?WIDTH=1280&COMPANY_ID=cf613b8f-d9b0-41cc-aa6d-ed42113b4365');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 320px;
            margin: 0 auto; /* Centra el div horizontalmente */
            padding: 20px;
            position: relative;
            text-align: center; /* Alinea el texto en el centro horizontal */
        }

        #texto-contacto {
            color: white;
            font-size: 2em; /* Tamaño del texto - ajustado para ser un poco más grande que h3 */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra negra */
            position: absolute;
            top: 50%; /* Centra verticalmente */
            left: 50%; /* Centra horizontalmente */
            transform: translate(-50%, -50%); /* Ajusta el centrado */
            font-family: "Playfair Display bold";
            font-size: 3em;
        }

    </style>
@endsection



@section('content')

    <div id="contenedor">
        <h1 id="texto-contacto">Contacto</h1>
    </div>



<div class="bloqueCompleto" id="bloqueCompleto">


    



    <div class="columna">
        <div style="width: 100%;margin-bottom:15px;">
            <div class="icono-telefono" style="margin-left: auto; margin-right: auto;"></div>
        </div>
        <div style="display: flex;align-items: center;margin-bottom: 10px;">
            <h6 style="margin:auto;padding:auto;">+34 666 666 666<h6>
        </div>
    </div>

    <div class="columna">
        <div style="width: 100%;margin-bottom:15px;">
            <div class="icono-ubicacion" style="margin-left: auto; margin-right: auto;"></div>
        </div>
        <div style="display: flex;align-items: center;">
            <h6 style="margin:auto;padding:auto;">Calle Principe de Vergara, 109, 2<br>
                28002 Madrid, Madrid
            <h6>
        </div>
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d6303.858181625223!2d-4.426650728747527!3d36.7192582889596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzbCsDQzJzA4LjUiTiA0wrAyNScxOS45Ilc!5e0!3m2!1ses!2ses!4v1704212524357!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            <br> --}}
    </div>

    <div class="columna">
        <div style="width: 100%;margin-bottom:15px;">
            <div class="icono-correo" style="margin-left: auto; margin-right: auto;"></div>
        </div>
        <div style="display: flex;align-items: center;margin-bottom: 10px;">
            <h6 style="margin:auto;padding:auto;">correo@gmail.com<h6>
        </div>
    </div>
</div>





<h2 style="text-align:center;margin-top: 2vw;color:#363636;">Escríbenos</h2>
<h4 style="text-align:center;margin-bottom: 2vw;color:#363636;">Déjanos saber cómo ayudarte</h4>
<div class="d-flex justify-content-center align-items-center formularioContacto container-fluid" style="padding-bottom: 30px;">
    <div class="formularioDatos w-98" style="max-width: 1000px;">
        <form>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="col-sm-4 correo">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Correo electrónico">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Teléfono">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="Escribe tu mensaje aquí"></textarea>
                    </div>
                </div>
            </div>
            <input class="botonSubmit" type="submit" value="Enviar Mensaje">
        </form>
    </div>
</div>


        {{-- <script>
            document.getElementById("enlaceContacto").style.color = "#de9d3c";
        </script> --}}

    <script>

        var elementoContacto = document.getElementById('liContacto');
        if (elementoContacto) {
            elementoContacto.classList.remove('menuEnlaces');
        }
        elementoContacto.style.borderBottom = '1px solid white';
    </script>
        
    <script>
        document.getElementById("enlaceContacto").style.color = "#de9d3c";
    </script>

@endsection