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
    <table border="2">
    <tr>
        <td>root : </td>
        <td>
            <select name="" id="root">
            <?php
            $query=mysqli_query($con,"SELECT * FROM `menu`");
            $count=mysqli_num_rows($query);
            if($count==0)
            {
            ?>
            <option value="0">root</option>
            <?php
            }else{
            ?>
            <option value="0">root</option>
            <?php 
            while($result=mysqli_fetch_assoc($query)){
                $sl=$result['sl'];
                $root=$result['root'];
                $menu=$result['menu'];
                ?>
                <option value="<?php echo $root;?>"><?php echo $menu;?></option>
                <?php
            }
            }
            ?>
            </select>
        </td>
        <td>next menu</td>
        <td><input type="text" id="menu"></td>
        <td><input type="button" value="submit" onclick="add()"></td>
    </tr>
    </table>
    <br>
    <div id="result"></div>
</body>
</html>

<script>
    function add(){
    var root=document.getElementById('root').value;
    var menu=document.getElementById('menu').value;
        $('#result').load('add_result.php?root='+root+'&menu='+menu).fadeIn('fast');
    }
</script>