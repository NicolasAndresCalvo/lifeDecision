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
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
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
  </head>
  <body id="colorIniciar">
    <!-- Habia 5 br -->
    <br><br><br>
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
            <!-- Primer Columna Nombre y Apellido -->
            <div class="col-md-6">
              <!-- Nombre -->
              <div class="md-form">
                <input name="Nombre" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,20}$"  title="Entre 5 y 20 letras del Abecedario" placeholder="" type="text" id="Nombre" class="form-control" required>
                <label for="i1">Nombre</label>
              </div>
              <!-- Apellido -->
              <div class="md-form">
                <input name="Apellido" placeholder="" type="text" id="i2" class="form-control" required>
                <label for="i2">Apellido</label>
              </div>
            </div>
            <!-- Segunda Columna Usuario y Contraseña -->
            <div class="col-md-6">
              <!-- Usuario -->
              <div class="md-form">
                <input name="Usuario" placeholder="" type="text" id="i3" class="form-control" required>
                <label for="i3">Usuario</label>
              </div>
              <!-- Contraseña -->
              <div class="md-form">
                <input name="Contrasenia" placeholder="" type="password" id="Contrasenia" class="form-control" required>
                <label for="i4">Contraseña</label>
              </div>
            </div>
            <!-- Tercer Columna Email y Telefono -->
            <div class="col-md-12">
              <!-- Email -->
              <div class="md-form">
                <input name="Email" placeholder="" type="Email" id="i5" class="form-control" required>
                <label for="i5">Email</label>
              </div>
              <!-- Telefono -->
              <div class="md-form">
                <input name="Curso" placeholder="" type="text" id="i6" class="form-control" required>
                <label for="i6">Telefono</label>
              </div>
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
  </body>
</html>
