<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>公告详情</title>
    <?php include 'head.php'; ?>
</head>
<?php include 'connect.php'; ?>
<?php
    $query ="select * from notice where id=".$_GET[id];
    $result =mysqli_fetch_array(mysqli_query($connection, $query));
    $query ="select * from anleftnav where id=".$result[leibie];
    $leibie =mysqli_fetch_array(mysqli_query($connection, $query))[name];
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
        </div>
        <div class="middle-right">
            <br/><h2><?php echo urldecode($result[title]); ?></h2><br/>
            <?php echo "作者:".$result[author]."   发布时间:".$result['time']."   分类:".urldecode($leibie); ?><hr/><br/>
            <?php echo preg_replace("/\\s/","&nbsp;",preg_replace("/\\n/","<br/>",urldecode($result[content]))); ?><br/><br/><hr/><br/>
            <?php if (is_file('../fujian/'.$result[id])) echo "<a href='../fujian/".$result[id]."'>点此下载附件(右键另存为)</a>"; else echo "此公告无附件"; ?><br/><hr/><br/>
            
        </div>
        <div style="clear:both"></div>
    </div>
    <br/>
    <?php include 'footer.php'; ?>
</body>
</html>
