<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>通知公告</title>
    <?php include 'head.php'; ?>
    <style>
        td{border-bottom:solid orange 1px; padding-top:6px;}
    </style>
</head>
<?php include 'connect.php'; ?>
<?php
    $query ='select * from notice';
    $allnotice =mysqli_query($connection, $query);
    $query ='select * from anleftnav';
    $allleibie =mysqli_query($connection, $query);
?>

<body>
    <?php include 'top.php'; ?>
    
    <div class="middle">
        <div class="middle-left">
            <br/>
            <ul style="list-style:none;font-size:100%;">
                <?php
                    while($row=mysqli_fetch_assoc($allleibie)){
                        echo "<li><a href='./leibie.php?id=".$row[id]."'>".urldecode($row[name])."</a></li>";
                    }
                ?>
            </ul>
            <!--  以下内容请勿修改-->
            <div id="do_not_change">
                <?php
                    $path="./announcement.php";
                    include '_pageedit.php';
                ?>
            </div>
            <!--  以上内容请勿修改-->
        </div>
        <div class="middle-right">
            <br/><h2>全部公告</h2><br/>
            <table cellspacing="0" cellpadding="0">
                <?php
                    while($row=mysqli_fetch_assoc($allnotice)){
                        echo "<tr><td style='width:500px;'><a href='./viewannou.php?id=".$row[id]."'>".urldecode($row[title])."</a></td><td style='width:100px;'>".$row[author]."</td><td>".$row['time']."</td></tr>";
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
