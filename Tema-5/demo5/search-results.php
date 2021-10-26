<h1>Search results for: </h1>

<?php include('includes/search-form.php'); ?>

<?php 

    if(!empty($_GET)){
        if(isset($_GET['search'])){
            echo $_GET['search'];
        }
    }

    if(empty($_GET['search'])){
        echo "Atentie! Nu ai completat formularul de 'search'. ";
    }

    

?>


<!-- De revenit la tema 5, punctul 5/h. -->


