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
  <section>
      <div id="map-container-demo-section" class="z-depth-1-half map-container-section mb-4" style="height: 500px">
        <iframe src="https://maps.google.com/maps?q=Manhatan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0"></iframe>
      </div>
    </section>
  <main>
    <div class="container-fluid mb-5">
      <!--Grid row-->
      <div class="row" style="margin-top: -100px;">
        <!--Grid column-->
        <div class="col-md-12">
          <div class="card pb-5">
            <div class="card-body">
              <div class="container">
                <!--Section: Contact v.2-->
                <section class="section">
                  <!--Section heading-->
                  <h2 class="font-weight-bold text-center h1 my-5">Dejanos tu mensaje</h2>
                  <!--Section description-->
                  <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Fugit, error amet numquam iure provident voluptate
                    esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>
                  <div class="row pt-5">
                    <!--Grid column-->
                    <div class="col-md-8 col-xl-9">
                      <form>
                        <!--Grid row-->
                        <div class="row">
                          <!--Grid column-->
                          <div class="col-md-6">
                            <div class="md-form">
                              <input type="text" id="contact-name" class="form-control">
                              <label for="contact-name" class="">Nombre</label>
                            </div>
                          </div>
                          <!--Grid column-->
                          <!--Grid column-->
                          <div class="col-md-6">
                            <div class="md-form">
                              <input type="text" id="contact-email" class="form-control">
                              <label for="contact-email" class="">Email</label>
                            </div>
                          </div>
                          <!--Grid column-->
                        </div>
                        <!--Grid row-->
                        <!--Grid row-->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="md-form">
                              <input type="text" id="contact-Subject" class="form-control">
                              <label for="contact-Subject" class="">Asunto</label>
                            </div>
                          </div>
                        </div>
                        <!--Grid row-->
                        <!--Grid row-->
                        <div class="row">
                          <!--Grid column-->
                          <div class="col-md-12">
                            <div class="md-form">
                              <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                              <label for="contact-message">Mensaje</label>
                            </div>
                          </div>
                        </div>
                        <!--Grid row-->
                      </form>
                      <div class="col-md-12">
                          <div class="md-form form-group text-center">
                            <button type="submit"  class="btn btn-indigo btn-rounded mt-5">Log In</button>
                          </div>
                      </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-4 col-xl-3">
                      <ul class="contact-icons text-center list-unstyled">
                        <li>
                          <i class="fas fa-map-marker fa-2x indigo-text"></i>
                          <p>San Francisco, CA 94126, USA</p>
                        </li>
                        <li>
                          <i class="fas fa-phone fa-2x indigo-text"></i>
                          <p>+ 01 234 567 89</p>
                        </li>
                        <li>
                          <i class="fas fa-envelope fa-2x indigo-text"></i>
                          <p>contact@mdbootstrap.com</p>
                        </li>
                      </ul>
                    </div>
                    <!--Grid column-->
                  </div>
                </section>
                <!--Section: Contact v.2-->
              </div>
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

</html>