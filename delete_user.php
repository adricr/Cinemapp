<?php
session_start();
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

<body>
<body>
  <header class="p-1">  
      <div class="container">
      <?php include "header.php";?>
      </div>
  </header>
  <main class ="text-center  container-fluid px-4">
	<?php	
		
		require ( 'db_connection.php' ) ;
		require ( 'session_tools.php');
		if(session_exist())
		{
				# Retrieve items from 'users' database table.

				echo ' 
				<div class ="row">
				<h1 class ="display-1 text-danger"><b>Warning</b></h1>
					<div class = "col my-5">
						<div class = "card border-light  mb-3 ">
							<div class ="card-header border-warning">
							<h1 class="display-2"> Deleting your account will <b>REVOKE</b> your access to Cinemapp</h1>
							<br>
							<h3 class="display-3"> Are you sure?</h3>
							</div>
							<div class="card-body">
							<ul class="nav justify-content-evenly">
							<form action="" method="post">
							<li><h5><input class="btn btn-warning px-5" type="submit" value="Yes"></h5></li>
							<input type="hidden" name="delete">
							</form>
							<li><a class="btn btn-warning px-5" href="user.php"><h5><b>No</b></h5></a></li>

							</ul>
							
							</div>
						</div>
					</div>
				</div>
				';
			
				

		}else
		{
			echo '<h1>session doesnt exist</h1>
				 <a href="index.php">Back to the smack</a>'
			;
		}		
		 
		if(isset($_POST['delete'])){
			require('user_tools.php');
			delete_user($_SESSION['user_id']);

		}?>
  </main>
  <footer>
	<!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>