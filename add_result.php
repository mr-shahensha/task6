<?php
include("Connection.php");
if(isset($_POST['submit'])){
$root=$_REQUEST['root'];
$menu=$_REQUEST['menu'];
$query=mysqli_query($con,"INSERT INTO `menu` (`sl`, `root`, `menu`) VALUES (NULL, '$root', '$menu');");
}
?>
<script>
    alert("done")
    document.location="index.php";
</script>