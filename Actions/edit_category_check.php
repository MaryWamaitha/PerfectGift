<?php

include "actionroles.php";
$check=checkLoginandRole();
if ($check == "admin"){
    header("Location: ../Admin/view_category.php");
} else{
    return $check;
}
    
            








?>



