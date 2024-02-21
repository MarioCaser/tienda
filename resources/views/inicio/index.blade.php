@extends('layouts.app')


@section('styles')
    <style>
      .carousel-inner {
        width: 100%;
      }
      .carousel-item img {
        object-fit: cover;
        width: 100%;
        height: 100%;
      }
      
      .contactar{
        background-color: #121212;
        padding: 2vw;
        color: white;
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        padding-top: 3vw;
        padding-bottom: 3vw;
        font-size: 150%;
        width: 100%;
        margin: 0;
        align-items: center;
      }

      @media screen and (max-width: 807px) {
        .contactar{
          text-align: center;
          flex-direction: column;
        }
      }
      .fases{
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        padding-left: 10%;
        padding-right: 3%;
        text-align: center;
        justify-content: center;
        width: 100%;
        overflow: hidden;
      }

      .datos{
        background-color: black;
        color:white;
        height: 235px;
        display: flex;
        flex-direction: row;
        align-items: center;
        padding-left: 5vw;
        padding-right: 5vw;

      }
      /* .datos div{
        margin: 3vw;
        margin-left: 1vw;
      } */
      .container h3{
        margin-top: 10px;
      }
        @media screen and (min-width: 800px) and (max-width: 1100px) {
            .datos{
                font-size: 90%;
                padding-left: 0vw;
                padding-right: 0vw;
                align-items: top;
            }
            .datos div{
              margin:1vw;            
            }
            .bloqueDatos img{
            height: 20%;
            }
        }
        @media screen and (max-width: 799px) {
            .datos{
              padding-top: 25px;
              padding-bottom: 25px;
                flex-direction: column;
                height: auto;
            }
            .datos div{
                width: 100%;
            }
            .bloqueDatos img{
                width: 50px;
            }
            .bloqueDatos{
                width: 90%;
            }
        }

      .bloqueDatos{
        width: 33.3%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }
      .bloqueDatos .imagenBloqueDatos{
        width: 100px;
        height:100px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .bloqueDatos div img{
        height: 70%;
        width: 70%;
      }
      .bloqueDatos div h4{
        margin-top: 15px;
        text-align: center;
      }

      .contacto{
        width: 100%;
        background-color: #2d2d2d;
        padding: 3%;
        padding-left: 5%;

        display: flex;
        flex-direction: row;
      }
      .contacto img{
        width: 700px;
      }
      @media screen and (min-width: 901px) and (max-width: 1400px) {
        .contacto img {
          width: 60%;
          height: auto;
        }
      }
      @media screen and (max-width: 900px) {
        .contacto img {
          width: 95%;
          height: auto;
        }
        .contacto{
          flex-direction: column;
        }
      }
      @media screen and (max-width: 900px){
        .datosContacto{
          padding-top: 25px;
          text-align: center;
        }
      }


    .datosContacto{
      color: white;
      margin-left: -5%;
    }


  .container {
        position: relative;
        min-width: 315px;
        width: 215px;
        text-align: center;
    }

    .fases .container:first-child .partial-content{
      background-image: url('./../storage/imagenes/cocina/cocina3.png'); /* reemplaza con la URL de tu imagen */
      background-size: cover; /* ajusta el tamaño de la imagen para que cubra todo el div */
      background-position: center center;
    }

    .fases :nth-child(2).container .partial-content{
      /* tus estilos aquí */
      background-image: url('./../storage/imagenes/bath/bathroom5.png'); /* reemplaza con la URL de tu imagen */
      background-size: cover; /* ajusta el tamaño de la imagen para que cubra todo el div */
      background-position: center center;
    }
    .fases :nth-child(3).container .partial-content{
      /* tus estilos aquí */
      background-image: url('./../storage/imagenes/paredes/paredes1.png'); /* reemplaza con la URL de tu imagen */
      background-size: cover; /* ajusta el tamaño de la imagen para que cubra todo el div */
      background-position: center center;
    }
    .fases :nth-child(4).container .partial-content{
      /* tus estilos aquí */
      background-image: url('./../storage/imagenes/suelos/suelo.png'); /* reemplaza con la URL de tu imagen */
      background-size: cover; /* ajusta el tamaño de la imagen para que cubra todo el div */
      background-position: center center;
    }

  @media screen and (min-width: 1021px) and (max-width: 1350px) {
    .fases{
        padding-left: 8%;
        padding-right: 0%;
        font-size: 80%;
        flex-wrap: nowrap;
    }
    .container{
        min-width: 140px;
        margin: 0;
    }
    .full-content {
        width: 140px;
        height: 260px;
        margin: 0;
    }
    .full-content h3{
        padding-left: 58%;
    }

    .partial-content{
        width: 153px;
        height: 260px;
        margin: 0;
        font-size: 80%;
    }
}

@media screen and (min-width: 770px) and (max-width: 1020px) {
        .fases{
            padding-left: 5%;
            font-size: 80%;
            flex-wrap: wrap
        }
        .container{
            width: 230px;
            margin: 30px;
            margin-bottom: 5%;
        }
        .full-content {
          width: 252px;
          height: 410px;
          margin-right: 7%;
        }
        .full-content h3{
          padding-left: 75%;
        }

        .partial-content{
          width: 252px;
          height: 410px;
          margin-right: 7%;
          font-size: 80%;
          margin-right: 7%;
        }
    }

    @media screen and (min-width: 590px) and (max-width: 769px) {
        .fases{
          padding-left: 5%;
          font-size: 80%;
          flex-wrap: wrap;
        }
        .container{
          width: 265px;
          margin: 30px;
          margin-bottom: 5%;
        }
        .full-content {
          width: 265px;
          height: 390px;
          margin-right: 7%;
        }
        .full-content h3{
            padding-left: 74%;
        }

        .partial-content{
          width: 265px;
          height: 390px;
          margin-right: 7%;
          font-size: 80%;
          margin-right: 7%;
        }
    }


    @media screen and (min-width: 540px) and (max-width: 589px) {
      .fases{
          padding-left: 5%;
          font-size: 80%;
          flex-wrap: wrap;
          padding-right: 0%;
      }
      .container{
          width: 265px;
          margin: 30px;
          margin-bottom: 5%;
          margin-left: 100px;
      }
      .full-content {
          width: 265px;
          height: 390px;
          margin-right: 7%;
      }
      .full-content h3{
        padding-left: 74%;
      }

      .partial-content{
          width: 265px;
          height: 390px;
          margin-right: 7%;
          font-size: 80%;
          margin-right: 7%;
      }
  }

  @media screen and (min-width: 360px) and (max-width: 539px) {
    .fases{
        padding-left: 5%;
        font-size: 80%;
        flex-wrap: wrap;
        padding-right: 0%;
    }
    .container{
        width: 265px;
        margin: 30px;
        margin-bottom: 5%;
        margin-left: 70px;
    }
    .full-content {
        width: 265px;
        height: 390px;
        margin-right: 7%;
    }
    .full-content h3{
      padding-left: 74%;
    }

    .partial-content{
        width: 265px;
        height: 390px;
        margin-right: 7%;
        font-size: 80%;
        margin-right: 7%;
    }
}


@media screen and (min-width: 276px) and (max-width: 359px) {
  .fases{
      padding-left: 5%;
      font-size: 80%;
      flex-wrap: wrap;
  }
  
  .container{
      width: 200px;
      margin: 30px;
      margin-bottom: 5%;
      margin-left: 150px;
  }
  .full-content {
      width: 200px;
      height: 310px;
      margin-right: 7%;
  }
  .full-content h3{
    padding-left: 67%;
  }

  .partial-content{
      width: 200px;
      height: 310px;
      margin-right: 7%;
      font-size: 80%;
      margin-right: 7%;
  }
  .container p {
    left: -100px;
  }
  .textoDescripcion{
    left: -50px;
    padding-right: 40%;
  }
  .container h3{
    padding-right: 40%;
  }
}
@media screen and (min-width: 100px) and (max-width: 275px) {
  .container h3{
    padding-right: 50%;
  }
  .fases{
      padding-left: 5%;
      font-size: 80%;
      flex-wrap: wrap;
  }
  .container{
      width: 150px;
      margin: 30px;
      margin-bottom: 5%;
      margin-left: 200px;
  }
  .full-content {
      width: 150px;
      height: 230px;
      margin-right: 7%;
  }
  .full-content h3{
    padding-left: 55%;
  }

  .partial-content{
      width: 150px;
      height: 230px;
      margin-right: 7%;
      font-size: 80%;
      margin-right: 7%;
  }
  .container p {
    left: -80px;
  }
  .textoDescripcion{
    margin-left: -50px;
    margin-right: 50px;
    padding-right: 25%;
  }
}

  .botonContacto{
    background-color: transparent;
    color:white;
    border: 1px solid white;
    padding: 1vh;
    border-radius: 1vh;
  }
  .botonContacto:hover{
    color: #de9d3c;
    border-color: #de9d3c;
  }
  .categoria {
    width: 300px;
    height: 120px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 15px;
    background-size: cover; /* Hace que la imagen cubra todo el fondo */
    background-position: center; /* Centra la imagen verticalmente */
    background-repeat: no-repeat; /* Evita la repetición de la imagen */
    color: #333333;
    width: calc(25% - 15px);
    border: 1px solid black;
  }

  .categorias{
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding-left: 25px;
    padding-right: 20px;
    max-width: 1350px;
  }

  @media screen and (min-width: 750px) and (max-width: 1050px) {
    .categoria{
      width: calc(33.3% - 15px);
    }
  }

  @media screen and (min-width: 470px) and (max-width: 749px) {
    .categoria{
      width: calc(50% - 15px);
    }
  }

  @media screen and (min-width: 1px) and (max-width: 469px) {
    .categoria{
      width: calc(100% - 0px);
    }
  }

  .categoria2 {
    display: flex;
    align-items: center;
    color: #333333;
    width: calc(33.33% - 15px);
    margin: 10px 0px;
    cursor: pointer;
  }
  @media (max-width: 650px) {
    .categoria2 {
      width: 100%;
    }
  }
  .categoria2 h5{
    margin-top: auto;
    margin-bottom: auto;
  }

  .categorias2{
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding-left: 45px;
    padding-right: 20px;
    max-width: 1350px;
    margin-bottom: 50px;
    margin-left:auto;
    margin-right:auto;
  }


  .imagenNosotros {
    background-image: url("{{ asset('storage/imagenes/conocenos.jpg') }}");
    background-size: cover; /* Hace que la imagen de fondo se ajuste al ancho */
    width: 50%;
    aspect-ratio: 12 / 9; /* Proporción de aspecto de la imagen (ejemplo 16:9) */
    order:1;
  }

  .contenedorNosotros{
    display: flex;
    flex-direction: row;
  }

  .textoNosotros{
    width: 50%;
    background: linear-gradient(to right, #000000, #282828);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 25px 30px;
    order:2;
  }
  @media (max-width: 768px) {
    .contenedorNosotros {
      flex-direction: column;
    }

    .imagenNosotros,
    .textoNosotros {
      width: 100%;
    }
    .imagenNosotros{
      order:2;
    }
    .textoNosotros{
      order:1;
    }
  }

  /* .carousel-inner{
    height: 300px;
  } */

  .botonContactar {
    background-color: white;
    color: black;
    border: none;
    padding: 8px 15px;
    transition: all 0.3s ease;
    border-radius: 5px;
  }

  .botonContactar:hover {
    background-color: transparent;
    color: white;
    border: 1px solid white;
  }
  /* .imagenBloqueDatos{
    border-radius: 50%;
    background-color: #78be20;
  } */

</style>
<script src="{{ asset('js/script.js') }}" defer></script>
@endsection



@section('content')
{{-- <div>
  <img src="{{ asset('storage/imagenes/bannerbild.jpeg') }}" alt="fábrica" width="100%" height="auto">
</div> --}}


{{-- <div style="background-image: url('{{ asset('storage/imagenes/imagenInicio.jpeg') }}'); 
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center; 
            height: 420px;
            margin: 0 auto; /* Centra el div horizontalmente */
            padding: 20px;
">
  <div style="float: right; 
              margin-top: 25px; 
              background-color: rgba(211, 211, 211, 0.8); 
              border-radius: 8px; 
              padding: 15px;">
    <h3 style="opacity: 1;color:black;">Herramientas Diamantadas de alta calidad</h3>
    <p style="opacity: 1;color:black;">
      Potencia tus proyectos con herramientas de alta calidad que destacan por<br> su durabilidad y rendimiento excepcional.
    </p>
  </div>
</div> --}}






<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active"> <!-- Agrega la clase active aquí -->
      <img src="https://www.ssdc-tw.com/eimages/2023SSDC_ba_257208_014651_7186624.jpg" alt="imagen carrusel 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Texto 1</h5>
        <p>texto1</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.ssdc-tw.com/eimages/2023SSDC_ba_212169_015751_6104483.jpg" alt="imagen carrusel 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Texto 2</h5>
        <p>texto2</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.ssdc-tw.com/eimages/2023SSDC_ba_235585_010852_7071226.jpg" alt="imagen carrusel 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Texto 3</h5>
        <p>texto3</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




  {{-- <div class="datos" id="datos">
    <div class="bloqueDatos">
      <img src="{{ asset('storage/imagenes/medalla.png') }}" alt="medalla">
      <div>
        <h4>Servicio de calidad</h3>
        <p>Nuestro mayor compromiso es brindar un servicio excelencia y productos de calidad</p>
      </div>
    </div>

    <div class="bloqueDatos">
      <img src="{{ asset('storage/imagenes/roca.png') }}" alt="medalla">
      <div>
        <h4>Natural y único</h3>
        <p>La piedra natural ofrece una gama de oportunidades y atención a detalles única.</p>
      </div>
    </div>

    <div class="bloqueDatos">
      <img src="{{ asset('storage/imagenes/infinito.png') }}" alt="medalla">
      <div>
        <h4>Amplia variedad</h3>
        <p>Tenemos el más grande inventario de productos y una selección única de combinaciones.</p>
      </div>
    </div>
  </div> --}}
  


  <div class="datos" id="datos">
    <div class="bloqueDatos">
      <div class="imagenBloqueDatos">
        <img src="{{ asset('storage/imagenes/medalla.png') }}" alt="calidad" id="calidad" data-ruta="{{ asset('storage/imagenes') }}" onmouseover="cambiarImagen('medallaAmarillo','calidad')" onmouseout="cambiarImagen('medalla','calidad')">
      </div>
      <div>
        <h4>Servicio de calidad</h3>
      </div>
    </div>

    <div class="bloqueDatos">
      <div class="imagenBloqueDatos">
        <img src="{{ asset('storage/imagenes/tecnologia.png') }}" alt="medalla" id="tecnologia" data-ruta="{{ asset('storage/imagenes') }}" onmouseover="cambiarImagen('tecnologiaAmarillo','tecnologia')" onmouseout="cambiarImagen('tecnologia','tecnologia')">
      </div>
      <div>
        <h4>La tecnología más avanzada</h3>
      </div>
    </div>

    <div class="bloqueDatos">
      <div class="imagenBloqueDatos">
        <img src="{{ asset('storage/imagenes/infinito.png') }}" alt="medalla" id="infinito" data-ruta="{{ asset('storage/imagenes') }}" onmouseover="cambiarImagen('infinitoAmarillo','infinito')" onmouseout="cambiarImagen('infinito','infinito')">
      </div>
      <div>
        <h4>Amplia variedad</h3>
      </div>
    </div>
  </div>




    <script>
      function cambiarImagen(imagen, id) {
        let ruta = document.getElementById(id).getAttribute('data-ruta');
        ruta = ruta + '/' + imagen + '.png';
        document.getElementById(id).src = ruta;
      }
    </script>



  <script>
    document.getElementById("enlaceInicio").style.color = "#de9d3c";
  </script>



<h3 style="text-align: center;margin-top: 40px;margin-bottom: 35px;">Nuestros productos</h3>

  <div class="categorias2">
    
    <div class="categoria2" onclick="window.location.href = '/categorias/abrasivos-tradicionales';">
      <img src="{{ asset('storage/imagenes/iconosInicio/abrasivoTradicional.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Abrasivos tradicionales</h5>
    </div>

    <div class="categoria2" onclick="window.location.href = '/categorias/adhesivos-y-masillas';">
      <img src="{{ asset('storage/imagenes/iconosInicio/silicona.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Adhesivos y Masillas</h5>
    </div>

    <div class="categoria2" onclick="window.location.href = '/categorias/complementos';">
      <img src="{{ asset('storage/imagenes/iconosInicio/metro.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Complementos</h5>
    </div>

    <div class="categoria2" onclick="window.location.href = '/categorias/consumibles-maquinaria';">
      <img src="{{ asset('storage/imagenes/iconosInicio/tuerca.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Consumibles Maquinaria</h5>
    </div>

    <div class="categoria2" onclick="window.location.href = '/categorias/corte';">
      <img src="{{ asset('storage/imagenes/iconosInicio/cortar.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Corte</h5>
    </div>

    <div class="categoria2" onclick="window.location.href = '/categorias/desbaste';">
      <img src="{{ asset('storage/imagenes/iconosInicio/desbaste.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Desbaste</h5>
    </div>

    <div class="categoria2" onclick="window.location.href = '/categorias/elevacion-y-manipulacion';">
      <img src="{{ asset('storage/imagenes/iconosInicio/elevacion.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Elevación y manipulación</h5>
    </div>

    <div class="categoria2" onclick="window.location.href = '/categorias/herramientas';">
      <img src="{{ asset('storage/imagenes/iconosInicio/taladro.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Herramientas</h5>
    </div>


    <div class="categoria2" onclick="window.location.href = '/categorias/herramientas-CNC';">
      <img src="{{ asset('storage/imagenes/iconosInicio/laser.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Herramientas CNC</h5>
    </div>

    <div class="categoria2" onclick="window.location.href = '/categorias/maquinaria';">
      <img src="{{ asset('storage/imagenes/iconosInicio/maquinaria.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Maquinaria</h5>
    </div>

    <div class="categoria2" onclick="window.location.href = '/categorias/perfiracion';">
      <img src="{{ asset('storage/imagenes/iconosInicio/perforacion.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Perforación</h5>
    </div>

    <div class="categoria2" onclick="window.location.href = '/categorias/pulido';">
      <img src="{{ asset('storage/imagenes/iconosInicio/pulido.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Pulido</h5>
    </div>

    
    <div class="categoria2" onclick="window.location.href = '/categorias/tratamiento-piedra';">
      <img src="{{ asset('storage/imagenes/iconosInicio/piedra.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Tratamiento de la piedra</h5>
    </div>

    <div class="categoria2" onclick="window.location.href = '/categorias/proteccion-laboral';">
      <img src="{{ asset('storage/imagenes/iconosInicio/mascara.png') }}" alt="fábrica" width="25px" height="auto" style="margin-right: 8px;">
      <h5>Protección laboral</h5>
    </div>
  </div>






















{{-- apartado quienes somos --}}


<div class="contenedorNosotros">
  <div class="imagenNosotros"></div>

  <div class="textoNosotros">
    <h3>
      Nosotros
    </h3>
    <p>En [nombre] nos esforzamos por mantener los más altos estándares de calidad, utilizando tecnología de vanguardia y materiales premium para crear herramientas que sean sinónimo de durabilidad y rendimiento excepcional. Ya sea que estés involucrado en la construcción, la producción industrial o la industria manufacturera, estamos aquí para ser tu socio confiable en el éxito de cada proyecto.</p>
  </div>
</div>
{{-- <div style="width: 100%; height: 200px; background-color:#282828; display: flex; align-items: center; justify-content: center;">
  <h5 style="color:white;">Contacta con nosotros para una consulta más personalizada</h5>
  <button class="botonContactar" style="margin-left: 50px;">Contactar</button>
</div> --}}


<script>
  var elementoContacto = document.getElementById('liInicio');
    if (elementoContacto) {
        elementoContacto.classList.remove('menuEnlaces');
    }
    elementoContacto.style.borderBottom = '1px solid white';
</script>


@endsection