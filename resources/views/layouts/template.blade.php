<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>C.C. El Encantado</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon2.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo5.png" alt="logo CC El Encantado" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item"><a class="nav-link" href="#services">Visión | Misión | Valores</a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio">Noticias</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">Gestión</a></li>
          <li class="nav-item"><a class="nav-link" href="#team">Voceros</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Solicitudes</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header class="masthead">
    <div class="container">
      <div class="masthead-subheading">Bienvenidos al Consejo Comunal El Encantado</div>
      <div class="masthead-heading text-uppercase">Construyendo Futuro,<br>Fortaleciendo Comunidad</div>
      <a class="btn btn-primary btn-xl text-uppercase" href="#services">Avancemos</a>
    </div>
  </header>
  <!-- Noticias-->
  <section class="page-section" id="services">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Nuestra Visión, Misión y Valores</h2>
        <h3 class="section-subheading text-muted">Somos Residencias El Encantado, haciendo comunidad.</h3>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-solid fa-hands-holding-child fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">Misión</h4>
          <p class="text-muted">Promover el bienestar social, el desarrollo sostenible y la inclusión, trabajando juntos para resolver los desafíos y mejorar la calidad de vida de cada uno de nuestros vecinos.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fa-solid fa-rocket fa-stack-1x fa-inverse"></i>

           
          </span>
          <h4 class="my-3">Visión</h4>
          <p class="text-muted">Ser reconocidos por nuestra capacidad de generar cambios positivos, empoderar a la ciudadanía y construir un entorno seguro y próspero para todos.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fa-solid fa-users-gear fa-stack-1x fa-inverse"></i>
          </span> 
          <h4 class="my-3">Valores</h4>
          <p class="text-muted">Unidad, Compromiso, Transparencia, Solidaridad, Innovación,, Inclusión.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Transparencia-->
  <section class="page-section bg-light" id="portfolio">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Noticias</h2>
        <h3 class="section-subheading text-muted">Mantente informado de la actualidad de Residencias El Encantado.</h3>
      </div>
      <div class="row">
        @yield('content')

      </div>
    </div>
  </section>
  <!-- Proyectos-->
  <section class="page-section" id="about">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Gestión</h2>
        <h3 class="section-subheading text-muted">Gestión transformada en hechos.</h3>
      </div>
      <ul class="timeline">
        <li>
          <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/logo1.png" alt="..." /></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h5 class="text-muted">Julio-Agosto-2023</h5>
              <h6 class="subheading">Creación del Consejo Comunal El Encantado<h6>
              <h6 class="subheading">Primera asamblea comunitaria y elección de la junta directiva.</h6>
            </div>
            <!-- <div class="timeline-body">
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div> -->
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/transmiranda.jpg" alt="..." /></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h5 class="text-muted">Septiembre-2023</h5>
              <h6 class="subheading">Inicio de operaciones servicio Transmiranda</h6> 
              <h6>Lanzamiento de la campaña "Unidos por El Encantado" para fomentar la participación ciudadana</h6>
            </div>
            <!-- <div class="timeline-body">
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div> -->
          </div>
        </li>
        <li>
          <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/rep-via.png" alt="..." /></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h5 class="text-muted">Noviembre 2023</h5>
              <h6 class="subheading">Convocatoria a una asamblea general para discutir la problemática con la reparación de la vía principal</h6>
              <h6 class="subheading">Inicio de gestiones ante la alcaldía de Hatillo y Gobernación de Estado Bolivariano de Miranda por falta de respuesta sobre el proyecto de recuperación de la vía principal.</h6>
            </div>
            <!-- <div class="timeline-body">
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div> -->
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/ini-rep-via.png" alt="..." /></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h5 class="text-muted">Febrero 2024</h5>
              <h6 class="subheading">Inicio del proyecto de reparación de la vía principal. Proyecto acometido en participación conjunta entre Gobernación-Alcadía-Hidrocapital (en proceso)</h6>
            </div>
            <!-- <div class="timeline-body">
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div> -->
          </div>
        </li>
        <li>
          <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/rep-tuberia.png" alt="..." /></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h5 class="text-muted">Marzo 2024</h5>
              <h6 class="subheading">Finalización de las labores de reparación de la tubería de 85 pulgadas por parte de Hidrocapital.</h6>
              <h6 class="subheading">Hidrocapital anuncia la sustitución de 300 metros de la tubería matriz.</h6>
            </div>
            <!-- <div class="timeline-body">
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div> -->
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/coloc-tuberia.png" alt="..." /></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h5 class="text-muted"> 2024</h5>
              <h6 class="subheading">Inicio de la instalación de una nueva tubería de agua de 100 pulgadas en El Encantado como parte de la rehabilitación del Sistema Tuy II.</h6>
            </div>
            <!-- <div class="timeline-body">
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div> -->
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <h5>
              <br/>
              ¡En tí está
              <br/>
              ser parte
              <br/>
              nuestra
              <br/>
              historia!
            </h5>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- Voceros-->
  <section class="page-section bg-light" id="team">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Nuestros Voceros</h2>
        <h3 class="section-subheading text-muted">Equipo comprometido con la continua mejora de la calidad de vida.</h3>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
            <h4>María Navas</h4>
            <p class="text-muted">Unidad Ejecutiva-Infraestructura</p>
            <!-- <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a> -->
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
            <h4>Germán Fernández</h4>
            <p class="text-muted">Unidad Ejecutiva-Mesa Técnica de Energía</p>
            <!-- <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a> -->
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
            <h4>Leily Salinas</h4>
            <p class="text-muted">Unidad Administativa y Financiera</p>
            <!-- <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">¡Tu Voz, Tu Comunidad: Participa y Construye El Encantado!</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Clients-->
  <!-- <div class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 col-sm-6 my-3">
          <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
        </div>
        <div class="col-md-3 col-sm-6 my-3">
          <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
        </div>
        <div class="col-md-3 col-sm-6 my-3">
          <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
        </div>
        <div class="col-md-3 col-sm-6 my-3">
          <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Contacto-->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Realiza tu Solicitud</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
      <!-- * * * * * * * * * * * * * * *-->
      <!-- * * SB Forms Contact Form * *-->
      <!-- * * * * * * * * * * * * * * *-->
      <!-- This form is pre-integrated with SB Forms.-->
      <!-- To make this form functional, sign up at-->
      <!-- https://startbootstrap.com/solution/contact-forms-->
      <!-- to get an API token!-->
      <form action="https://formspree.io/f/mdknknnn" id="contactForm" method="POST">
        @csrf
        <div class="row align-items-stretch mb-5">
          <div class="col-md-6">
            <div class="form-group">
              <!-- Name input-->
              <input class="form-control" id="name" name="name"  type="text" placeholder="Nombres y Apellidos *" data-sb-validations="required" />
              <div class="invalid-feedback" data-sb-feedback="name:required">El nombre y apellido es requerido.</div>
            </div>
            <div class="form-group">
              <!-- tower input-->
              <select class="form-select" name="tower" id="tower" data-sb-validations="required">
                <option value="" selected disabled text-mute>Selecciona la torre donde vives</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
                <option value="K">K</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="N">N</option>
                <option value="O">O</option>
                <option value="P">P</option>
              </select>
              <div class="invalid-feedback" data-sb-feedback="tower:required">La torre es requerido.</div>
            </div>
            <div class="form-group">
              <!-- suite input-->
              <input class="form-control" id="suite" name="suite" type="text" placeholder="Nro apartamento, Ej. A152*" data-sb-validations="required" />
              <div class="invalid-feedback" data-sb-feedback="suite:required">El nro del apartamento donde vive es requerido.</div>
            </div>
            <div class="form-group">
              <!-- Email address input-->
              <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
              <div class="invalid-feedback" data-sb-feedback="email:required">El email is requerido.</div>
              <div class="invalid-feedback" data-sb-feedback="email:email">El Email no es valido.</div>
            </div>
            <div class="form-group mb-md-0">
              <!-- Phone number input-->
              <input class="form-control" id="phone" name="phone" type="tel" placeholder="Teléfono móvil *" data-sb-validations="required" />
              <div class="invalid-feedback" data-sb-feedback="phone:required">Un nro teléfono móvil es requirido.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group form-group-textarea mb-md-0">
              <!-- Message input-->
              <textarea class="form-control" id="message" name=message placeholder="Describe tu solicitud y recuerda agregar tu C.I en formato PDF*" data-sb-validations="required"></textarea>
              <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mb-md-0">
              <!-- document input-->
              <label for="document" class="form-labe"></label>
              <input class="form-control" type="file" name="document" id="document" placeholder="Agrega tu cédula de identidad *" data-sb-validations="">
              <!-- <div class="invalid-feedback" data-sb-feedback="document:required">La CI is required.</div> -->
            </div>
          </div>
        </div>
        <!-- Submit success message-->
        <!---->
        <!-- This is what your users will see when the form-->
        <!-- has successfully submitted-->
        <div class="d-none" id="submitSuccessMessage">
          <div class="text-center text-white mb-3">
            <div class="fw-bolder">Tu solicitud fue enviada exitosamente</div>
            En la mayor brevedad posible te estaremos contactando. 
            <br />
          </div>
        </div>
        <!-- Submit error message-->
        <!---->
        <!-- This is what your users will see when there is-->
        <!-- an error submitting the form-->
        <div class="d-none" id="submitErrorMessage">
          <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <!-- Submit Button-->
        <div class="text-center">
            <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Enviar Solicitud
          </button>
        </div>
      </form>
    </div>
  </section>
  <!-- Footer-->
  <footer class="footer py-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-sm-start">Copyright &copy; C. Comunal El Encantado 2024</div>
        <div class="col-lg-4 my-3 my-lg-0">
          <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/consejocomunal.elencantado?igsh=MWM0MHBrMzlwM3BwZQ==" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <!-- <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a> -->
        </div>
        <div class="col-lg-4 text-lg-end">
          <a class="link-dark text-decoration-none me-3" href="#!">Derechos Reservados</a>
          
        </div>
      </div>
    </div>
  </footer>



  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>