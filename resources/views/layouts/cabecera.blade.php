
      <!DOCTYPE html>
      <html lang="es">
      <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <!-- Esta linea de codigo hace que la pagina sea responsive -->
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scalable=1.0, minimum-scale=1.0 shrink-to-fit=no">

      <!-- Con esta linea estamos agregando Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- Con esta linea estamos agregando los estilos css, se hiso un archivo de estilos en la carpeta css -->
      <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
      <!-- link para agregar nuevas fuentes y el script para los iconos de fontawesome -->
      <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/538a96cd4c.js" crossorigin="anonymous"></script>
      <!-- scrollreveal-->
      <script src="https://unpkg.com/scrollreveal"></script>
      <!-- titulo que aparecerá en la pestaña de la pagina -->
      <title >Pinturas Contimex</title>
      </head>

      <body>



      <header>
        <div class="logo_contimex">
        <a href="/inicio">  <img src="images/ctmx.png" width="300" height="80" alt="error de imagen"></a>
      <a class="quiero" href="">¿QUIERES SER DISTRIBUIDOR?
           <i class="icono1 fas fa-truck-moving"></i></a>

           <a class="ubica" href="/contacto">UBICA TU TIENDA
           CONTIMEX
          <i class="icono2 fas fa-map-marker-alt"></i></a>


          <a href="https://www.facebook.com/pinturas.contimex/"> <i class="fb  fab fa-facebook-square"></i></a>
          <a href="https://twitter.com/?lang=es"><i class="tw fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/?hl=es-la"><i class="itg fab fa-instagram"></i></a>
        </div>


      <!-- se puede poner tambien expand-md para modificar el tamaño del responsive -->
        <nav  class="navbar navbar-expand-lg" role="navigation">

          <a class="navbar-brand" href="/inicio">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>



          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="menu">

              <li class="nav-item active">
                <a class="nav-link" href="/inicio">INICIO <span class="sr-only">(current)</span></a>
              </li>



              <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              PRODUCTOS</a>

                              <div class="submenu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/vinilicas">Vinilicas</a>
                                <a class="dropdown-item" href="/esmaltes">Esmaltes</a>
                                <a class="dropdown-item" href="/impermeabilizantes">Impermeabilizantes</a>
                                <a class="dropdown-item" href="/pegamentos">Pegamentos y selladores</a>
                                <a class="dropdown-item" href="/especialidades">Especialidades</a>
                                <a class="dropdown-item" href="/industrial">Industriales</a>

                              </div>
                            </li>
                          </li>


              <li class="nav-item">
                <a class="nav-link"  href="/nosotros">NOSOTROS</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link"  href="/contacto">CONTACTO</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link"  href="/chat">CHAT</a>
                    </li>

                </ul>
              </div>
            </nav>
          </header>
