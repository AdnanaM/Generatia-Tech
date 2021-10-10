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
        <h1>Contact</h1><br><br><br>
        <div class="row">
          <form action="#">
            <div class="form-group">
              <label for="email">Name:</label>
              <input type="name" id="name" class="form-control"><br>
              <label for="email">Email:</label>
              <input type="email" id="email" class="form-control"><br>
              <label for="exampleFormControlTextarea1">Mesaj:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>
              <input type="submit" class="btn btn-info " value="Trimite">
            </div>
          </form>
        </div>
      </div>
    </div>
      
    <div class="footer">
      <p>Copyright. Toate drepturile rezervate</p>
    </div>

  </body>
</html>


