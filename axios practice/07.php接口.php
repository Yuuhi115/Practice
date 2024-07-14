<?php

    class cat{
        public $name = '';
        public $age = '';
        public $cry = 'miumiu~';
        public $sex = '';
    }
    $cat = new cat();
    $cat->name = $_GET['name'];
    $cat->age = $_GET['age']+1;
    $cat->sex = $_GET['sex'];

    $response = $cat;
    echo json_encode($response);
?>

