<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LifeDecision</title>
      <!-- SCRIPTS -->
      <!-- JQuery -->
      <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="js/tether.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="js/mdb.min.js"></script>
      <!-- Referencias de Estilos css -->
      <link href="css\style.css" rel="stylesheet">
      <link href="..\css\stylemdb.css" rel="stylesheet">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="css/mdb.min.css" rel="stylesheet">
      <!-- Referencias de Estilos css -->
      <!-- Referencias de Estilos css -->
      <link href="css\style.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:600italic' rel='stylesheet' type='text/css'>    
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/Funcion.js"></script>
      <style>
        .btn .fas, .btn .fab, .btn .far {
          margin-left: 3px;
        }

        h6 {
          line-height: 1.7;
        }

        footer.page-footer {
          margin-top: 0px;
          padding-top: 0px;
        }

        body {
          background-color: #eee;
        }

        .btn.peach-gradient {
          color: #fff !important;
        }

        .map-container-section {
          overflow:hidden;
          /* padding-bottom:56.25%; */
          position:relative;
          height:0;
        }
        .map-container-section iframe {
          left:0;
          top:0;
          height:100%;
          width:100%;
          position:absolute;
        }
      </style>
  </head>
  <body id="colorIniciar">
    <!-- Habia 5 br -->
    <br><br><br><br><br>
    <!--Main Layout-->
    <main>
      <div class="container-fluid mb-5">
        <!--Grid row-->
        <div class="row" style="margin-top: -100px;">
          <!--Grid column-->
          <div class="col-md-12">
            <div class="card pb-5">
              <div class="card-body">
                <h2 class="font-weight-bold my-4 text-center font-weight-bold">
                  <strong>REGISTRACION</strong>
                </h2>
                <hr>
                <!--Start Form-->
                <div class="container">
                  <div class="row">
                    <!-- Imagen para registracion -->
                    <div class="col-md-12">
                      <div id="">
                        <img src="/images/ministerios/evangelismo/Evangelismo_Foto1.jpg" alt="Responsive image"class="img-fluid" />
                        <br>
                      </div>
                    </div>
                    <!-- Formulario para registracion -->
                    <div class="col-md-12">
                      <form id="Registracion" class="" action="ConsultaRegistracion.php" method="post">
                        <div class="row">
                          <!--Section description-->
                          <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur
                          adipisicing elit. Fugit, error amet numquam iure provident voluptate
                          esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>
                          <!--Grid column-->
                          <div class="col-md-6">
                            <div class="md-form">
                              <input type="text" id="contact-user" class="form-control" required>
                              <label for="contact-name" class="">Usuario</label>
                            </div>
                          </div>
                          <!--Grid column-->
                          <!--Grid column-->
                          <div class="col-md-6">
                            <div class="md-form">
                              <input type="password" id="contact-password" class="form-control" required>
                              <label for="contact-email" class="">Contraseña</label>
                            </div>
                          </div>
                          <!--Grid column-->
                          <!--Grid column-->
                          <div class="col-md-6">
                            <div class="md-form">
                              <input pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,20}$"  title="Entre 5 y 20 letras del Abecedario" type="text" id="contact-name" class="form-control" required>
                              <label for="contact-name" class="">Nombre</label>
                            </div>
                          </div>
                          <!--Grid column-->
                          <!--Grid column-->
                          <div class="col-md-6">
                            <div class="md-form">
                              <input type="text" id="contact-email" class="form-control" required>
                              <label for="contact-email" class="">Apellido</label>
                            </div>
                          </div>
                          <!--Grid column-->
                          <!--Grid column-->
                          <div class="col-md-6">
                            <div class="md-form">
                              <input type="text" id="contact-email" class="form-control" required>
                              <label for="contact-name" class="">Email</label>
                            </div>
                          </div>
                          <!--Grid column-->
                          <!--Grid column-->
                          <div class="col-md-6">
                            <div class="md-form">
                              <input type="text" id="contact-telefono" class="form-control" required>
                              <label for="contact-email" class="">Telefono</label>
                            </div>
                          </div>
                          <!--Grid column-->
                        </div>
                        <!-- Cuarta Columna Login -->
                        <div class="col-md-12">
                          <div class="md-form form-group">
                            <button type="submit"  class="btn btn-primary btn-lg">Login</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!--Finish Form-->
              </div>
            </div>
          <!--Grid column-->
          </div>
        <!--Grid row-->
        </div>
      </div>
    </main>
    <!--Main Layout-->
    <!--  SCRIPTS  -->
    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </body>
</html>
