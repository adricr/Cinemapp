<?php

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('db_connection.php'); 
  
  # Initialize an error array.
  $errors = array();

  # Check for a first name.
  if ( empty( $_POST[ 'first_name' ] ) )
  { $errors[] = 'Enter your first name.' ; }
  else
  { $fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; }

  # Check for a last name.
  if (empty( $_POST[ 'last_name' ] ) )
  { $errors[] = 'Enter your last name.' ; }
  else
  { $ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; }

  # Check for an email address:
  if ( empty( $_POST[ 'email' ] ) )
  { $errors[] = 'Enter your email address.'; }
  else
  { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }

  # Check for a password and matching input passwords.
  if ( !empty($_POST[ 'pass1' ] ) )
  {
    if ( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
    { $errors[] = 'Passwords do not match.' ; }
    else
    { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'pass1' ] ) ) ; }
  }
  else { $errors[] = 'Enter your password.' ; }
  
  # Check if email address already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT user_id FROM usertable WHERE email='$e'" ;
    $r = @mysqli_query ( $link, $q ) ;
    if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'Email address already registered. Sign In Now' ;
  }
   # On success register user inserting into 'usertable' database table.
  if ( empty( $errors ) ) 
  {
    #$q = "INSERT INTO usertable (first_name, last_name, email, pass, reg_date) VALUES ('$fn', '$ln', '$e', SHA2('$p',256), NOW() )"; #encryption bypassed as it doesnt work
    $q = "INSERT INTO usertable (first_name, last_name, email, pass, reg_date) VALUES ('$fn', '$ln', '$e', '$p', NOW() )";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    { echo '
      <div class="alert alert-warning my-0 text-center alert-dismissible fade show" role="alert">
      <h4 class = "my-0">You are now registered.</h4>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
			'
			;
      require("index.php");}
  
    # Close database connection.
    mysqli_close($link); 

    exit();
  }
  # Or report errors.
  else 
  {
    echo '
    The following error(s) occurred:' ;
    foreach ( $errors as $msg )
    { echo " <- $msg" ; }
    echo ' or please try again.';
    # Close database connection.
    mysqli_close( $link );
  }  
}
require("index.php");?>