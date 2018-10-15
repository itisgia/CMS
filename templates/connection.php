<?php

    // $dbc = mysqli_connect(host , username, password , table);
    $dbc = mysqli_connect(getenv('DB_HOST') , getenv('DB_USER'), getenv('DB_PASS') , getenv('DB_TABLE'));

    if ($dbc) {
        // var_dump('connection successfull'); // this will show top of the page
        $dbc ->set_charset('utf8');

    } else {
        die('ERROR: connection could not be made. Please check your .env file and include the right user name, host, password and table'); // if we can't connect to dB no point of seeing project
    }



 ?>
