<?php
    
    // session_start();
    global $db;
    // print_r($_SESSION);

    try {
        $db = new PDO( "mysql:host=localhost;dbname=payflexy;charset=utf8", "payflexy", "payflexy123" );
        // var_dump($db);
    }

    catch(Exception $e) {
        echo $e->getMessage() ;
        echo "An error has occurred";
    }

?> 