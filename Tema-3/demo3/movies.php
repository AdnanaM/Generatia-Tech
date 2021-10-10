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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">AM</a>
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
      <div class="row">
        <h1>MOVIES</h1>
        
        <div class="row">
          <?php
            $movies = array(
              array(
                'title' => 'Titanic',
                'poster' => 'img/10236_aa.jpg',
                'description' => 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious ill-fated R.M.S. Titanic',
                'link' => 'movie-1.php'
              ),
              array(
                'title' => 'Avatar',
                'poster' => 'img/download.jpg',
                'description' => 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home',
                'link' => 'movie-2.php'
              ),
              array(
                'title' => 'Terminator',
                'poster' => 'img/download (1).jpg',
                'description' => 'A human soldier is sent from 2029 to 1984 to stop an almost indestructible cyborg killing machine, sent from the same year, which has been programmed to execute a young woman whose unborn son is the key to humanity future salvation',
                'link' => 'movie-3.php'
              ),
            );
            ?>

            <?php $i = 0; foreach ($movies as $movie){ $i++; ?>

              <div class="col-12 col-md-6 col-lg-4 mb-4" id="movie-<?php echo $i; ?>">
                <div class="card">
                  <a href="https://www.rottentomatoes.com/m/titanic">
                    <img src="<?php echo $movie['poster']; ?>" class="card-img-top" alt="No available">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $movie['title']; ?></h5>
                    <p class="card-text"><?php echo $movie['description'] . '...'; ?></p>
                    <a href="<?php echo $movie['link']; ?>" class="btn btn-primary">Read more</a>
                  </div>
                </div>
              </div>

            <?php } ?>

        </div>
      </div>
    </div>

    <div class="footer">
      <p>Copyright. Toate drepturile rezervate</p>
    </div>
    
  </body>
</html>


