<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>页面编辑</title>
    <?php include 'head.php'; ?>
</head>
<?php
  if($_POST[change]) 
  {
      $result=file_get_contents($_POST[path]);
  }
  if($_POST[confirm])
  {
      file_put_contents($_POST[path],$_POST[content]);
  }
?>
<body>
    <?php include 'needadmin.php'; ?>
    <div>
        <form action="" method="post" enctype="multipart/form-data"> 
            <textarea name="content" style="width:100%;height:1500px" required ><?php echo $result; ?></textarea><br/>
            <input type="text" value="<?php echo $_POST[path]; ?>" hidden name="path">
            <input type="submit" value="确认修改" name="confirm"> 
        </form> 
    </div>
</body>
</html>

