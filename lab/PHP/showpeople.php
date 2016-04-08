<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>人物信息</title>
    <?php include 'head.php'; ?>
</head>
<?php include 'connect.php'; ?>
<?php
    if($_POST[edit] and $_GET[id])
    {
        $query = "update people set description='".urlencode($_POST[description])."'where id=".$_GET[id];
        $result = mysqli_query($connection, $query);
    }
    if($_GET[id])
    {
        $query = "select * from people where id='".$_GET[id]."'";
        $result = urldecode(mysqli_fetch_array(mysqli_query($connection, $query))[description]);
    }
?>

<body>
    <?php include 'top.php'; ?>
    <div class="middle">
        <?php echo $result; ?>
        <?php
            if($_SESSION['logined']=="ZF1010529")
            {
                echo "<a href='./editpeople.php?id=".$_GET[id]."'>编辑</a><br/>";
            }
        ?>
    </div>
    <br/>
    <?php include 'footer.php'; ?>
</body>
</html>
