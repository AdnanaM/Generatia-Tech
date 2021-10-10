<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muresan Adnana</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.js">
  </head>

  <body>
    <?php 
      define("NUME_AUTOR_SITE" , "AM")
    ?>

    <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><?php echo NUME_AUTOR_SITE; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="movies.php">Movies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>

      <div class="container">
        <p class="intro">Bine ai venit! Aici găsiți cele mai noi filme online la calitatea HD. Puteți viziona orice film gratis fără reclamă. Avem filme subtitrate din categoriile: Acțiune, Animație, Aventură, Comedie, Horror, Thriller, Dramă, Documentare, Filme Indiene, Filme Romantice. Avem o colectie de 10119 filme online pe care le poti viziona gratis la noi pe site.</p>
        <p class="intro">Vă dorim vizionare plăcută!</p>
        <a href="movies.html">
          <button type="button" class="btn btn-info">MOVIES</button>
        </a>
      </div>
    </div>

    <div class="footer">
      <?php echo NUME_AUTOR_SITE ; ?>. Copyright. Toate drepturile rezervate.
    </div>
    
  </body>
</html>


