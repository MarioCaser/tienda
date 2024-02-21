@extends('layouts.app')


@section('styles')
    <style>
        h3{
            text-align: center;
        }
        .container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            flex-direction: column;
            padding-left: 50px;
            padding-right: 50px;
        }
        .div1{
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .div2{
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }
        .box{
            flex:1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 50%;
        }
        .box img{
            width: 100%;
        }
        @media screen and (max-width: 800px) {
            .div1 {
                flex-direction: column;
            }
            .box{
                width:100%;
            }
            .div2 {
                flex-direction: column-reverse;
            }
        }
        .valores{
            display: flex;
            padding-left: 1%;
            padding-right: 1%;
        }
        .valores div{
            margin: 2%;
            text-align: center;
            flex: 1;
        }
        .valores div p{
            font-size: 14px;
        }
        .valores div h3{
            margin-top: 15px;
        }
        @media screen and (max-width: 800px) {
            .valores {
                flex-direction: column;
            }
            .valores div{
                max-width: 350px;
                margin-left: auto;
                margin-right: auto;
            }
        }
        
    </style>
@endsection



@section('content')

    <h3 style="margin-top: 30px;margin-bottom: 30px;">Nosotros</h3>
    <div class="container">
        <div class="div1">
            <div class="box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4ixvB7LyADpxzsQ6dtiKum6Igjq8ehXd98IU5dQ8dmg&s" alt="Imagen 1">
            </div>
            <div class="box">
                <div style="width: 100%;padding: 10%;">
                    <h4>La experiencia a su servicio.</h4>
                    <p>Novelec (Novedades Eléctricas) es una empresa fundada hace 20 años dedicada a la distribución mayorista de materiales eléctricos, fluidos y climatización. A finales de 2012 se inicia un proyecto de ámbito nacional impulsado por el entusiasmo de un grupo de profesionales expertos en la distribución. Se construye sobre tres grandes pilares: un equipo humano altamente cualificado, una experiencia de más de 30 años en el sector de la distribución y una elevada solvencia.</p>
                </div>
            </div>
        </div>
        <div class="div2">
            <div class="box">
                <div style="width: 100%;padding: 10%;">
                    <h4>Porqué utilizar herramientas [empresa]</h4>
                    <p>En Casals llevamos más de 140 años diseñando, fabricando y comercializando herramientas robustas, prácticas y fáciles de usar. Nuestras herramientas gozan de mucho prestigio tanto entre aficionados al bricolaje como entre los perfiles más profesionales. ¡Confía en los que saben y apuesta por la experiencia!</p>
                </div>
            </div>
            <div class="box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4ixvB7LyADpxzsQ6dtiKum6Igjq8ehXd98IU5dQ8dmg&s" alt="Imagen 4">
            </div>
        </div>
    </div>

    <br><br><br>

    <div class="valores">
        <div>
            <img src="{{ asset('storage/imagenes/nosotros/mision.png') }}" alt="diana" width="75px">
            <h3>Misión</h3>
            <p>Ser una organización especialista en la distribución de materiales para la instalación y mantenimiento en electricidad, fluidos, clima y VDI, dando servicio, asesoramiento y soluciones a nuestros clientes en todo el territorio español.</p>
        </div>
        <div>
            <img src="{{ asset('storage/imagenes/nosotros/vision.png') }}" alt="diana" width="75px">
            <h3>Visión</h3>
            <p>Liderar el mercado como principal socio estratégico en soluciones integradas para nuestros clientes, ofreciendo bienes de alta calidad y servicios innovadores, en un ambiente laboral excelente, responsable y de continua mejora profesional.</p>
        </div>
        <div>
            <img src="{{ asset('storage/imagenes/nosotros/valores.png') }}" alt="diana" width="75px">
            <h3>Valores</h3>
            <p>El equipo humano es el principal activo en el que basa su modelo NOVELEC. Se apuesta por el talento, invirtiendo en la formación de sus profesionales y en la promoción interna para crear sinergias de equipo que favorecen al buen ambiente laboral y la consecución de los objetivos.</p>
        </div>
    </div>

    <br>

    <script>
        document.getElementById("enlaceNosotros").style.color = "#de9d3c";
    </script>
@endsection