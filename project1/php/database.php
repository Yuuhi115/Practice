<?php
    $serverName = "localhost";
    $userName = "root";
    $passWord = "";
    $dataBase = "college_trade";
        $con = mysqli_connect($serverName,$userName,$passWord,$dataBase);
        if ($con)
        {
            mysqli_query($con,"set names utf8");
        }else{
            die('Could not connect: '. mysqli_error($err));
        }
?>