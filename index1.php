<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>task6</title>
</head>
<body>
    <form action="add_result.php" method="post">
    <table border="2">
    <tr>
        <td>root : </td>
        <td>
            <select name="root" id="root">
            <option value="">select root</option>
            <?php
            $query=mysqli_query($con,"select * from menu where root='0'");
            while($result=mysqli_fetch_assoc($query)){
				$itm="";
                $sl=$result['sl'];
                $menu=$result['menu'];
                $itm=$menu;
				?>
				<option value="<?php echo $sl;?>"><?php echo $itm;?></option>
				<?php
				
				$query1=mysqli_query($con,"select * from menu where root='$sl'");
				while($result1=mysqli_fetch_assoc($query1)){
				$itm1="";
                $sl1=$result1['sl'];
                $menu1=$result1['menu'];
                $itm1=$itm."->".$menu1;
				?>
				<option value="<?php echo $sl1;?>"><?php echo $itm1;?></option>
				<?php
				
				$query2=mysqli_query($con,"select * from menu where root='$sl1'");
				while($result2=mysqli_fetch_assoc($query2)){
				$menu2="";
                $sl2=$result2['sl'];
                $menu2=$result2['menu'];

				?>
				<option value="<?php echo $sl2;?>"><?php echo $itm1."->".$menu2;?></option>
				<?php
				
				
                }
				
                }
			}
                ?>
                </td>
                    