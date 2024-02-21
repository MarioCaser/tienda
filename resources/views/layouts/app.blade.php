<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer>
      // window.addEventListener('scroll', function() {
      //   var menu = document.getElementById('header');
    
      //   if (window.pageYOffset >= 40) {
      //       menu.style.top = '0';
      //       menu.style.position = 'fixed';
      //       document.getElementById("inicioFiltro").style.marginTop = document.getElementById("header").offsetHeight + "px";
      //   } else {
      //       menu.style.top = 40-window.pageYOffset + 'px';
      //       menu.style.position = '';
      //       document.getElementById("inicioFiltro").style.marginTop = "0px";
      //   }
      // });
    </script>

  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  @yield('styles')

  <style>
    .menu-added li:last-child {
        border-bottom: none; /* Quita la línea horizontal después del último elemento de la lista */
      }

      .menu-added {
        list-style: none;
        margin: 0;
        padding: 0;
        width: 100%;
      }

      .menu-added li {
        border-bottom: 1px solid #666969;
        width: 94%;
        margin: 0 3%; /* Agrega un pequeño margen a la izquierda y derecha del elemento li */
      }

      .menu-added li a {
        display: block;
        color: white;
        width: 100%;
        height: 100%;
        transition: color 0.25s ease;
        padding: 10px 0; /* Agrega un relleno de 5 píxeles en la parte superior e inferior del elemento a */
        font-size: 18px; /* Cambia el tamaño de fuente a 18 píxeles */
      }

      .menu-added li a:hover {
        color: #bb995b;
        text-decoration: none;
      }

      
      header nav ul li {
        height: 25px;
        /* list-style-type: none; */
        overflow: hidden;
      }

      .menuEnlaces {
        /* text-decoration: none; */
        display: block;
        position: relative;
      }

      .menuEnlaces::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 1px;
        background-color: white;
        transition: width 0.3s ease;
      }

      .menuEnlaces:hover::after {
        width: 100%;
      }
      
  </style>
</head>
<body>

  <div class="telefono">
      <img class="logo" src="{{ asset('storage/imagenes/logo.png') }}" alt="móvil" height="85%">
      <label>+34 666 666 666</label>
  </div>
  <header id="header">
    <div class="logo">
      <a href="/">
        <img src="{{ asset('storage/imagenes/logo3.png') }}" alt="Logo" width="70px">
      </a>
    </div>
    <nav>
      <ul>
        <li  class="menuEnlaces" id="liInicio"><a href="/" style="text-decoration: none;" id="enlaceInicio">Inicio</a></li>
        <li class="menuEnlaces"><a href="/nosotros" style="text-decoration: none;" id="enlaceNosotros">Nosotros</a></li>
        <li class="menuEnlaces" id="liProductos"><a href="/categorias" style="text-decoration: none;" id="enlaceProductos">productos</a></li>
        {{-- <li><a href="/inspiracion" style="text-decoration: none;">Inspiración</a></li> --}}
        <li class="menuEnlaces" id="liContacto"><a href="/contacto"  style="text-decoration: none;" id="enlaceContacto">Contáctanos</a></li>
      </ul>
      <a class="menu-icon" href="#" id="showMenu">☰</a>
    </nav>
  </header>
  <div id="iconMenu"></div>
  <main>
    @yield('content')
  </main>
  <footer>
    <div class="contenido-pie">
      <p>© 2023 - Nombre del sitio web</p>
      <div style="cursor:pointer;display:flex;">
        <img src="{{ asset('storage/imagenes/email.png') }}" alt="logo email" width="30px" style="margin-left: 40px;" onclick="copiarTexto('correo@example.com')">
        <span onclick="copiarTexto('correo@example.com')" class="textoFooter" style="margin-left:5px;margin-bottom:0;margin-top:3px;">correo@example.com</span>
      </div>
      <div style="cursor:pointer;display:flex;">
        <img src="{{ asset('storage/imagenes/telefonoFooter.png') }}" alt="logo teléfono" height="25px" style="margin-left: 40px;" onclick="copiarTexto('+34 666 666 666')">
        <span onclick="copiarTexto('+34 666 666 666')" class="textoFooter" style="margin-left:5px;margin-bottom:0;">+34 666 666 666</span>
      </div>
      <div id="ubicacion" style="cursor:pointer;display:flex;">
        <img src="{{ asset('storage/imagenes/ubicacionFooter.png') }}" alt="logo ubicación" height="25px" style="margin-left: 40px;">
        <span class="textoFooter" style="margin-left:5px;margin-bottom:0;">Calle Falsa 123</span>
      </div>
    </div>
  </footer>
  
    @yield('scripts')

    <script>

      

      function copiarTexto(texto) {
        var textarea = document.createElement('textarea');
        textarea.value = texto;
  
        // Añade el elemento al DOM
        document.body.appendChild(textarea);
  
        // Selecciona y copia el contenido del elemento de texto
        textarea.select();
        document.execCommand('copy');
  
        // Elimina el elemento de texto del DOM
        document.body.removeChild(textarea);
  
        // Puedes agregar una lógica adicional, como mostrar un mensaje de éxito
        alert('¡Texto copiado al portapapeles!');
      }

      function redirigirAMaps() {
        // Cambia la URL a tu ubicación específica de Google Maps
        window.open('https://maps.app.goo.gl/9TBtjaTiyB1XLZYQ9', '_blank');
      }
      document.getElementById("ubicacion").onclick = () => {
        redirigirAMaps();
      }
    </script>



<script>
  document.getElementById("showMenu").onclick = () => {
    let menu = document.getElementById("iconMenu");
    const numHijos = menu.childElementCount;
    let agregar = true;
    if(numHijos > 0)
      agregar = false;
      if(agregar){
        console.log(numHijos);
        const menuContainer = document.createElement('div');
        menuContainer.classList.add('menu-container-added');

        const menuList = document.createElement('ul');
        menuList.classList.add('menu-added');

        const opcion1 = document.createElement('li');
        const opcion1Enlace = document.createElement('a');
        opcion1Enlace.href = '/';
        opcion1Enlace.appendChild(document.createTextNode('Inicio'));
        opcion1.appendChild(opcion1Enlace);

        const opcion2 = document.createElement('li');
        const opcion2Enlace = document.createElement('a');
        opcion2Enlace.href = '/nosotros';
        opcion2Enlace.appendChild(document.createTextNode('Nosotros'));
        opcion2.appendChild(opcion2Enlace);

        const opcion3 = document.createElement('li');
        const opcion3Enlace = document.createElement('a');
        opcion3Enlace.href = '/comprar';
        opcion3Enlace.appendChild(document.createTextNode('Productos'));
        opcion3.appendChild(opcion3Enlace);

        const opcion4 = document.createElement('li');
        const opcion4Enlace = document.createElement('a');
        opcion4Enlace.href = '/inspiracion';
        opcion4Enlace.appendChild(document.createTextNode('Inspiración'));
        opcion4.appendChild(opcion4Enlace);

        const opcion5 = document.createElement('li');
        const opcion5Enlace = document.createElement('a');
        opcion5Enlace.href = '/contacto';
        opcion5Enlace.appendChild(document.createTextNode('Contáctanos'));
        opcion5.appendChild(opcion5Enlace);
        
        // Continúa creando los demás elementos del menú aquí...

        menuList.appendChild(opcion1);
        menuList.appendChild(opcion2);
        menuList.appendChild(opcion3);
        menuList.appendChild(opcion4);
        menuList.appendChild(opcion5);

        // Añade los demás elementos del menú a la lista aquí...

        menuContainer.appendChild(menuList);
        menu.insertBefore(menuContainer, menu.firstChild);
      }
      else{
        console.log(numHijos);
        console.log(menu);
        while (menu.firstChild)
          menu.removeChild(menu.firstChild);
      }
    agregar = true;
    if(numHijos > 0)
      agregar = false;
  }


    function checkScreenWidth() {
      // Obtener el ancho de pantalla
      const screenWidth = window.innerWidth;

      // Obtener el elemento con id="iconMenu"
      const iconMenu = document.getElementById("iconMenu");

      // Si el ancho de pantalla es mayor a 531px, eliminar todos los hijos del elemento iconMenu
      if (screenWidth > 531) {
        while (iconMenu.firstChild) {
          iconMenu.removeChild(iconMenu.firstChild);
        }
      }
    }

  // Llamar a la función checkScreenWidth cuando se cargue la página y cada vez que se redimensione la pantalla
  window.addEventListener("load", checkScreenWidth);
  window.addEventListener("resize", checkScreenWidth);
</script>








</body>
</html>