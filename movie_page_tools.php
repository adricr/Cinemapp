<?php
    session_start();
    $_SESSION['movie'] = array("id" => $_POST['id'], "movie_title" => $_POST['movie_title'], "price" => $_POST['price'], "time" => $_POST['time'], "tickets" => $_POST['tickets']);
    //$_SESSION['ticket_price'] = $_POST['price'];
    /*$_SESSION['movie_id'] = $_POST['id'];
    $_SESSION['movie_time'] = $_POST['time'];
    $_SESSION['tickets'] = $_POST['tickets'];*/
    require('cart.php')
?>