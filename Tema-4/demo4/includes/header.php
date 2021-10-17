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
    require_once('includes/db.php');
    require_once('includes/functions.php');
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
                    <?php 
                    foreach ($menu_items as $menu_item) { ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == $menu_item['url']) {echo 'active';} ?>" <?php if(basename($_SERVER['PHP_SELF']) == $menu_item['url']) {echo 'aria-current="page" ';} ?> href="<?php echo $menu_item['url']?>"><?php echo $menu_item['title']?></a>
                        </li>
                    <?php } ?>
                </ul>
                
                <?php include('includes/search-form.php'); ?>
            </div>
          </div>
        </nav>

        <div class="container">