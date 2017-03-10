<?php


    // main page for routing...
    
    $valid = $_SESSION['username'];
    
    if( !empty($valid) )
    {
    
        header("Location: /paging/profile.php");
    
    }
    else
    {
        header("Location: /pages/404.php");
    }
