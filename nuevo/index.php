<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">


  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/tether.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/main.css">

</head>

<body>
  <div id="navbar-arriba" class="navbar navbar-static-top navbar-light bg-inverse" style="margin-bottom: 10px;">
    <img src="images/LOGO-PEQUEO.png" alt="Imagen Inoqua 1" width="250px">
  </div>
  <div class="container-fluid container-central">

    <div id="container-carousel" class="container">
      <div id="carousel-homepage" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-homepage" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-homepage" data-slide-to="1"></li>
          <li data-target="#carousel-homepage" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="images/01.jpg" alt="Imagen Inoqua 1">
          </div>
          <div class="carousel-item">
            <img src="images/02.jpg" alt="Imagen Inoqua 2">
          </div>
          <div class="carousel-item">
            <img src="images/03.jpg" alt="Imagen Inoqua 3">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-homepage" role="button" data-slide="prev">
          <span class="icon-prev" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-homepage" role="button" data-slide="next">
          <span class="icon-next" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!--container-carousel-->
    <div id="container-menu" class="container">
      <nav id="menu" class="navbar ">
        <button class="navbar-toggler hidden-md-up" data-toggle="collapse" data-target="#menu-navegacion" aria-controls="menu-navegacion"
          aria-expanded="false" aria-label="Toggle navigation">
          &#9776;
        </button>
        <div class="collapse navbar-toggleable-sm" id="menu-navegacion">
          <ul class="nav navbar-nav nav-pills">
            <li class="nav-item">
              <a class="nav-item" href="index.html">Quienes Somos</a>
            </li>
            <li class="nav-item">
              <a class="item" href="formacion.html">Formaci&oacute;n</a>
            </li>
            <li class="nav-item">
              <a class="item" href="empresas-alimentarias.html">Empresas alimentarias</a>
            </li>
            <li class="nav-item">
              <a class="item" href="asesoramiento.html">Asesoramiento</a>
            </li>
            <li class="nav-item">
              <a class="item" href="registro.html">REGISTRO</a>
            </li>
            <li class="nav-item">
              <a class="item" href="capacitacion.html">capacitaci&oacute;n</a>
            </li>
            <li class="nav-item">
              <a class="item" href="extras.html">Extras</a>
            </li>
            <li class="nav-item">
              <a class="item" href="contacto.html">Contacto</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--container-menu-->

    <div id="container-contenido" class="container-fluid" style="margin-top: 10px;">


      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="bg-light text-dark">
            <h3 class="text-md-center">Quienes somos</h3>
            <p>
              InoQua fue creada para satisfacer las necesidades de la industria y establecimientos que requieran acompañamiento para cumplir
              con las normas vigentes en producci&oacute;n
            </p>
          </div>
        </div>
      </div>

      <div class="row">
          <div class="col-md-4 offset-md-2">
              <div class="bg-light text-dark">
                  <h3 class="text-md-center">Quienes somos</h3>
                  <p>
                    InoQua fue creada para satisfacer las necesidades de la industria y establecimientos que requieran acompañamiento para cumplir
                    con las normas vigentes en producci&oacute;n
                  </p>    
              </div>
          </div>
          <div class="col-md-4">
              <div class="bg-light text-dark">
                  <h3 class="text-md-center">Quienes somos</h3>
                  <p>
                    InoQua fue creada para satisfacer las necesidades de la industria y establecimientos que requieran acompañamiento para cumplir
                    con las normas vigentes en producci&oacute;n
                  </p>    
              </div>
          </div>
      </div>

    </div>
    <!--container-contenido-->
  </div>
  <!--container-central-->
</body>

</html>