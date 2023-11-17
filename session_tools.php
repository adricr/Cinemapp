<?php

function sesh_starter($data){
    session_start();
    $_SESSION[ 'user_id' ] = $data[ 'user_id' ] ;
    $_SESSION[ 'first_name' ] = $data[ 'first_name' ] ;
    $_SESSION[ 'last_name' ] = $data[ 'last_name' ] ;
    echo "Session variables are set.";
    load ( 'home.php' ) ;
}


function sesh_destoyer(){
    session_destroy();
}
?>