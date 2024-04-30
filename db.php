<?php
    $serverName = 'localhost';
    $username = 'gomedAdmin_leads';
    $password = '&T9+[ouQTLHr';
    $dbName = 'leads_gomed';

    $connect = mysqli_connect($serverName,$username,$password,$dbName);

    if(!$connect){
        echo 'SQL Error' . mysqli_error($connect);
    }else{
        echo 'Succesfully Connected';
    }

?>