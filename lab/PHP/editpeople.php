<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>编辑人物信息</title>
    <?php include 'head.php'; ?>
</head>
<?php include 'connect.php'; ?>
<?php

    if($_GET[id])
    {
        $query = "select * from people where id='".$_GET[id]."'";
        $result = urldecode(mysqli_fetch_array(mysqli_query($connection, $query))[description]);
    }
?>

<body>
    <?php include 'top.php'; ?>
    <div class="middle">
        <form action="./showpeople.php?id=<?php echo $_GET[id]; ?>" method="post" enctype="multipart/form-data"> 
            <textarea name="description" style="width:100%;height:500px" required ><?php echo $result; ?></textarea><br/>
            <input type="submit" value="确认修改" name="edit"> 
        </form> 
    </div>
    <br/>
    <?php include 'footer.php'; ?>
</body>
</html>
