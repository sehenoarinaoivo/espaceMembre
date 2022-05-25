<?php 

include("config.php");
$ins = $base->prepare("DELETE FROM `inscription` WHERE `inscription`.`id` = :id ");

$ins->execute(array("id"=>$_GET["id"]));
header("Location:admin.php");

?>