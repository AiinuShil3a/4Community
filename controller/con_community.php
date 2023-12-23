<?php
    include_once 'model/ConDB.php';
    include_once 'model/tourDB.php';
    $obj_name = new Tour();
    $rs2 = $obj_name->getCommunity();

    // Read JSON Decode From encode to decode
    $jsonCode = $rs2;
    $jsonDecode = json_decode($jsonCode, true);
    foreach ($jsonDecode as $result2){
        include './view/allCommunity.php';
    }
?>