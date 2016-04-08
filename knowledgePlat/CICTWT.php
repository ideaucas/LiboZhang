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
                    <h3>Concept index compare to wiki title</h3>
                    <h4>input: C output: (C∩wiki_number)/C_number</h4>
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
                <div id="output">
                </div>
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
        $file_path = "./step4files/"."4_file_C";
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
        $file_path1 = "./step4files/"."4_file";
        $file_path2 = "./step4files/"."4_file_C"; 
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
        $content=$content.'<input type="submit" value="开始处理" name="4_C" form="step"><br/>';
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
    if($_POST['4_C'])
    {
        $file_path1 = "./step4files/"."4_file";
        $file_path2 = "./step4files/"."wiki"; 
        $file_path3 = "./step4files/"."4_file_C";
        $myfile1 = fopen($file_path1, "r");
        $myfile2 = fopen($file_path2, "r");
        $myfile3 = fopen($file_path3, "w");
        $input=[];
        $words=[];
        while(!feof($myfile1)) 
        {
            $sentence=fgets($myfile1);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=deletespace($sentence);
            if(strlen($sentence)==0)
            continue;
            $input[]=strtolower($sentence);
        }
        while(!feof($myfile2)) 
        {
            $sentence=fgets($myfile2);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=deletespace($sentence);
            if(strlen($sentence)==0)
            continue;
            $words[]=strtolower($sentence);
        }
        $intersect=array_intersect($input,$words);
        foreach($intersect as $word)
        fwrite($myfile3,$word."\r\n");
        fclose($myfile1);
        fclose($myfile2);
        fclose($myfile3);
        $content="";
        $content=$content."输入文件词数为：".count($input)."<br/>";
        $content=$content."wiki词数为：".count($words)."<br/>";
        $content=$content."相交比率为：".(floatval(count($intersect))/floatval(count($input)))."<br/>";
        echo '<script>$(function(){$("div#output").html('."'$content'".');});</script>';
        view();
    }
    uploadfile();
?>