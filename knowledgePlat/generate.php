<html>
    <head>
        <meta charset="utf-8"> 
        <title>字符处理</title>
        <link rel="stylesheet" type="text/css" href="1.css" />
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <div class="main">
            <div class="what1">
                <div>
                    Input: original documents output: wordlists
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">Filename:</label>
                    <input type="file" name="filename"> 
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message"></div>
                <div id="filelist"></div>
                <hr/>
            </div>
            <div class="what2">
                <div id="wordlists"></div>
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
    function wait()
    {
        $(".wait").css("display","block");
    }
</script>
<?php 
    $myfile = $_FILES["filename"]; 
    if(!empty($myfile))
    { 
        $filename = $_FILES['filename']['name']; 
        $type = strstr($filename, '.'); 
        if ($type != ".txt") 
        {
            echo '<script>alert("不合法的文件！");</script>';
            makefilelist();
            exit; 
        }
        $file_path = "./files/".$filename; 
        move_uploaded_file($myfile["tmp_name"],$file_path); 
        echo '<script>$(function(){$("div#message").html("上传成功");});</script>';
    }
    function get_files_by_ext($path, $ext)
    {
        $files = array();
        if (is_dir($path))
        {
            $handle = opendir($path);
            while ($file = readdir($handle))
            {
                if ($file[0] == '.')continue;
                if (is_file($path.$file) and preg_match('/\.'.$ext.'$/', $file))
                $files[] = $file;
            }
            closedir($handle);
            sort($files);
        }
        return $files;
    }
    $idx=0;
    $wordfreq=[];
    $wordstotle=[];
    $files=get_files_by_ext('files/', 'txt');
    function makefilelist()
    {
        $idx=0;
        $files=get_files_by_ext('files/', 'txt');
        if(!$files)
        exit;
        $content='<hr/>请选择要生成词表的文件:<br/><form action="" method="post" id="sort">';
        $content=$content.'<table class="filelist">';
        foreach($files as $file)
        {
            if($_POST[strval($idx)]=="on")
            $check="checked";
            else
            $check="";
            $content=$content.'<tr>';
            $content=$content.'<td class="filelist_td" id="filelist_left">'."$file:".'</td>';
            $content=$content.'<td class="filelist_td" id="filelist_right"><input type="checkbox" '.$check.' name="'."$idx".'">'.'</td>';
            $content=$content.'<td><input type="submit" form="nameform" value="删除" name="'."$idx".'"></td>';
            $content=$content.'</tr>';
            $idx++;
        }
        $content=$content.'<tr><td><input type="submit" value="生成词表" onclick="wait()"></td><td colspan="2" class="wait">Please wait...</td></tr>';
        $content=$content.'</table>';
        $content=$content.'</form>';
        $content=$content.'<form action="" method="post" id="nameform"></form>';
        echo '<script>$(function(){$("div#filelist").html(\''."$content".'\');});</script>';
    }
    makefilelist();
    foreach ($_POST as $key=>$state)
    {
        if($state=="删除")
        {
            $myfile ='files/'.$files[intval($key)];
            unlink($myfile); 
            makefilelist();
            exit;
        }
        if($state!="on")
        continue;
        $myfile = fopen('files/'.$files[intval($key)], "r");
        while(!feof($myfile)) 
        {
            $name=$files[intval($key)];
            $sentence=fgets($myfile);
            $sentence=strtolower(trim(preg_replace('/[^a-zA-Z]/', ' ',$sentence)));
            $words=preg_split('/\s+/',$sentence);
            foreach ($words as $word)
            {
                if(strlen($word)<3||strlen($word)>20)
                continue;
                if($wordfreq[$word][$name])
                $wordfreq[$word][$name]++;
                else
                $wordfreq[$word][$name]=1;
                if($wordstotle[$word])
                $wordstotle[$word]++;
                else
                $wordstotle[$word]=1;
            }
        }
        fclose($myfile);
    }
    if(count($wordfreq)<=0)
    exit;
    $content='请选择排序方式:';
    $content=$content.'<input type="submit" form="sort" value="按单词排序" name="sort" onclick="wait()">';
    $content=$content.'<input type="submit" form="sort" value="按总频率排序" name="sort" onclick="wait()">';
    $content=$content.'<table class="wordlist" cellpadding="5px" cellspacing="0">';
    $content=$content.'<tr><td class="freq">Words</td><td class="freq">Totle</td>';
    foreach ($_POST as $key=>$state)
    {
        if($state!="on")
        continue;
        $name=$files[intval($key)];
        $content=$content.'<td class="freq">'."$name".'</td>';
        foreach ($wordfreq as $key1=>$value1) 
        {
            if(!$wordfreq[$key1][$name])
            $wordfreq[$key1][$name]=0;
        }
    }
    $content=$content.'</tr>';
    if($_POST['sort']=="按总频率排序")
    {
        arsort($wordstotle);
        foreach ($wordstotle as $key1=>$value1) 
        {
            $content=$content.'<tr>';
            $content=$content.'<td class="freq">'."$key1".'</td>';
            $content=$content.'<td class="freq">'."$wordstotle[$key1]".'</td>';
            foreach ($_POST as $key=>$state) 
            {
                if($state!="on")
                continue;
                $name=$files[intval($key)];
                $num=$wordfreq[$key1][$name];
                $content=$content.'<td class="freq">'."$num".'</td>';
            }
            $content=$content.'</tr>';
        }
        $content=$content.'</table>';
        echo '<script>$(function(){$("div#wordlists").html(\''."$content".'\');});</script>';
    }
    else
    {
        ksort($wordfreq);
        foreach ($wordfreq as $key1=>$value1) 
        {
            $content=$content.'<tr>';
            $content=$content.'<td class="freq">'."$key1".'</td>';
            $content=$content.'<td class="freq">'."$wordstotle[$key1]".'</td>';
            foreach ($_POST as $key=>$state) 
            {
                if($state!="on")
                continue;
                $name=$files[intval($key)];
                $num=$wordfreq[$key1][$name];
                $content=$content.'<td class="freq">'."$num".'</td>';
            }
            $content=$content.'</tr>';
        }
        $content=$content.'</table>';
        echo '<script>$(function(){$("div#wordlists").html(\''."$content".'\');});</script>';
    }
?> 
