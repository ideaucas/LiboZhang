<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>左侧类别导航设置</title>
    <?php include 'head.php'; ?>
</head>
<?php include 'needadmin.php'; ?>
<?php include 'connect.php'; ?>
<?php
    if($_POST[sub])
    {
        if($_POST[sub]=="确认添加")
        {
            $addclass=urlencode($_POST[addclass]);
            $query ="insert into anleftnav(name) values('".$addclass."')";
            $result =mysqli_query($connection, $query);
            if($result) echo '<script>$(function(){$("div#message").html(\''."添加成功".'\');});</script>';
        }
        if($_POST[sub]=="确认更改")
        {
            $changenew=urlencode($_POST[changenew]);
            $query ="update anleftnav set name='".$changenew."' where id=".$_POST[id];
            $result =mysqli_query($connection, $query);
            if($result) echo '<script>$(function(){$("div#message").html(\''."修改成功".'\');});</script>';
        }
        if($_POST[sub]=="删除")
        {
            $query ="delete from  anleftnav  where id=".$_POST[id];
            $result =mysqli_query($connection, $query);
            if($result) echo '<script>$(function(){$("div#message").html(\''."删除成功".'\');});</script>';
        }
    }
?>

<body>
    <?php include 'top.php'; ?>
    <div class="middle">
        <div class="middle-left">
            <br/>
            <ul style="list-style:none;font-size:100%;">
            </ul>
        </div>
        <div class="middle-right">
            
            <br/><h2>类别设置</h2><br/>
            
            <div id="message"></div><br/><br/>
            <h2>增加类别</h2><br/>
            <form action="" method="post" enctype="multipart/form-data"> 
            类别名：<input type="text" name="addclass" required> 
            <input type="submit" value="确认添加" name="sub"> 
            </form> 
            <br/><hr/><br/>
            <h2>修改类别</h2><br/>
            <table>
                
                    <?php
                        $query ='select * from anleftnav';
                        $result =mysqli_query($connection, $query);
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr><form action="" method="post" enctype="multipart/form-data">';
                            echo '<input type="text" value="'.$row[id].'" hidden name="id">';
                            echo '<td>'.urldecode($row[name]).':<td>';
                            echo '<td>更改为:<input type="text" name="changenew" > </td>';
                            echo '<td><input type="submit" value="确认更改" name="sub"> </td>';
                            echo '<td><input type="submit" value="删除" name="sub"> </td>';
                            echo '</form></tr>';
                            
                        }
                    ?>
                    
                
            </table>
             
        </div>
        <div style="clear:both"></div>
    </div>
    <br/>
    <?php include 'footer.php'; ?>
</body>
</html>

