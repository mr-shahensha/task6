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
            $query=mysqli_query($con,"select * from menu");
            while($result=mysqli_fetch_assoc($query)){
                $sl=$result['sl'];
                $root0=$result['root'];
                $menu=$result['menu'];
                if($root0==0){
                    ?>
                    <option value=""><?php echo "main ".$menu;?></option>
                <?php
                }else{
                ?>
                    <option value=""><?php 
                    $query7=mysqli_query($con,"select * from menu where")
                    
                    
                    echo $menu;?></option>
                <?php
                }
            }
            ?>
            </select>
        </td>
        <td> menu</td>
        <td><input type="text" name="menu" id="menu"></td>
        <td><input type="submit" name="submit" value="submit"></td>
    </tr>
    </table>
    </form>
            <br>
    <table border="2">
            <tr>
                <td>menu -> </td>
                <?php
                $query=mysqli_query($con,"select * from menu where root='1'");
                while($result=mysqli_fetch_assoc($query)){
                    $menu=$result['menu'];
                    $root=$result['root'];
                    $sl=$result['sl'];
                    ?>
                    <td><select name="" id="">
                        <option value="<?php echo $root;?>"><?php echo $menu;?></option>
                        <?php
                        $query1=mysqli_query($con,"select * from menu where root='$sl'");
                        while($result1=mysqli_fetch_assoc($query1)){
                            $menu1=$result1['menu'];
                            $root1=$result1['root'];
                                ?>
                        <option value="<?php echo $root1;?>" ><?php echo $menu1;?></option>
                                <?php
                        }
                        ?>
                    </select>
                    </td>
                    <?php
                }
                ?>
            </tr>
    </table>
<br>


<table border="1">
<tr>
            <?php
                $query=mysqli_query($con,"select * from menu where root='1'");
                while($result=mysqli_fetch_assoc($query)){
                    $menu=$result['menu'];
                    $root=$result['root'];
                    $sl=$result['sl'];
                                        ?>
                    <td><?php  echo $menu;?></td>

                    <?php
                }
                    ?>
</tr>

<tr>
                    <?php
                  $qry=mysqli_query($con,"select * from menu where root='1'");
                  while($rrr=mysqli_fetch_assoc($qry)){     
                    $sl3=$rrr['sl'];
                    ?>
                        <td >
                        <table border="1">
                            <?php
                            $sl4="";
                                $query2=mysqli_query($con,"select * from menu where root='$sl3'");
                                while($result2=mysqli_fetch_assoc($query2)){
                                    $sl4=$result2['sl'];
                                    $menu2=$result2['menu'];
                                    $root2=$result2['root'];
                                    ?>
                                        <tr>
                                            <td>
                                                <table border="1">
                                                    <tr>
                                                        <td>
                                                        <?php echo $menu2;?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                   
                                                    $query3=mysqli_query($con,"select * from menu where root='$sl4'");
                                                    while($result3=mysqli_fetch_assoc($query3)){
                                                        $menu3=$result3['menu'];
                                                        $root3=$result3['root'];
                                                    
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php  echo $menu3;?>
                                                            </td>
                                                        </tr>
                                                <?php 
                                                    }
                                                ?> 
                                                </table>
                                            </td>
                                        </tr>
                                    <?php
                                 }
                                ?>
                                
                                </table>
                        </td>
                      <?php
                    }
                    ?>
</tr>
</table>
<br>

<table border="1">
<tr>
            <?php
                $query=mysqli_query($con,"select * from menu where root='1'");
                while($result=mysqli_fetch_assoc($query)){
                    $menu=$result['menu'];
                    $root=$result['root'];
                    $sl=$result['sl'];
                                        ?>
                    <td onmouseover="fun('<?php echo $sl;?>')" id=""><?php  echo $menu;?></td>

                    <?php
                }
                    ?>
</tr>

   

</table>
<br>
<div id="div"></div>

</body>
</html>
<script>
    function fun(root){
        $('#div').load('menu_data.php?root='+root).fadeIn('fast');
}
</script>
