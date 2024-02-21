@extends('layouts.app')


@section('styles')
    <style>
        body{
            font-size: 14px;
            line-height: 20px;
        }
        .containerProductos{
            width: 1372px;
            display: flex;
            flex-wrap: wrap;
            /* justify-content: center; */
        }
        .filtroProductos{
            width: 436px;
            margin-right: 25px;
        }

        .filtroGris{
            color: #808080;
        }
        .apartado{
            display: flex;
            padding: 12px;
            cursor: pointer;
            align-items: center;
        }
        .apartado:hover{
            background-color: #E6E6E6;
        }
        .sumar{
            height: 100%;
            margin-top: auto;
            margin-bottom: auto;
            margin-left: auto;
        }
        .contenedorProductos{
            display: flex;
            width: 100%;
            justify-content: center;
        }
        .filtroArriba{
            display: flex;
            justify-content: center;
            padding-left: 15px;
            padding-right: 15px;
            /* cursor: pointer; */
        }
        .botonFiltroArriba {
            width: 928px;
            /* border: 2px solid #444; */
            text-align: center;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #188803;
            color: white;
            cursor: pointer;
            font-weight: 600;
        }
        .botonFiltroArriba label{
            margin-top: 4px;
            margin-bottom: 4px;
        }

        .productos{
            display: flex;
            align-items: flex-start;
        }
        @media (max-width: 1950px) {
            .filtroProductos {
                width: 280px;
            }
            .containerProductos {
                width: 904px;
            }
        }
        @media (max-width: 1249px) {
            .filtroProductos {
                display: none;
            }
            .containerProductos {
                width: 928px;
            }
            .filtroArriba{
                display:flex;
            }
            .botonFiltroArriba{
                width: 928px;
            }
            .productos{
                width: 100%;
                justify-content: center;
            }
        }
         @media screen and (min-width: 1250px) {
            .filtroArriba {
                display: none;
            }
        }
        .subcategorias{
            display: none;
            padding-left: 15px;
        }

        

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Color gris semi-transparente */
            z-index: 1;
        }

        #menu {
            height: 100%;

            display: flex;
            flex-direction: column;

            width: 0;
            position: fixed;
            top: 0;
            right: 0;
            background-color: white;
            overflow-x: hidden;
            transition: 0.5s;
            z-index: 2;
        }

        #menu ul {
            padding: 20px;
            list-style: none;
        }

        #menu ul li {
            margin-bottom: 10px;
        }

        #toggleButton {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            border: none;
            padding: 15px;
            z-index: 3;
        }

        #toggleButton:hover {
            background-color: #444;
        }
        
        .contenedorProducto {
            box-sizing: border-box;
            width: calc(25% - 30px);
            padding: 15px;
            border-bottom: 1px solid #ddd;
            display: flex;
            flex-direction: column;
            margin: 15px;
            cursor: pointer;
        }

        .divImagenProducto{
            display:flex;
            justify-content: center;
            width: 100%;
            margin-top:auto;
            margin-bottom:auto;
        }
        
        .imagenProducto{
            width:100%;
        }

        .textoProducto{
            margin-top: 15px;
        }

        @media (max-width: 950px) and (min-width: 580px) {
            .contenedorProducto {
                width: calc(28%);
            }
        }
        @media (max-width: 579px) and (min-width: 490px) {
            .contenedorProducto {
                width: calc(43.5%);
            }
        }

        @media (max-width: 489px) {
            .contenedorProducto {
                width: calc(100%);
            }
            .imagenProducto{
                width:65%;
            }
            .textoProducto{
                text-align: center;
            }
        }
        @media (max-width: 400px) {
            .contenedorProducto {
                width: calc(100%);
            }
            .imagenProducto{
                width:75%;
            }
            .textoProducto{
                text-align: center;
            }
            .textoProducto p{
                font-size: 14px;
            }
            .textoProducto h5{
                font-size: 16px;
            }
        }

        .categoria{
            border-top: 1px solid black;
        }

        input[type="checkbox"].color {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 20px;
            height: 20px;
            border: 1px solid lightgrey;
            background-color: blue;
            border-radius: 50%;
            margin-right: 5px;
            position: relative;
        }

        input[type="checkbox"].color:checked::before {
            content: '';
            position: absolute;
            width: 26px;
            height: 26px;
            border: 1px solid rgb(80, 80, 80);
            border-radius: 50%;
            top: -4px;
            left: -4px;
        }

        input[type="checkbox"].color2 {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 20px;
            height: 20px;
            border: 1px solid lightgrey;
            background-color: blue;
            border-radius: 50%;
            margin-right: 5px;
            position: relative;
        }

        input[type="checkbox"].color2:checked::before {
            content: '';
            position: absolute;
            width: 26px;
            height: 26px;
            border: 1px solid rgb(80, 80, 80);
            border-radius: 50%;
            top: -4px;
            left: -4px;
        }
        .coleccion label input{
            margin-right: 5px;
        }
        .opcionesMedidas label input{
            margin-right: 5px;
        }

        div span span span svg {
            width: 25px;
        }
        div div span a svg {
            width: 25px;
        }
       
        .paginadorxs {
            align-items: center;
            justify-content: center;
            margin-bottom: 35px;
            margin-top: 35px;
            display: none;
        }

        .paginador {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 35px;
            margin-top: 35px;
        }

        @media (max-width: 567px) {
            .paginadorxs {
                display: flex;
            }

            .paginador {
                display: none;
            }
        }

        .botonSubmit{
            padding: 10px 25px;
            font-weight: 500;
            color:white;
            border: none;
            background-color: #41484E;
        }

        .borrarFiltros{
            border:1px solid #41484E;
            padding: 10px 25px;
            color:#41484E;
        }
        .restablecer{
            color:black;
            text-decoration:underline;
        }
        .restablecer:hover{
            color: #555;
        }


        #lista {
            position: relative;
            height: 300px;
            overflow: auto;
        }
        #contenido {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: white;
            padding: 15px;
            box-shadow: 0px -5px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .contenidoMenu{            
            flex: 1;
            overflow-y: auto;
            padding: 10px;
        }
       
        .enviarFormularioLateral{
            height: 70px;
            text-align: center;
            padding: 15px;
            border-top: 1px solid lightgrey;
        }

        .apartadoArribaFormularioLateral{
            height: 70px;
            display:flex;
            justify-content: space-between;
            padding: 20px;
            border-bottom: 1px solid lightgrey;
        }

        @media screen and (max-width: 370px) {
            .borrarFiltros{
                padding: 5px 12px 5px 12px;
            }
            .botonSubmit{
                padding: 5px 12px 5px 12px;
            }
            .enviarFormularioLateral{
                height: 60px;
            }
        }

        @media screen and (max-width: 315px) {
            .enviarFormularioLateral{
                padding-left: 5px;
                padding-right: 5px;
            }
        }
        @media screen and (max-width: 315px) {
            .borrarFiltros{
                padding: 3px 8px 3px 8px;
            }
            .botonSubmit{
                padding: 3px 8px 3px 8px;
            }
            .enviarFormularioLateral{
                padding-left: 5px;
                padding-right: 5px;
            }
        }
        .enlace{
            text-decoration:none;
            color:black;
            font-size:16px;
        }
        .enlace:hover{
            text-decoration: none;
            color: #C45500;
        }
        span {
            margin-bottom: 10px;
            display: block;
            margin-left: 20px;
        }

        /* span:not(:first-child) {
            margin-left: 20px;
        } */
    </style>
@endsection



@section('content')

    <div style="text-align: center;margin-top: 30px;margin-bottom: 30px;padding-left: 10px;padding-right: 10px;">
        <h4>Envíos a todo el territorio nacional</h4>
    </div>
    <div class="filtroArriba" style="height: 38px;">
        <div class="botonFiltroArriba" id="botonAbrirMenu">
            <img src="{{ asset('storage/imagenes/filtrar.png') }}" alt="filtrar" height="20px">
            <label>Categorías</label>
        </div>
    </div>
    <div class="contenedorProductos">
        
        <div class="filtroProductos">
            <div>
                <h4>Categorías</h4>
            </div>
            <div class="categoria">
                <div class="apartado" id="apartadoAbrasivos" onclick="window.location.href='/comprar/quimicos'">
                    <div>
                        <h5>Químicos</h5>
                    </div>
                </div>
            </div>
            
            <div class="categoria">
                <div class="apartado" id="apartadoPrecios" onclick="window.location.href='/comprar/diamantados'">
                    <div>
                        <h5>Diamantados</h5>
                    </div>
                    {{-- <div class="sumar" id="abrir1">
                        <h3>+</h3>
                    </div> --}}
                </div>
                {{-- <div class="subcategorias" id="subcategorias1">
                    <div>
                        <span class="spanEnlace">
                            <a href="#" class="enlace">Adhesivo cartucho doble componente</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas Poli-Epoxi</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas poliéster</a>
                        </span>
                    </div>
                </div> --}}
            </div>

            <div class="categoria">
                <div class="apartado" id="apartadoColores" onclick="window.location.href='/comprar/abrasivos'">
                    <div>
                        <h5 id="colorTitle">Abrasivos</h5>
                    </div>
                </div>
            </div>

            <div class="categoria">
                <div class="apartado" id="apartadoColeccion" onclick="window.location.href='/comprar/abrasivos'">
                    <div>
                        <h5>Otros</h5>
                    </div>
                    {{-- <div class="sumar" id="abrir2">
                        <h3>+</h3>
                    </div> --}}
                </div>
                {{-- <div class="subcategorias" id="subcategorias2">
                    <div>
                        <span class="spanEnlace">
                            <a href="#" class="enlace">Adhesivo cartucho doble componente</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas Poli-Epoxi</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas poliéster</a>
                        </span>
                    </div>
                </div> --}}
            </div>

            {{-- <div class="categoria">
                <div class="apartado">
                    <div>
                        <h5 onclick="window.location.href='/categorias/Corte'">Corte</h5>
                    </div>
                    <div class="sumar" id="abrir3">
                        <h3>+</h3>
                    </div>
                </div>
                <div class="subcategorias" id="subcategorias3">
                    <div>
                        <span class="spanEnlace">
                            <a href="#" class="enlace">Adhesivo cartucho doble componente</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas Poli-Epoxi</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas poliéster</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="categoria">
                <div class="apartado">
                    <div>
                        <h5 onclick="window.location.href='/categorias/Desbaste'">Desbaste</h5>
                    </div>
                    <div class="sumar" id="abrir4">
                        <h3>+</h3>
                    </div>
                </div>
                <div class="subcategorias" id="subcategorias4">
                    <div>
                        <span class="spanEnlace">
                            <a href="#" class="enlace">Adhesivo cartucho doble componente</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas Poli-Epoxi</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas poliéster</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="categoria">
                <div class="apartado" id="apartadoMedidas">
                    <div>
                        <h5 onclick="window.location.href='/categorias/Elevacion-y-manipulacion'">Elevación y manipulación</h5>
                    </div>
                    <div class="sumar" id="abrir5">
                        <h3>+</h3>
                    </div>
                </div>
                <div class="subcategorias" id="subcategorias5">
                    <div>
                        <span class="spanEnlace">
                            <a href="#" class="enlace">Adhesivo cartucho doble componente</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas Poli-Epoxi</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas poliéster</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="categoria">
                <div class="apartado" id="apartadoMedidas">
                    <div>
                        <h5 onclick="window.location.href='/categorias/Herramientas'">Herramientas</h5>
                    </div>
                    <div class="sumar" id="abrir6">
                        <h3>+</h3>
                    </div>
                </div>
                <div class="subcategorias" id="subcategorias6">
                    <div>
                        <span class="spanEnlace">
                            <a href="#" class="enlace">Adhesivo cartucho doble componente</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas Poli-Epoxi</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas poliéster</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="categoria">
                <div class="apartado" id="apartadoMedidas">
                    <div>
                        <h5 onclick="window.location.href='/categorias/CNC'">Herramientas CNC</h5>
                    </div>
                    <div class="sumar" id="abrir7">
                        <h3>+</h3>
                    </div>
                </div>
                <div class="subcategorias" id="subcategorias7">
                    <div>
                        <span class="spanEnlace">
                            <a href="#" class="enlace">Adhesivo cartucho doble componente</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas Poli-Epoxi</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas poliéster</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="categoria">
                <div class="apartado" id="apartadoMedidas">
                    <div>
                        <h5 onclick="window.location.href='/categorias/Maquinaria'">Maquinaria</h5>
                    </div>
                    <div class="sumar" id="abrir8">
                        <h3>+</h3>
                    </div>
                </div>
                <div class="subcategorias" id="subcategorias8">
                    <div>
                        <span class="spanEnlace">
                            <a href="#" class="enlace">Adhesivo cartucho doble componente</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas Poli-Epoxi</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas poliéster</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="categoria">
                <div class="apartado" id="apartadoMedidas">
                    <div>
                        <h5 onclick="window.location.href='/categorias/Perforacion'">Perforación</h5>
                    </div>
                    <div class="sumar" id="abrir9">
                        <h3>+</h3>
                    </div>
                </div>
                <div class="subcategorias" id="subcategorias9">
                    <label><input type="checkbox" name="medidas[]" value="80x160" class="checkMedidas">80x160</label><br>
                    <label><input type="checkbox" name="medidas[]" value="80x80" class="checkMedidas">80x80</label><br>
                </div>
            </div>
            <div class="categoria">
                <div class="apartado" id="apartadoMedidas">
                    <div>
                        <h5 onclick="window.location.href='/categorias/Proteccion-laboral'">Protección laboral</h5>
                    </div>
                </div>
            </div>
            <div style="border-top: 1px solid black;" class="categoria">
                <div class="apartado" id="apartadoMedidas">
                    <div>
                        <h5 onclick="window.location.href='/categorias/Pulido'">Pulido</h5>
                    </div>
                    <div class="sumar" id="abrir10">
                        <h3>+</h3>
                    </div>
                </div>
                <div class="subcategorias" id="subcategorias10">
                    <div>
                        <span class="spanEnlace">
                            <a href="#" class="enlace">Adhesivo cartucho doble componente</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas Poli-Epoxi</a>
                        </span>
                        <span>
                            <a href="#" class="enlace">Masillas poliéster</a>
                        </span>
                    </div>
                </div>
            </div>
            <div style="border-bottom:1px solid black;" class="categoria">
                <div class="apartado">
                    <div>
                        <h5 onclick="window.location.href='/categorias/Tratamiento-de-la-piedra'">Tratamiento de la piedra</h5>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="productos">
            <div class="containerProductos">
                @foreach ($productos as $producto)
                <div class="contenedorProducto" onclick="window.location.href = '/producto/{{ str_replace(' ', '-', strtolower($producto->nombre)) }}'">
                    <div class="divImagenProducto">
                            <img src="{{$producto->imagen}}" alt="Imagen producto" style="border='1px solid black'" class="imagenProducto">
                        </div>
                        <div class="textoProducto">
                            <p class="km-tile-designation ">
                                {{$producto->nombre}}
                            </p>
                            <h5 style="">{{$producto->precio}}€</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


<div id="overlay"></div>
<div id="menu">
    <div class="apartadoArribaFormularioLateral">
        <label style="color: grey;width: 14px;"></label>
        <a href="/comprar" style="color:black;text-decoration:underline;">Restablecer</a>
        <label id="closeButton" style="width: 16px;">X</label>
    </div>
    <div class="contenidoMenu">
        
        <div class="categoria" style="border-top: none;" onclick="window.location.href='/comprar/quimicos'">
            <div class="apartado" id="apartadoAbrasivos">
                <div>
                    <h5>Químicos</h5>
                </div>
            </div>
        </div>

        <div class="categoria" onclick="window.location.href='/comprar/diamantados'">
            <div class="apartado" id="apartadoPrecios">
                <div>
                    <h5>Diamantados</h5>
                </div>
            </div>
        </div>

        <div class="categoria" onclick="window.location.href='/comprar/abrasivos'">
            <div class="apartado" id="apartadoColores">
                <div>
                    <h5>Abrasivos</h5>
                </div>
            </div>
        </div>

        <div class="categoria" onclick="window.location.href='/comprar/otros'">
            <div class="apartado" id="apartadoColeccion">
                <div>
                    <h5>Otros</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="enviarFormularioLateral">
        <button class="borrarFiltros">Borrar filtros</button>
        <input class="botonSubmit" type="submit" value="Enviar Mensaje">
    </div>
</div>

<div class="paginador">
    {{-- este está refachero --}}
    {{ $productos->appends(request()->input())->links('vendor.pagination.default') }}

    {{-- este es el de previous next, esta bien para pantallas pequeñas --}}
    {{-- {{ $productos->appends(request()->input())->links('vendor.pagination.simple-bootstrap-4') }} --}}

    {{-- iguales que el de antes --}}
    {{-- {{ $productos->appends(request()->input())->links('vendor.pagination.simple-bootstrap-5') }}
    {{ $productos->appends(request()->input())->links('vendor.pagination.simple-default') }} --}}
    {{-- {{ $productos->appends(request()->input())->links('vendor.pagination.simple-bootstrap-4') }} --}}


</div>

<div class="paginadorxs">
    {{-- este es el de previous next, esta bien para pantallas pequeñas --}}
    {{ $productos->appends(request()->input())->links('vendor.pagination.simple-bootstrap-4') }}

    {{-- iguales que el de antes --}}
    {{-- {{ $productos->appends(request()->input())->links('vendor.pagination.simple-bootstrap-5') }} --}}
    {{-- {{ $productos->appends(request()->input())->links('vendor.pagination.simple-default') }} --}}


</div>


<script>

    document.getElementById("enlaceProductos").style.color = "#de9d3c";

    
    document.getElementById('botonAbrirMenu').addEventListener('click', function () {
        toggleMenu();
    });

    document.getElementById('closeButton').addEventListener('click', function () {
        closeMenu();
    });

    document.getElementById('overlay').addEventListener('click', function () {
        closeMenu();
    });

    function toggleMenu() {
        var menu = document.getElementById('menu');
        var overlay = document.getElementById('overlay');
        if (menu.style.width === '450px' || menu.style.width == '100%') {
            menu.style.width = '0';
            overlay.style.display = 'none';
        } else {
            var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            if (windowWidth <= 500) {
                menu.style.width = '100%';
            }
            else{
                menu.style.width = '450px';
                overlay.style.display = 'block';
            }
        }
    }
    

    function closeMenu() {
        var menu = document.getElementById('menu');
        var overlay = document.getElementById('overlay');
        menu.style.width = '0';
        overlay.style.display = 'none';
    }

    var buttons = document.querySelectorAll('.color');
    var colorTitle = document.getElementById('colorTitle');

    buttons.forEach(function(button) {
        button.addEventListener('mouseover', function() {
            colorTitle.textContent = 'Color: ' + button.getAttribute('aria-label');
        });

        button.addEventListener('mouseout', function() {
            colorTitle.textContent = 'Color';
        });
    });
    
    document.addEventListener('DOMContentLoaded', function() {
        for (let i = 1; i <= 11; i++) {
            const abrir = document.getElementById(`abrir${i}`);
            const subcategorias = document.getElementById(`subcategorias${i}`);
            
            abrir.addEventListener('click', function() {
                const subcategoriasDisplay = getComputedStyle(subcategorias).getPropertyValue('display');
                if(subcategorias.style.display === 'block')
                    subcategorias.style.display =  'none';
                else
                    subcategorias.style.display = 'block';
            });
        }
    });




    // codigo para encontrar elementos con id duplicados (por si has puesto un id repetido y te da error)
    // var elementsWithId = document.querySelectorAll('[id]');

    // var idMap = {};

    // elementsWithId.forEach(function(element) {
    //     var id = element.id;

    //     if (idMap[id]) {
    //         console.log('ID duplicado encontrado:', id);
    //     } else {
    //         idMap[id] = true;
    //     }
    // });

    var elementoContacto = document.getElementById('liProductos');
    if (elementoContacto) {
        elementoContacto.classList.remove('menuEnlaces');
    }
    elementoContacto.style.borderBottom = '1px solid white';

</script>
@endsection