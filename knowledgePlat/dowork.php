<meta http-equiv="refresh" content="0;url=steps.php">
<?php
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
    if($_POST['2_1'])
    {
        $file_path1 = "./stepfiles/"."step2_1";
        $file_path2 = "./stepfiles/"."step2_1T";
        $myfiler = fopen($file_path1, "r");
        $myfilew = fopen($file_path2, "w");
        while(!feof($myfiler)) 
        {
            $sentence=fgets($myfiler);
            $sentence=preg_replace("/^http:\/\/.*/"," ",$sentence);
            fwrite($myfilew, $sentence);
        }
        fclose($myfiler);
        fclose($myfilew);
    }
    if($_POST['2_2'])
    {
        $file_path1 = "./stepfiles/"."step2_2";
        $file_path2 = "./stepfiles/"."step2_2T1"; 
        $file_path3 = "./stepfiles/"."step2_2T2";
        $file_path4 = "./stepfiles/"."step2_2T3";
        $myfile1 = fopen($file_path1, "r");
        $myfile2 = fopen($file_path2, "w");
        $myfile3 = fopen($file_path3, "w");
        $myfile4 = fopen($file_path4, "w");
        while(!feof($myfile1)) 
        {
            $words=[];
            $sentence=fgets($myfile1);
            preg_match_all("/\(.*?\)/",$sentence,$words);
            foreach($words as $key=>$word)
            foreach($word as $key1=>$value)
            fwrite($myfile2, deletespace(preg_replace("/[^a-zA-Z]/"," ",$value))."\r\n");
            $sentence=preg_replace("/\(.*?\)/"," ",$sentence);
            $words=[];
            $values=[];
            $preg="/((?<=[^a-zA-Z0-9\s])[a-zA-Z0-9\s]+(?=\/))|((?<=\/)[a-zA-Z0-9\s]+(?=[^a-zA-Z0-9\s]))|((?<=\/)[a-zA-Z0-9\s]+(?=\/))|(^[a-zA-Z0-9\s]+(?=\/))|((?<=\/)[a-zA-Z0-9\s]+$)/";
            preg_match_all($preg,$sentence,$words);
            foreach($words as $key=>$word)
            foreach($word as $key1=>$value)
            $values[$value]=true;
            foreach($values as $key=>$value)
            fwrite($myfile3, deletespace(preg_replace("/[^a-zA-Z]/"," ",$key))."\r\n");
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=preg_replace("/\//"," ",$sentence);
            fwrite($myfile4, deletespace($sentence)."\r\n");
        }
        fclose($myfile1);
        fclose($myfile2);
        fclose($myfile3);
        fclose($myfile4);
    }
    if($_POST['2_3'])
    {
        $file_path1 = "./stepfiles/"."step2_3";
        $file_path2 = "./stepfiles/"."step2_3T1"; 
        $file_path3 = "./stepfiles/"."step2_3T2";
        $file_path4 = "./stepfiles/"."step2_3T3";
        $myfile1 = fopen($file_path1, "r");
        $myfile2 = fopen($file_path2, "w");
        $myfile3 = fopen($file_path3, "w");
        $myfile4 = fopen($file_path4, "w");
        while(!feof($myfile1)) 
        {
            $words=[];
            $values=[];
            $sentence=fgets($myfile1);
            $preg="/(?:[A-Z][a-zA-Z0-9-]*\s+)+[A-Z][a-zA-Z0-9-]*[^a-zA-Z0-9- ]/";
            preg_match_all($preg,$sentence,$words);
            foreach($words as $key=>$word)
            foreach($word as $key1=>$value)
            $values[$value]=true;
            foreach($values as $key=>$value)
            fwrite($myfile2, deletespace($key)."\r\n");
            $sentence=preg_replace($preg," ",$sentence);
            $words=[];
            $values=[];
            $preg="/[^\s]+-[^\s]+/";
            preg_match_all($preg,$sentence,$words);
            foreach($words as $key=>$word)
            foreach($word as $key1=>$value)
            $values[$value]=true;
            foreach($values as $key=>$value)
            fwrite($myfile3, deletespace($key)."\r\n");
            $sentence=preg_replace($preg," ",$sentence);
            fwrite($myfile4, deletespace($sentence)."\r\n");
        }
        fclose($myfile1);
        fclose($myfile2);
        fclose($myfile3);
        fclose($myfile4);
    }
    if($_POST['2_4'])
    {
        $file_path1 = "./stepfiles/"."step2_4";
        $file_path2 = "./stepfiles/"."step2_4T1"; 
        $myfile1 = fopen($file_path1, "r");
        $myfile2 = fopen($file_path2, "w");
        while(!feof($myfile1)) 
        {
            $sentence=fgets($myfile1);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            fwrite($myfile2, deletespace($sentence)."\r\n");
        }
        fclose($myfile1);
        fclose($myfile2);
    }
    if($_POST['2_6'])
    {
        $file_path1 = "./stepfiles/"."step2_6_1";
        $file_path2 = "./stepfiles/"."step2_6_2"; 
        $file_path3 = "./stepfiles/"."step2_6_3";
        $file_path4 = "./stepfiles/"."step2_6_4";
        $file_path5 = "./stepfiles/"."step2_6_W1";
        $myfile1 = fopen($file_path1, "r");
        $myfile2 = fopen($file_path2, "r");
        $myfile3 = fopen($file_path3, "r");
        $myfile4 = fopen($file_path4, "r");
        $myfile5 = fopen($file_path5, "w");
        $words=[];
        while(!feof($myfile1)) 
        {
            $sentence=fgets($myfile1);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=strtolower($sentence);
            $sentence=deletespace($sentence);
            $words[$sentence]=true;
        }
        while(!feof($myfile2)) 
        {
            $sentence=fgets($myfile2);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=strtolower($sentence);
            $sentence=deletespace($sentence);
            $words[$sentence]=true;
        }
        while(!feof($myfile3)) 
        {
            $sentence=fgets($myfile3);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=strtolower($sentence);
            $sentence=deletespace($sentence);
            $words[$sentence]=true;
        }
        while(!feof($myfile4)) 
        {
            $sentence=fgets($myfile4);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=strtolower($sentence);
            $sentence=deletespace($sentence);
            $words[$sentence]=true;
        }
        ksort($words);
        foreach($words as $word=>$value)
        fwrite($myfile5, $word."\r\n");
        fclose($myfile1);
        fclose($myfile2);
        fclose($myfile3);
        fclose($myfile4);
        fclose($myfile5);
    }
    if($_POST['2_7'])
    {
        $file_path1 = "./stepfiles/"."step2_7";
        $file_path2 = "./stepfiles/"."step2_7W2"; 
        $myfile1 = fopen($file_path1, "r");
        $myfile2 = fopen($file_path2, "w");
        while(!feof($myfile1)) 
        {
            $sentence=fgets($myfile1);
            $preg="/[^a-zA-Z]/";
            if(preg_match($preg,$sentence[0]))
            continue;
            $sentence=strtolower($sentence);
            if(!preg_match("/computer/",$sentence))
            continue;
            $sentence=preg_replace("/\(.*computer.*\)/"," ",$sentence);
            $preg="/[^a-zA-Z0-9]/";
            $sentence=preg_replace($preg," ",$sentence);
            fwrite($myfile2, deletespace($sentence)."\r\n");
        }
        fclose($myfile1);
        fclose($myfile2);
    }
    if($_POST['2_8'])
    {
        $file_path1 = "./stepfiles/"."step2_8";
        $file_path2 = "./stepfiles/"."step2_8W3"; 
        $myfile1 = fopen($file_path1, "r");
        $myfile2 = fopen($file_path2, "w");
        while(!feof($myfile1)) 
        {
            $sentence=fgets($myfile1);
            $preg="/[^a-zA-Z]/";
            $sentence=strtolower($sentence);
            $sentence=preg_replace($preg," ",$sentence);
            fwrite($myfile2, deletespace($sentence)."\r\n");
        }
        fclose($myfile1);
        fclose($myfile2);
    }
    if($_POST['2_9'])
    {
        $file_path1 = "./stepfiles/"."step2_9_W1";
        $file_path2 = "./stepfiles/"."step2_9_W2"; 
        $file_path3 = "./stepfiles/"."step2_9_W3";
        $file_path4 = "./stepfiles/"."step2_9_W";
        $myfile1 = fopen($file_path1, "r");
        $myfile2 = fopen($file_path2, "r");
        $myfile3 = fopen($file_path3, "r");
        $myfile4 = fopen($file_path4, "w");
        $words=[];
        while(!feof($myfile1)) 
        {
            $sentence=fgets($myfile1);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=strtolower($sentence);
            $sentence=deletespace($sentence);
            $words[$sentence]=true;
        }
        while(!feof($myfile2)) 
        {
            $sentence=fgets($myfile2);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=strtolower($sentence);
            $sentence=deletespace($sentence);
            $words[$sentence]=true;
        }
        while(!feof($myfile3)) 
        {
            $sentence=fgets($myfile3);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=strtolower($sentence);
            $sentence=deletespace($sentence);
            $words[$sentence]=true;
        }
        ksort($words);
        foreach($words as $word=>$value)
        fwrite($myfile4, $word."\r\n");
        fclose($myfile1);
        fclose($myfile2);
        fclose($myfile3);
        fclose($myfile4);
    }
    if($_POST['2_10'])
    {
        $file_path1 = "./stepfiles/"."step2_10_W";
        $file_path2 = "./stepfiles/"."step2_10_T"; 
        $file_path3 = "./stepfiles/"."step2_10_t";
        $myfile1 = fopen($file_path1, "r");
        $myfile2 = fopen($file_path2, "r");
        $myfile3 = fopen($file_path3, "w");
        $words=[];
        while(!feof($myfile1)) 
        {
            $sentence=fgets($myfile1);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=strtolower($sentence);
            $sentence=deletespace($sentence);
            if(strlen($sentence)<3)
            continue;
            if(!array_search($sentence,$words))
            $words[]=$sentence;
        }
        usort($words, "my_sort");
        while(!feof($myfile2)) 
        {
            $sentence=fgets($myfile2);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=strtolower($sentence);
            $sentence=deletespace($sentence);
            if($sentence=="")
            continue;
            foreach($words as $word)
            $sentence=str_replace($word," ",$sentence);
            $sentence=deletespace($sentence);
            fwrite($myfile3, $sentence."\r\n");
        }
        fclose($myfile1);
        fclose($myfile2);
        fclose($myfile3);
    }
    if($_POST['2_12'])
    {
        $file_path1 = "./stepfiles/"."step2_12K";
        $file_path2 = "./stepfiles/"."step2_12W"; 
        $myfile1 = fopen($file_path1, "r");
        $myfile2 = fopen($file_path2, "w");
        $words=[];
        while(!feof($myfile1)) 
        {
            $sentence=fgets($myfile1);
            $preg="/[^a-zA-Z]/";
            $sentence=strtolower($sentence);
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=deletespace($sentence);
            $sentence=preg_split('/\s+/',$sentence);
            foreach ($sentence as $word)
            {
                if(strlen($word)<3)
                continue;
                if(!array_search($word,$words))
                $words[]=$word;
            }
        }
        asort($words);
        foreach($words as $word)
        fwrite($myfile2,$word."\r\n");
        fclose($myfile1);
        fclose($myfile2);
    }
    if($_POST['2_14'])
    {
        $file_path1 = "./stepfiles/"."step2_14_W";
        $file_path2 = "./stepfiles/"."step2_14_W4"; 
        $file_path3 = "./stepfiles/"."step2_14_WF";
        $myfile1 = fopen($file_path1, "r");
        $myfile2 = fopen($file_path2, "r");
        $myfile3 = fopen($file_path3, "w");
        $words=[];
        while(!feof($myfile1)) 
        {
            $sentence=fgets($myfile1);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=strtolower($sentence);
            $sentence=deletespace($sentence);
            if($sentence=="")
            continue;
            if(!array_search($sentence,$words))
            $words[]=$sentence;
        }
        while(!feof($myfile2)) 
        {
            $sentence=fgets($myfile2);
            $preg="/[^a-zA-Z]/";
            $sentence=preg_replace($preg," ",$sentence);
            $sentence=strtolower($sentence);
            $sentence=deletespace($sentence);
            if($sentence=="")
            continue;
            if(!array_search($sentence,$words))
            $words[]=$sentence;
        }
        asort($words);
        foreach($words as $word)
        fwrite($myfile3,$word."\r\n");
        fclose($myfile1);
        fclose($myfile2);
        fclose($myfile3);
    }
    if($_POST['2_15'])
    {
        $file_path1 = "./stepfiles/"."step2_15_WF";
        $file_path2 = "./stepfiles/"."step2_15_T"; 
        $file_path3 = "./stepfiles/"."step2_15_C";
        $myfile1 = fopen($file_path1, "r");
        $myfile2 = fopen($file_path2, "r");
        $myfile3 = fopen($file_path3, "w");
        $words=[];
        $wordsfreq=[];
        while(!feof($myfile1)) 
        {
            $sentence=fgets($myfile1);
            //$preg="/[^a-zA-Z]/";
            //$sentence=preg_replace($preg," ",$sentence);
            //$sentence=strtolower($sentence);
            //$sentence=deletespace($sentence);
            $sentence=preg_replace("/\r\n/","",$sentence);
            if(strlen($sentence)<3)
            continue;
            if(!array_search($sentence,$words))
            $words[]=$sentence;
        }
        usort($words, "my_sort");
        while(!feof($myfile2)) 
        {
            $sentence=fgets($myfile2);
           // $preg="/[^a-zA-Z]/";
            //$sentence=preg_replace($preg," ",$sentence);
            //$sentence=strtolower($sentence);
            //$sentence=deletespace($sentence);
            if($sentence=="")
            continue;
            $count=0;
            foreach($words as $key=>$word)
            {
                $sentence=str_replace($word," ",$sentence,$count);
                if($count)
                if($wordsfreq[$word])
                $wordsfreq[$word]+=$count;
                else
                $wordsfreq[$word]=$count;
            }
        }
        arsort($wordsfreq);
        foreach($wordsfreq as $word=>$freq)
        fwrite($myfile3,$word." ".$freq."\r\n");
        fclose($myfile1);
        fclose($myfile2);
        fclose($myfile3);
    }
    if($_POST['deleteall'])
    {
        $file_path = "./stepfiles/";
        deletefile($file_path);
    }
?>