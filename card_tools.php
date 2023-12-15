<?php
if(isset($_POST['card'])&&isset($_POST['date']))
{
    require('db_connection.php');
    
    $card = $_POST['card'];
    $exp_date = $_POST['date'];
    $user_id = $_POST['user_id'];
    $q = "UPDATE usertable SET card_number= $card, card_exp= '$exp_date' WHERE user_id = $user_id";
    $r = mysqli_query($link,$q);
    mysqli_close($link);
    echo '
<div class="alert alert-warning my-0 text-center alert-dismissible fade show" role="alert">
<h4 class = "my-0">Card details updated Succesfully.</h4>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      '
      ;
      require("update_card.php");
}else{
    echo '
<div class="alert alert-warning my-0 text-center alert-dismissible fade show" role="alert">
<h4 class = "my-0">Card details not updated.</h4>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      '
      ;
      require("update_card.php");

}



?>