<?php

function add_card($user_id,$card_number,$exp_month,$exp_year)
{
    require('db_connection.php');
    $q = "UPDATE usertable
    SET card_number = '$card_number', exp_month= '$exp_month', exp_year= '$exp_year'
    WHERE user_id = '$user_id' ;" ;
	$r = mysqli_query($link, $q ) ;
}
function delete_user($user_id)
{
    require('db_connection.php');
    $q =  "DELETE FROM usertable WHERE user_id= '$user_id'" ;
	$r = mysqli_query($link, $q ) ; 
    session_destroy();	 
    header('Location: index.php');
}

?>