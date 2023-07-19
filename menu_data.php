<?php
include("connection.php");
$sl=$_REQUEST['root'];
?>
<table border="1">
                            <?php
                            $sl4="";
                                $query2=mysqli_query($con,"select * from menu where root='$sl'");
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