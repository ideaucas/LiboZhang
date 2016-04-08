<html>
    <head>
        <meta charset="utf-8"> 
        <title>字符处理</title>
        <link rel="stylesheet" type="text/css" href="1.css" />
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <form action="" method="post" id="step"></form>
        <div class="main">
            <div class="what1">
                <div>
                    <h3>Generate computer science concept index using our algorithm</h3>
                    <h4>input: documents output: C</h4>
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">Filename:</label>
                    <input type="file" name="file"> 
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message"></div>
                <div id="list"></div>
            </div>
            <div class="what2">
                <div id="show">
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    window.onload=function(){
        var a=$(".what1").css("height");
        var b=$(".what2").css("height");
        var c=$(".main").css("height");
        $(".what2").css("height",c);
        $(".what1").css("height",c);
    }
</script>
<?php
    function view()
    {
        $content="";
        $file_path = "./step3files/"."3_file_C";
        $myfile = fopen($file_path, "r");
        while(!feof($myfile))
        {
            $sentence=fgets($myfile);
            $sentence=preg_replace("/'/","\\'",$sentence);
            $sentence=preg_replace("/[\r\n]+/","<br/>",$sentence);
            $content=$content.$sentence;
        }
        fclose($myfile);
        echo '<script>$(function(){$("div#show").html('."'$content'".');});</script>';
    }
    function uploadfile()
    {
        $myfile = $_FILES["file"];
        $file_path1 = "./step3files/"."3_file";
        $file_path2 = "./step3files/"."3_file_C"; 
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            echo '<script>alert("不合法的文件！");</script>';
            else
            {
                move_uploaded_file($myfile["tmp_name"],$file_path1); 
                echo '<script>$(function(){$("div#message").html("上传成功");});</script>';
            }
        }
        $content="";
        if(file_exists($file_path1))
        $content=$content.'<input type="submit" value="开始处理" name="3_C" form="step"><br/>';
        echo '<script>$(function(){$("div#list").html('."'$content'".');});</script>';

        
    }
    function deletespace($word)
    {
        $word=preg_replace("/(^\s+)|(\s+$)/","",$word);
        $word=preg_replace("/\s+/"," ",$word);
        return $word;
    }
    function my_sort($a, $b)
    {
        if(strlen($a)>strlen($b))
        return -1;
        return 1;
    }
    function deletefile($path)
    {
        if (is_dir($path))
        {
            $handle = opendir($path);
            while ($file = readdir($handle))
            {
                if ($file[0] == '.')continue;
                if (is_file($path.$file))
                unlink($path.$file);
            }
            closedir($handle);
        }
    }
    if($_POST['3_C'])
    {
        $file_path1 = "./step3files/"."3_file";
        $file_path2 = "./step3files/"."index"; 
        $file_path3 = "./step3files/"."3_file_C";
        $myfile1 = fopen($file_path1, "r");
        $myfile2 = fopen($file_path2, "r");
        $myfile3 = fopen($file_path3, "w");
        $content=[];
        $words=[];
        $freq=[];
        while(!feof($myfile1)) 
        {
            $sentence=fgets($myfile1);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $content[]=strtolower(deletespace($sentence));
        }
        while(!feof($myfile2)) 
        {
            $sentence=fgets($myfile2);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $words[]=strtolower(deletespace($sentence));
        }
        usort($words, "my_sort");
        $cnt=0;
        $i=0;
        for($i=0;$i<count($content);$i++)
        {
            foreach($words as $word)
            {
                str_replace($word," ",$content[$i],$cnt);
                if($freq[$word])
                $freq[$word]+=$cnt;
                else
                $freq[$word]=$cnt;
            }
        }
        foreach($freq as $word=>$cnt)
        if($cnt>0)
        fwrite($myfile3,$word." ".$cnt."\r\n");
        fclose($myfile1);
        fclose($myfile2);
        fclose($myfile3);
        view();
    }
    uploadfile();
?>