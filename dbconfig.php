<?php 


    $server = "localhost";
    $dbUsername = "lenguyen1230123";
    $dbPassword = "lenguyen1230124";
    $dbName = "webphone";
    // Kết nối

        $dbconnect = mysqli_connect( $server , 
            $dbUsername , $dbPassword, $dbName);
    if($dbconnect){
        echo"";
    }
    else{
        echo"unconnect";
    }


    mysqli_select_db( $dbconnect,  $dbName);

    // return $dbconnect;
    // ehco"Your are cornected";


?>