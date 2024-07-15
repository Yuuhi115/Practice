<?php
    require('./database.php');
    $mode = $_GET['mode'];
    $id = $_GET['id'];
    if($mode == 'add'){
        $sql_add = "UPDATE product SET sales_volume = sales_volume+1 WHERE product_id = '$id'";
        $res_add = mysqli_query($con,$sql_add);
        if($res_add){
            echo 'success';
        }else{
            echo 'error';
        }
    }else if($mode == 'delete'){
        $sql_del = "UPDATE product SET sales_volume = sales_volume-1 WHERE product_id = '$id'";
        $res_del = mysqli_query($con,$sql_del);
        if($res_del){
            echo 'success';
        }else{
            'error';
        }
    }
    
?>