<?php
include("Connection.php");
$root=$_REQUEST['root'];
$menu=$_REQUEST['menu'];
$query=mysqli_query($con,"INSERT INTO `menu` (`sl`, `root`, `menu`) VALUES (NULL, '$root', '$menu');");
?>
