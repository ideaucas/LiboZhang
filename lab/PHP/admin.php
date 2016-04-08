<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>管理员</title>
    <?php include 'head.php'; ?>
</head>
<?php 
    if($_POST[login])
    {
        if($_POST[username]=="admin"&&$_POST[password]=="UCAS")
        $_SESSION['logined']="ZF1010529";
    }
    if($_POST[logout])
    {
        $_SESSION['logined']="";
        session_destroy();
    }
?>
<body>
    <?php include 'top.php'; ?>
    <div class="middle">
        <?php
            if($_SESSION['logined']=="ZF1010529")
            echo '<h2>您已登录</h2><br/><form action="" method="post" enctype="multipart/form-data"><input type="submit" value="退出登录" name="logout"> </form>';
            else 
            echo '<h2>管理员登录</h2><br/><form action="" method="post" enctype="multipart/form-data"> 用户名：<input type="text" name="username" required> <br/>密码：<input type="password" name="password" required> <br/><input type="submit" value="登录" name="login"> </form>'; 
            if($_SESSION['logined']=="ZF1010529")
            echo <<<HTML
                <hr/><br/>
                <p>公告相关操作</p>
                <ul>
                    <li><a href='./leftnav.php'>公告导航设置</a></li>
                    <li><a href='./newannouncement.php'>发布公告</a></li>
                </ul><br/>
                <hr/><br/>
                <p>人物信息相关操作</p>
                <ul>
                    <li><a href='./newpeople.php'>录入新人物信息</a></li>
                </ul><br/>
                <hr/><br/>
HTML;
        ?>

        
    </div>
    <br/>
    <?php include 'footer.php'; ?>
</body>
</html>
