<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>录入新人物信息</title>
    <?php include 'head.php'; ?>
</head>

<body>
    <?php include 'needadmin.php'; ?>
    <?php include 'top.php'; ?>
    <div class="middle">
        <div class="middle-left">
            <br/>
            <ul style="list-style:none;font-size:100%;">
            </ul>
        </div>
        <div class="middle-right">
            <div id="message"></div>
            <form action="" method="post" enctype="multipart/form-data"> 
            名字(英文或拼音)：<input type="text" name="name" required> <br/>
            分类：  <select name="level">
                      <option value ="Faculty">Faculty</option>
                      <option value ="PhD">PhD Students</option>
                      <option value="Master">Master Students</option>
                    </select><br/>
            职业：<input type="text" name="job"> <br/>
            上传相片:<input type="file" name="photo"> <br/>
            个人页面描述：<textarea name="description" style="width:100%;height:300px" required></textarea><br/>
            <input type="submit" value="录入"> 
            </form> 
        </div>
        <div style="clear:both"></div>
    </div>
    <br/>
    <?php include 'footer.php'; ?>
</body>
</html>
<?php include 'connect.php'; ?>
<?php
    if($_POST[name])
    {
        $myfile = $_FILES["photo"]; 
        if(!empty($myfile))
        { 
            $filename = $_FILES['filename']['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".png") 
            {
                echo '<script>alert("不合法的文件！");</script>';
                exit; 
            }
        }
        $name=urlencode($_POST[name]);
        $level=urlencode($_POST[level]);
        $job=urlencode($_POST[job]);
        $description=urlencode($_POST[description]);
        $query = "insert into people(name,level,job,description) values('".$name."','".$level."','".$job."','".$description."')";
        $result = mysqli_query($connection, $query);
        if($result){
            if(!empty($myfile))
            {
                $query ='select max(id) as id from people';
                $result =mysqli_fetch_array(mysqli_query($connection, $query))[id];
                $file_path = "../images/".$result; 
                move_uploaded_file($myfile["tmp_name"],$file_path); 
            }
            echo '<script>$(function(){$("div#message").html(\''."录入成功".'\');});</script>';
        }
        
        
        
    }
?>