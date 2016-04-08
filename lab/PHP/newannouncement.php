<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>发布新公告</title>
    <?php include 'head.php'; ?>
</head>
<?php include 'needadmin.php'; ?>
<?php include 'connect.php'; ?>
<?php
    if($_POST[title])
    {
        $title=urlencode($_POST[title]);
        $leibie=urlencode($_POST[leibie]);
        $content=urlencode($_POST[content]);
        $query = "insert into notice(title,author,content,leibie) values('".$title."','"."admin"."','".$content."','".$leibie."')";
        $result = mysqli_query($connection, $query);
        if($result){
            $query ='select max(id) as id from notice';
            $result =mysqli_fetch_array(mysqli_query($connection, $query))[id];
            $myfile = $_FILES["fujian"]; 
            if(!empty($myfile))
            {
                $file_path = "../fujian/".$result; 
                move_uploaded_file($myfile["tmp_name"],$file_path); 
            }
            echo "<meta http-equiv='refresh' content='0; url=./viewannou.php?id=".$result."'>";
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
            <br/><h2>发布新公告</h2><br/>
            <div id="message"></div>
            <form action="" method="post" enctype="multipart/form-data"> 
            标题：<input type="text" name="title" required> <br/>
            分类：  <select name="leibie">
                    <?php
                        $query ='select * from anleftnav';
                        $result =mysqli_query($connection, $query);
                        while($row=mysqli_fetch_assoc($result)){
                            echo "<option value ='".$row[id]."'>".urldecode($row[name])."</option>";
                        }
                    ?>
                    </select><br/>
            公告内容：<textarea name="content" style="width:100%;height:300px" required></textarea><br/>
            上传附件:<input type="file" name="fujian"> <br/>
            
            <input type="submit" value="发布"> 
            </form> 
        </div>
        <div style="clear:both"></div>
    </div>
    <br/>
    <?php include 'footer.php'; ?>
</body>
</html>
