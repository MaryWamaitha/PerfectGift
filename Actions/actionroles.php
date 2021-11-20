<?php

    session_start();
    //check if session is set with user ID and if the user role is 1 which is admin
    function checkLoginandRole(){
        if (isset($_SESSION['ID'] )) 
        {
            if ($_SESSION['role'] == 1)
            {
                
            
                        // redirects to brand add page
                    //header("Location: ../Admin/add_brand.php");
                    return "admin";
            } else
            {
                    //Redirect to previous page
                        $url=$_SERVER['HTTP_REFERER'];
                        return header("Location:$url");
            }
        } else
            {
            return header("Location: ../index.html");
        }
}
 
            








?>



