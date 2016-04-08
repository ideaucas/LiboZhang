<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <title>国科大计算机应用与理论</title>
    <?php include 'head.php'; ?>
</head>
<?php include 'connect.php'; ?>
<?php
    $query = "select * from people where level='Faculty'";
    $result1=mysqli_query($connection, $query);
    $query = "select * from people where level='PhD'";
    $result2=mysqli_query($connection, $query);
    $query = "select * from people where level='Master'";
    $result3=mysqli_query($connection, $query);
?>

<body>
     <?php include 'top.php'; ?>
    <div class="middle">
        <div class="middle-left">
            <br/>
            <ul style="list-style:none;font-size:100%;">
                <li><a href="#Faculty">Faculty</a></li>
                <li><a href="#PS">PhD Students</a></li>
                <li><a href="#MS">Master Students</a></li>
            </ul>
        </div>
        <div class="middle-right">
            <br/><h2>People</h2><br/>
            <h2 id="Faculty">Faculty</h2><hr/><br/>
            <ul style="margin-left:50px;">
                <?php 
                    while($result=mysqli_fetch_assoc($result1)){
                        echo '<li><a href="./showpeople.php?id='.$result[id].'">'.urldecode($result[name]).'</a> '.urldecode($result[job]).'</li>';
                    }
                ?>
            </ul>
            <br/><h2 id="PS">PhD Students</h2><hr/><br/>
            <ul style="margin-left:50px;">
                <?php 
                    while($result=mysqli_fetch_assoc($result2)){
                        echo '<li><a href="./showpeople.php?id='.$result[id].'">'.urldecode($result[name]).'</a> </li>';
                    }
                ?>
            </ul><br/>
            <h2 id="MS">Master Students</h2><hr/><br/>
            <ul style="margin-left:50px;">
                <?php 
                    while($result=mysqli_fetch_assoc($result3)){
                        echo '<li><a href="./showpeople.php?id='.$result[id].'">'.urldecode($result[name]).'</a> </li>';
                    }
                ?>
            </ul><br/>
            
        </div>
        <div style="clear:both"></div>
    </div>
    <br/>
    <?php include 'footer.php'; ?>
</body>
</html>