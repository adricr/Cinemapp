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
    <div class="vh-100 bg-dark text-white text-center justify-content-center d-flex">
        <form action="process_signup.php" method="post">
        First Name: <input type="text" class ="form-control" placeholder="John" name="first_name"><br>
        Last Name: <input type="text" class ="form-control" placeholder="Doe" name="last_name"><br>
        E-mail: <input type="email" class ="form-control" placeholder="JohnDoe@email.com" name="email"><br>
        Password: <input type="text" class ="form-control" placeholder="thisismypass" name="pass1"><br>
        Repeat Password: <input type="text" class ="form-control" placeholder="thisismypass" name="pass2"><br>
        <button class= "btn btn-light" type="submit">Submit</button>
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