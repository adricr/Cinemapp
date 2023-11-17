<?php

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('db_connection.php'); 
  
  # Initialize an error array.
  $errors = array();

  # Get connection, load, and validate functions.
  require ( 'login_tools.php' ) ;
  require ('session_tools.php') ;
  # Check login.
 list ( $check, $data ) = validate ( $link, $_POST[ 'email' ], $_POST[ 'pass' ] ) ;

 # On success set session data and display logged in page.
 if ( $check )  
 {
   # Access session.
   #session_start();
   #$_SESSION[ 'user_id' ] = $data[ 'user_id' ] ;
   #$_SESSION[ 'first_name' ] = $data[ 'first_name' ] ;
   #$_SESSION[ 'last_name' ] = $data[ 'last_name' ] ;
   sesh_starter($data);
   #load ( 'home.php' ) ;
 }
 # Or on failure set errors.
 else { $errors = $data; } 

 # Close database connection.
 mysqli_close( $link ) ; 
}

# Continue to display login page on failure.
echo 'The following error(s) occurred:' ;
foreach ( $errors as $msg )
{ echo " - $msg
" ; }
 echo' 
    <a class="alert-link" href="index.php">Back to login</a>
'
; 
#include ( 'index.php' ) ;

?>