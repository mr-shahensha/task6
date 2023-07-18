<?php
$server="localhost";
$username="root";
$password="";
$database="task6";
if(!$con=mysqli_connect($server,$username,$password,$database)){
    echo "failed to connect";
}
?>