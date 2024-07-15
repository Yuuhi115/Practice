<?php
    require('./database.php');
    $list = mysqli_query($con,"select * from product");
    $product_array = array();
    while($row = mysqli_fetch_assoc($list)){
        $product_array[] = $row;
    }
    $response = json_encode($product_array);
    echo $response;
    mysqli_close($con);
    
?>