<?php
    require('./database.php');
    $page_num = $_GET['page_num'];
    $page_size = $_GET['page_size'];
    $start = ($page_num-1) * $page_size;
    $list = mysqli_query($con,"SELECT * FROM product LIMIT $start,$page_size");
    $product_array = array();
    while($row = mysqli_fetch_assoc($list)){
        $product_array[] = $row;
    }
    $response = json_encode($product_array);
    echo $response;
    mysqli_close($con);
    
?>