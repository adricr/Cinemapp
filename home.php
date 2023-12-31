<!doctype html>
<html lang="en">

<head>
  <title>Ecinema</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.3.2 -->
  <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
  <link rel="stylesheet" href="styles.css">
  </head>

<body>
  <header class="p-1">  
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
      <div class= " container-fluid text-center border-bottom px-5 pt-2 pb-3">
          <div class= "row row-cols-2 align-items-center justify-content-around" >
            <div class= "col-12 col-sm-6 px-sm-1" >
              <img src='. $row['img'] .' alt="Movie" class="img-thumbnail bg-secondary w-50">
            </div> 
            <div class="col-12 col-sm-4 align-self-stretch bg-black bg-opacity-50 rounded-5"> 
                <div class=" pt-3 mb-3">
                  <h2>'. $row['movie_title'].'</h2>
                  <br>
                </div>
                <div class="  my-4 py-4">
                  <h4>Brief</h4>
                  <p> '. $row['further_info'] .'</p>
                </div>
                <div class= "mt-5 py-5">
                  <h5>Available hours</h5>
                  <div class= "col my-1">  
                  <form action= "moviepage.php" method= "post"> 
                  <input type="hidden" name="id" value="' .$row['id']. '"/>
                  <input type="hidden" name="time" value="' .$row['show1']. '"/>
                  <input type="submit" name="moviebutton" value="' .$row['show1']. '" class="btn btn-secondary btn-block border-1 border-white" role="button"/>
                  </form>
                  </div>

                  <div class= "col my-1">  
                  <form action= "moviepage.php" method= "post"> 
                  <input type="hidden" name="id" value="' .$row['id']. '"/>
                  <input type="hidden" name="time" value="' .$row['show2']. '"/>
                  <input type="submit" name="moviebutton" value="' .$row['show2']. '" class="btn btn-secondary btn-block border-1 border-white" role="button"/>
                  </form>
                  </div>
                  <div class= "col my-1">  
                  <form action= "moviepage.php" method= "post"> 
                  <input type="hidden" name="id" value="' .$row['id']. '"/>
                  <input type="hidden" name="time" value="' .$row['show3']. '"/>
                  <input type="submit" name="moviebutton" value="' .$row['show3']. '" class="btn btn-secondary btn-block border-1 border-white" role="button"/>
                  </form>
                  </div>
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