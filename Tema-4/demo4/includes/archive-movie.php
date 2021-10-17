<div class="col-12 col-md-6 col-lg-4 mb-4" id="movie-<?php echo $movie['id']; ?>">
    <div class="card">
    <a href="https://www.rottentomatoes.com/m/titanic">
        <img src="<?php echo $movie['poster']; ?>" class="card-img-top" alt="No available">
    </a>
    <div class="card-body">
        <h5 class="card-title"><?php echo $movie['title']; ?></h5>
        <p class="card-text"><?php echo $movie['description'] . '...'; ?></p>
        <a href="movie-<?php echo $movie['id'] ?>.php" class="btn btn-primary">Read more</a>
    </div>
    </div>
</div>