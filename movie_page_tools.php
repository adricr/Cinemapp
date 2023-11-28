<?php
    session_start();
    $_SESSION['ticket_price'] = $_POST['price'];
    $_SESSION['movie_id'] = $_POST['id'];
    $_SESSION['movie_time'] = $_POST['time'];
    $_SESSION['tickets'] = $_POST['tickets'];
    require('moviepage.php')
?>