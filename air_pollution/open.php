<?php
    include 'conf.php';
    $mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

    if (!$mysqli) {
        die ('Error connecting to mysql. :-( <br/>');
    } else {
//        echo 'Yes, we have connected to MySQL! :-) <br/>';
    }
?>

