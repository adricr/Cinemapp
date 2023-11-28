<?php
function session_exist()
{
if((isset($_SESSION[ 'user_id' ])))
{
    return true;
}
else
{
return false;
}
}

?>