<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.3.2 -->
  <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>

</head>

<body>
  <header class="p-1 bg-dark text-white">  
      <div class="container">
      <?php include "header.php";?>
      </div>
  </header>

    <?php
      # Open database connection.
      require ( 'db_connection.php' ) ;
      # Retrieve movies from 'movie' database table.
      $q = "SELECT * FROM movietable" ;
      $r = mysqli_query( $link, $q ) ;
      if ( mysqli_num_rows( $r ) > 0 )
      {
      # Display body section.
      while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
      {
      echo '
        <div class= "container text-center">
          <div class= "row row-cols-2 align-items-center" >
            <div class= "col-6" >
              <img src='. $row['img'] .' alt="Movie" class="img-thumbnail bg-secondary">
            </div> 
            <div class= "col-6"> 
                <h2>'. $row['movie_title'].'</h2>
                <br>
                <h4>Brief</h4>
                <p> '. $row['further_info'] .'</p>
                <h5>Available hours</h5>
                <div class= "col">  
                  <a href="#'.$row['id'].'" class="btn btn-secondary btn-block" role="button"> '. $row['show1'] .' </a>
                </div>
                <div class= "col">  
                  <a href="#'.$row['id'].'" class="btn btn-secondary btn-block" role="button"> '. $row['show2'] .' </a>
                </div>
                <div class= "col">  
                  <a href="#'.$row['id'].'" class="btn btn-secondary btn-block" role="button"> '. $row['show3'] .' </a>
                </div>
            </div> 
          </div> 
          
        </div>
      
      ';
      }
      # Close database connection.
      mysqli_close( $link) ; 
      }
      # Or display message.
      else { echo '
      There are currently no movies showing.


      ' ; }
      ?>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>