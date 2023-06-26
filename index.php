<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CoolBox</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="FeaPictures official Landing Page Site" />
    <meta
      name="keywords"
      content="FeaPictures, Estudio, Fotografia, fotos, estudios"
    />
    <meta name="author" content="FeaPictures Development Team" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body>

      <!--NAVBAR-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img
              src="images/LOGO2.png"
              alt="Logo"
              width="150"
              height="42"
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Productos.php">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="indexx.php">Login</a>
              </li>
            </ul>
            <form class="d-flex">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <br>
    
      

      <div
        class="cover d-flex justify-content-center align-items-center flex-column"
      >
        <h1>
            ESPECIALISTAS EN TECNOLOGÍA Y ELECTRÓNICA
        </h1>

        <p>
            Nuestra mirada está en
            ser líderes en el retail omnicanal especializado en tecnología y electrónica de consumo en el Perú.
        </p>
        <a href="#footer" class="btn btn-light">Read more</a>
        
      </div>


    <section>
      <div class="text-center pt-5">
        <h2>CoolBox</h2>
      </div>
      
      <div class="container mt-5 pt-1">
        <div class="row justify-content-center">
          <div class="col-12 col-sn-6 col-md-4">
            <div class="card">
              <div
                class="cover cover-small"
                style="
                  background-image: url(images/1.jpg);
                "
              ></div>
              <div class="card-body">
                <h5 class="card-title">OFERTAS</h5>
                <p class="card-text">
                    ¡Bienvenidos a Coolbox, tu tienda de tecnología favorita! Estamos 
                    emocionados de presentarte nuestras increíbles ofertas que no querrás perderte. 
                    ¡Prepárate para disfrutar de lo último en innovación tecnológica 
                    a precios irresistibles! Aquí tienes algunas de nuestras ofertas destacadas.
                </p>
                <a href="#" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-sn-6 col-md-4">
            <div class="card">
              <div
                class="cover cover-small"
                style="background-image: url(images/2.jpg)"
              ></div>
              <div class="card-body">
                <h5 class="card-title">COOLBOX</h5>
                <p class="card-text">
                    Nos enorgullece contarles nuestra historia, una historia que comenzó 
                    con una visión audaz y una pasión incansable por acercar la última tecnología a cada hogar y cada persona.

                    Desde nuestros humildes comienzos, hemos crecido y evolucionado para 
                    convertirnos en un referente en el mundo de la tecnología. 
                </p>
                <a href="#" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-sn-6 col-md-4">
            <div class="card">
              <div
                class="cover cover-small"
                style="
                  background-image: url(images/3.jpg);
                "
              ></div>
              <div class="card-body">
                <h5 class="card-title">TECNOLOGIA</h5>
                <p class="card-text">
                    ¡Hola a todos los entusiastas de la tecnología! Soy Coolbox, tu compañero perfecto 
                    en el emocionante mundo de los avances tecnológicos. 
                    Permíteme llevarte a un viaje fascinante a través de las maravillas de la innovación y 
                    mostrarte cómo la tecnología puede transformar tu vida.
                </p>
                <a href="#" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

      <!--FORMULARIO DE CONTACTO-->
      <section>
        <div class="text-center pt-4">
          <h2>Contact us</h2>
        </div>
      <div class="container d-flex justify-content-center pt-1">
        <form class="bg-dark w-75 pt-3 h-75 p-3">
            <h5 class="bg-dark text-white justify-content-center">Contact us</h5>
            <div class="form-group">
              <label for="exampleInputEmail1" class="text-white">E-mail</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your email">
            </div>
            <br>
            <div class="form-group">
              <label for="exampleInputEmail1" class="text-white">Message</label>
              <input type="textarea" class="form-control" id="exampleInputMessage1" placeholder="Message">
            </div>
            <br>
            <button type="submit" class="btn btn-light">Send</button>
          </form>
      </div>
      <br>
      <br>
      <br>
      <div class="container d-flex justify-content-center">
      </div>
    </section>
    <footer id="footer" class="bg-black text-center text-white">
         <!-- Footer -->
    <footer class="bg-black text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>
      
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="https://www.coolbox.pe/">www.coolbox.pe</a>
        </div>
        <!-- Copyright -->
      </footer>
    </footer>

   

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Assets/scripts/scripts.js" type="text/javascript"></script>
    <script
      src="https://kit.fontawesome.com/192123a608.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
