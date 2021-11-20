<?php

    session_start();
    //check if session is set with user ID and if the user role is 1 which is admin
    if (isset($_SESSION['ID'] )) {
        if ($_SESSION['role'] == 1){
         // redirects to brand view page
        header("Location: ../Admin/view_brand.php");
        } else{
       //Redirect to previous page
        $url=$_SERVER['HTTP_REFERER'];
        header("Location:$url");
    }} else{
        header("Location: ../index.html");
    }
 
            








?>



