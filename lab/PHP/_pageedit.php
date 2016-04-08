<?php
 if($_SESSION['logined']=="ZF1010529")
 echo <<<HTML
<form action="./pageedit.php" method="post" enctype="multipart/form-data"> 
    <input type="text" value="$path" hidden name="path">
    <input type="submit" value="修改本页面" name="change"> 
</form> 
HTML;
?>