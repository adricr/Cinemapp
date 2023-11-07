<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.3.2 -->
  <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>
<header>
<div class="bg-dark pt-4">
<a href="index.php" class="d-flex  justify-content-center text-light text-decoration-none fs-1">
        <i class="fa fa-home" aria-hidden="true"></i>
        </a>
</div>
</header>    

<div class="vh-100 bg-dark text-white justify-content-center d-flex col">
        <form action="process_login.php" method="post" class="row align-items-center text-center row-gap-0 form-control-lg">
        <div class="row align-self-end">
        <h2>E-mail: </h2>
        </div>
        <div class="px-5 row" >
        <input type="email" class ="form-control" placeholder="myemail@email.com" name="email">
        </div>
        <div class="row align-self-end">
        <h2>Password:</h2> 
        </div>
        <div class="px-5 row">
        <input type="password" class ="form-control" placeholder="thisismypass" name="pass">
        </div>
        <div class="row">
        <button class= "btn btn-light" type="submit">Submit</button>
        </div>    
    </form>
    </div>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>