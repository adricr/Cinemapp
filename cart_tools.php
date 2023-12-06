<?php
session_start();
if($_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
require("db_connection.php");
$movieid = $_POST['movie_id'];
$userid = $_POST['user_id'];
$tickets = $_POST['tickets'];
$q ="INSERT INTO bookingtable (movie_id, user_id, booking_date, num_tickets) VALUES ('$movieid', '$userid', NOW(), '$tickets' )";
$r = @mysqli_query ( $link, $q ) ;
$_SESSION['movie'] = null;
}

require("home.php");

?>