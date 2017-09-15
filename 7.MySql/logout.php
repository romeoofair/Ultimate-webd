<?php

    //clear all session variable
    session_unset();

    //destroy the session
    session_destroy();
    
    echo "You've been logged out .See you next time!";

    print_r($_SESSION);
?>