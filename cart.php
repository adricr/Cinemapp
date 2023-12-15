<?php 
 if(!isset($_SESSION['movie']['id'])){
    session_start();}
require('db_connection.php');
?>
<!doctype html>
<html lang="en">
<head>
  <title>Ecinema</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.3.2 -->
  <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>

</head>

<body class ="">
  <header class="p-1 ">  
      <div class="container">
      <?php include "header.php";?>
      </div>
  </header>
    <main>

        <?php
        if(isset($_SESSION['movie'])){
        echo'
        <div class="container-fluid text-center" >
            <h1 class="display-1" >Shopping Cart</h1>
                <div class="row">
                    <h2 class = "display-2">Movie: '.$_SESSION['movie']['movie_title'].'</h2>
                    <div class = "col py-3">
                        <table class=" table table-dark text-center bx-3">
                        <thead>
                            <tr>
                            <th scope="col">No of tickets</th>
                            <th scope="col">Price per Ticket</th>
                            <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr class="fs-2">
                        <td>'.$_SESSION['movie']['tickets'].'</td>
                        <td>'.$_SESSION['movie']['price'].' £</td>
                        <td class="fw-bold text-warning">'.$_SESSION['movie']['tickets']*$_SESSION['movie']['price'].' £</td>
                        </tr>
                        </tbody>
                        </table>
                        <form action="cart_tools.php" method= "post">
                        <input type="hidden" name="user_id" value="'.$_SESSION['user_id'].'" >
                        <input type="hidden" name="movie_id" value="'.$_SESSION['movie']['id'].'" >
                        <input type="hidden" name="tickets" value="'.$_SESSION['movie']['tickets'].'" >   
                        <button class= "btn btn-warning" type="submit">Book Now!</button>                  
                        </form> 
                    </div>    
                </div>
        </div>
        ';}
        else{
          echo'
          <div class="container-fluid text-center" >
              <h1 class="display-1" >Shopping Cart</h1>
                  <div class="row">
                      <h2 class = "display-2 mt-5 pt-5">Your cart is empty</h2>  
                  </div>
          </div>
          '; 
        }
        ?>

    </main>
  <footer>
  
  <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>