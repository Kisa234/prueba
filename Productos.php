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


    <section id="galeria" class="contenedor">
        <div class="text-center pt-5">
          <h2>Productos</h2>
          <p>Nuestra mirada está en ser líderes en el retail omnicanal especializado en tecnología y electrónica de consumo en el Perú.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="images/p1.jpg" >
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="images/p2.jpg" >
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="images/p3.jpg" >
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="images/p4.jpg" >
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="images/p5.jpg" >
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="images/p6.jpg" >
          </div>
        </div>

    </section>

</br>

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

    </body>
</html>