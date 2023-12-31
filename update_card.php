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
<script src="update_card.js"></script>
</head>

<body>
<body>
  <header class="p-1">  
      <div class="container">
      <?php include "header.php";?>
      </div>
  </header>
  <main class ="text-center container-fluid px-4 vh-100">
	<?php	
		require ( 'db_connection.php' ) ;
		require ( 'session_tools.php');
		if(session_exist())
		{
				# Retrieve items from 'users' database table.
				$q = "SELECT * FROM usertable WHERE user_id={$_SESSION[ 'user_id' ]}" ;
				$r = mysqli_query( $link, $q ) ;
				if ( mysqli_num_rows( $r ) > 0 )
				{
				while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
			{
				#Format register date 
				$date= $row["reg_date"];
				$day = substr($date, 8,2);
				$month = substr($date, 5,2);
				$year = substr($date, 0,4);

				echo ' 
				<div class ="row">
				<h1 class ="display-1">Update/Add Card Information</h1>
					<div class = "col my-5">
						<div class = "card border-light mb-3 ">
							<div class ="card-header border-warning">
							<h1 class="display-2"> Debit/Credit Card</h1>
							</div>
							<div class="card-body">
							<form action="card_tools.php" method="post">
							<h1>  New Card Number :<input type="text" class ="form-control" placeholder="000000000000" name="card">  </h1> 
							<h1> Expiration Date : <input type="month" class ="form-control" placeholder="XX/XX" name="date"> </h1>
							<input type="hidden" name="user_id" value="'.$_SESSION['user_id'].'">
							<button type="submit" class="btn btn-warning m-3 px-5"><h2>Update</h2></button>
							</form>
							</div>
						</div>
					</div>
				</div>
				';
				
			}
				
			# Close database connection.
			
			}
			else { echo 'No user details.' ; }
		}else
		{
			echo '<h1>session doesnt exist</h1>
				 <a href="index.php">Back to the smack</a>'
			;
		}		
		 ?>
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