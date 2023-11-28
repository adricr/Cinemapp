<?php
 if(!isset($_SESSION['movie_id'])){
 session_start();}
 /*if(isset($_POST['moviebutton'])) { 
    echo 'id = ' .$_POST['id']. ' time =' .$_POST['time']. ' '; 
} */ 

?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <header class="p-1 bg-dark text-white">  
        <div class="container">
        <?php include "header.php";?>
        </div>
    </header>
    <?php 
    require('db_connection.php');
    $id = $_POST['id'];
    $time =$_POST['time'];
    $q = "SELECT movie_title, further_info, img, preview, mov_price FROM movietable WHERE id = '$id'" ;
    $r = mysqli_query( $link, $q ) ;
    if ( @mysqli_num_rows( $r ) == 1 ) 
    {
      $row = mysqli_fetch_array ( $r, MYSQLI_ASSOC ) ;
    }

    echo '
    <main>
    <div class=" container-fluid text-center bg-dark text-light border-top border-2 border-opacity-25 px-5 pt-2 pb-3">
        <div class="row" >
            <div>
                <h1 class="display-1">' .$row['movie_title']. '</h1>
            </div>
            <div class ="ratio ratio-16x9">
                ' .$row['preview']. '
            </div>
        </div>
        <div class="row" >
        <div class ="col">
        <h3 class="display-3">SYNOPSIS</h3>
        <h4>' .$row['further_info']. '</h4>
        </div>
        <div class="col">
        <h3 class="display-3">HOW MANY SEATS?</h3>
        <div class="justify-self-evenly">
        <form method="post" action="movie_page_tools.php">
        <input name="price" type="hidden" value="'. $row['mov_price'] .'">
        <input name="id" type="hidden" value="'. $id .'">
        <input name="time" type="hidden" value="'. $time .'">
        <select name="tickets" class="form-select text-center w-50 position-relative start-50 translate-middle-x">
        <option selected>0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        </select>
        <button type="submit" class="btn btn-warning my-3">Add to Cart</button>
        </form>
        </div>
        </div>
        </div>
    </div>
    </main>
    
    ';
    print_r($_SESSION);
    ?>

    <footer>
        <!-- place footer here -->
    </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>