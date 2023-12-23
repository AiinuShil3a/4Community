<?php
include_once "../model/ConDB.php";
include_once "../model/tourDB.php";
$id = htmlspecialchars($_GET["id"]);

$obj_name = new Tour();
$rs2 = $obj_name->delete($id);

header("Location: ../index.php");
exit();
?>
