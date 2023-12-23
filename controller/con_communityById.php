<?php
include_once '../model/ConDB.php';
include_once '../model/tourDB.php';

$obj_name = new Tour();

if (isset($_GET["id"]) && !is_array($_GET["id"])) {
    $id = htmlspecialchars($_GET["id"]);
    $rs = $obj_name->getCommunityById($id);

    if ($rs !== false) {

    } else {
        echo "Failed to retrieve data.";
    }
} else {
    echo "Invalid or missing ID parameter.";
}
?>
