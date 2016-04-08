<html>
    <head>
        <meta charset="utf-8"> 
        <title>字符处理</title>
        <link rel="stylesheet" type="text/css" href="1.css" />
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <form action="dowork.php" method="post" id="step"></form>
        <form action="" method="post" id="view" hidden> 
            <input type="text" value="novalue" name="view" class="view"> 
            <input type="submit" value="Submit">
        </form>
        <div class="main">
            <div class="what1">
                <div>
                    <input type="submit" value="删除所有文件" name="deleteall" form="step"> 
                </div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.1 data cleaning</h3>
                    <h4>document without URL</h4>
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">Filename:</label>
                    <input type="file" name="step2_1"> 
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message1"></div>    
                <div id="list2-1"></div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.2 extract special fields</h3>
                    <h4> the words in “()”<br/>the words between “/”</h4>
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">Filename:</label>
                    <input type="file" name="step2_2"> 
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message2"></div>    
                <div id="list2-2"></div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.3 extract special fields</h3>
                    <h4> the uppercase phrases<br/>the hyphen phrases</h4>
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">Filename:</label>
                    <input type="file" name="step2_3"> 
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message3"></div>    
                <div id="list2-3"></div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.4 data cleaning</h3>
                    <h4>special characters and digital</h4>
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">Filename:</label>
                    <input type="file" name="step2_4"> 
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message4"></div>    
                <div id="list2-4"></div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.5 manually generate wordlists</h3>
                </div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.6 generate concept list 1</h3>
                    <h4>input: w1, w2, w3 and w4 output: W1</h4>
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">w1:</label>
                    <input type="file" name="step2_6_1"> <br/>
                    <label for="file">w2:</label>
                    <input type="file" name="step2_6_2"> <br/>
                    <label for="file">w3:</label>
                    <input type="file" name="step2_6_3"> <br/>
                    <label for="file">w4:</label>
                    <input type="file" name="step2_6_4"> <br/>
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message6"></div>    
                <div id="list2-6"></div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.7 generate concept list 2</h3>
                    <h4>input: wiki title output: W2</h4>
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">Filename:</label>
                    <input type="file" name="step2_7"> 
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message7"></div>    
                <div id="list2-7"></div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.8 generate concept list 3</h3>
                    <h4>input: part of English dictionary and international information output: W3</h4>
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">Filename:</label>
                    <input type="file" name="step2_8"> 
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message8"></div>    
                <div id="list2-8"></div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.9 generate total concept list</h3>
                    <h4>input: W1, W2 and W3 output: W</h4>
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">W1:</label>
                    <input type="file" name="step2_9_W1"> <br/>
                    <label for="file">W2:</label>
                    <input type="file" name="step2_9_W2"> <br/>
                    <label for="file">W3:</label>
                    <input type="file" name="step2_9_W3"> <br/>
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message9"></div>    
                <div id="list2-9"></div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.10 process the remainder documents</h3>
                    <h4>input: W and T’ output: t’i</h4>
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">W:</label>
                    <input type="file" name="step2_10_W"> <br/>
                    <label for="file">T':</label>
                    <input type="file" name="step2_10_T"> <br/>
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message10"></div>    
                <div id="list2-10"></div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.11 natural language processing with NLTK</h3>
                    <h4>input: t’i output: ki</h4>
                </div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.12 generate wordlist</h3>
                    <h4>input: ki output: W’</h4>
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">W:</label>
                    <input type="file" name="step2_12"> 
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message12"></div>    
                <div id="list2-12"></div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.13 manually generate concept list 4</h3>
                    <h4>input: W’ output: W4</h4>
                </div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.14 generate final concept list</h3>
                    <h4>input: W and W4 output: Wfinal</h4>
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">W:</label>
                    <input type="file" name="step2_14_W"> <br/>
                    <label for="file">W4:</label>
                    <input type="file" name="step2_14_W4"> <br/>
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message14"></div>    
                <div id="list2-14"></div>
                <hr/>
                <br/>
                <hr/>
                <div>
                    <h3>2.15 generate document’s concept index</h3>
                    <h4>input: Wfinal and T’ output: C</h4>
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label for="file">WF:</label>
                    <input type="file" name="step2_15_WF"> <br/>
                    <label for="file">T':</label>
                    <input type="file" name="step2_15_T"> <br/>
                    <input type="submit" value="上传文件"> 
                    </form> 
                </div>
                <div id="message15"></div>    
                <div id="list2-15"></div>
                <hr/>
            </div>
            <div class="what2">
                <div id="show"></div>
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
    function sumt($value)
    {
        $(".view").attr("value",$value);
        $("form#view").submit();
    }
</script>
<?php
    function uploadfile()
    {
        $myfile = $_FILES["step2_1"];
        $file_path1 = "./stepfiles/"."step2_1";
        $file_path2 = "./stepfiles/"."step2_1T"; 
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            echo '<script>alert("不合法的文件！");</script>';
            else
            {
                move_uploaded_file($myfile["tmp_name"],$file_path1); 
                echo '<script>$(function(){$("div#message1").html("上传成功");});</script>';
            }
        }
        $content="";
        if(file_exists($file_path1))
        $content=$content.'<input type="submit" value="开始处理" name="2_1" form="step"><br/>';
        if(file_exists($file_path2))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_1T\\'".')">结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path2.'">右键另存为</a>';
        echo '<script>$(function(){$("div#list2-1").html('."'$content'".');});</script>';
        
        $myfile = $_FILES["step2_2"];
        $file_path1 = "./stepfiles/"."step2_2";
        $file_path2 = "./stepfiles/"."step2_2T1"; 
        $file_path3 = "./stepfiles/"."step2_2T2"; 
        $file_path4 = "./stepfiles/"."step2_2T3";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            echo '<script>alert("不合法的文件！");</script>';
            else
            {
                move_uploaded_file($myfile["tmp_name"],$file_path1); 
                echo '<script>$(function(){$("div#message2").html("上传成功");});</script>';
            }
        }
        $content="";
        if(file_exists($file_path1))
        $content=$content.'<input type="submit" value="开始处理" name="2_2" form="step"><br/>';
        if(file_exists($file_path2))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_2T1\\'".')">括号中词组结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path2.'">词组右键另存为</a><br/>';
        if(file_exists($file_path3))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_2T2\\'".')">反斜杠词组结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path3.'">词组右键另存为</a><br/>';
        if(file_exists($file_path4))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_2T3\\'".')">剩余文档结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path4.'">剩余文档右键另存为</a>';
        echo '<script>$(function(){$("div#list2-2").html('."'$content'".');});</script>';
        
        $myfile = $_FILES["step2_3"];
        $file_path1 = "./stepfiles/"."step2_3";
        $file_path2 = "./stepfiles/"."step2_3T1"; 
        $file_path3 = "./stepfiles/"."step2_3T2"; 
        $file_path4 = "./stepfiles/"."step2_3T3";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            echo '<script>alert("不合法的文件！");</script>';
            else
            {
                move_uploaded_file($myfile["tmp_name"],$file_path1); 
                echo '<script>$(function(){$("div#message3").html("上传成功");});</script>';
            }
        }
        $content="";
        if(file_exists($file_path1))
        $content=$content.'<input type="submit" value="开始处理" name="2_3" form="step"><br/>';
        if(file_exists($file_path2))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_3T1\\'".')">大写词组结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path2.'">大写词组右键另存为</a><br/>';
        if(file_exists($file_path3))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_3T2\\'".')">连字符单词结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path3.'">连字符单词右键另存为</a><br/>';
        if(file_exists($file_path4))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_3T3\\'".')">剩余文档结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path4.'">剩余文档右键另存为</a>';
        echo '<script>$(function(){$("div#list2-3").html('."'$content'".');});</script>';
        
        $myfile = $_FILES["step2_4"];
        $file_path1 = "./stepfiles/"."step2_4";
        $file_path2 = "./stepfiles/"."step2_4T1"; 
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            echo '<script>alert("不合法的文件！");</script>';
            else
            {
                move_uploaded_file($myfile["tmp_name"],$file_path1); 
                echo '<script>$(function(){$("div#message4").html("上传成功");});</script>';
            }
        }
        $content="";
        if(file_exists($file_path1))
        $content=$content.'<input type="submit" value="开始处理" name="2_4" form="step"><br/>';
        if(file_exists($file_path2))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_4T1\\'".')">结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path2.'">右键另存为</a><br/>';
        echo '<script>$(function(){$("div#list2-4").html('."'$content'".');});</script>';
        
        $myfile = $_FILES["step2_6_1"];
        $file_path1 = "./stepfiles/"."step2_6_1";
        $illegel="";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            $illegel=$illegel."w1";
            else
            move_uploaded_file($myfile["tmp_name"],$file_path1); 
        }
        $myfile = $_FILES["step2_6_2"];
        $file_path1 = "./stepfiles/"."step2_6_2";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            $illegel=$illegel."w2";
            else
            move_uploaded_file($myfile["tmp_name"],$file_path1); 
        }
        $myfile = $_FILES["step2_6_3"];
        $file_path1 = "./stepfiles/"."step2_6_3";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            $illegel=$illegel."w3";
            else
            move_uploaded_file($myfile["tmp_name"],$file_path1); 
        }
        $myfile = $_FILES["step2_6_4"];
        $file_path1 = "./stepfiles/"."step2_6_4";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            $illegel=$illegel."w4";
            else
            move_uploaded_file($myfile["tmp_name"],$file_path1); 
        }
        $file_path1 = "./stepfiles/"."step2_6_1";
        $file_path2 = "./stepfiles/"."step2_6_2";
        $file_path3 = "./stepfiles/"."step2_6_3";
        $file_path4 = "./stepfiles/"."step2_6_4";
        $file_path5 = "./stepfiles/"."step2_6_W1";
        if($illegel!="")
        echo '<script>alert("'.$illegel.'文件不合法");</script>';
        $content="";
        if(file_exists($file_path1))
        $content=$content.'w1已就绪<br/>';
        if(file_exists($file_path2))
        $content=$content.'w2已就绪<br/>';
        if(file_exists($file_path3))
        $content=$content.'w3已就绪<br/>';
        if(file_exists($file_path4))
        $content=$content.'w4已就绪<br/>';
        echo '<script>$(function(){$("div#message6").html('."'$content'".');});</script>';
        $content="";
        if(file_exists($file_path1)&&file_exists($file_path2)&&file_exists($file_path3)&&file_exists($file_path4))
        $content=$content.'<input type="submit" value="开始处理" name="2_6" form="step"><br/>';
        if(file_exists($file_path5))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_6_W1\\'".')">结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path5.'">右键另存为</a><br/>';
        echo '<script>$(function(){$("div#list2-6").html('."'$content'".');});</script>';
        
        $myfile = $_FILES["step2_7"];
        $file_path1 = "./stepfiles/"."step2_7";
        $file_path2 = "./stepfiles/"."step2_7W2"; 
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            echo '<script>alert("不合法的文件！");</script>';
            else
            {
                move_uploaded_file($myfile["tmp_name"],$file_path1); 
                echo '<script>$(function(){$("div#message7").html("上传成功");});</script>';
            }
        }
        $content="";
        if(file_exists($file_path1))
        $content=$content.'<input type="submit" value="开始处理" name="2_7" form="step"><br/>';
        if(file_exists($file_path2))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_7W2\\'".')">结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path2.'">右键另存为</a><br/>';
        echo '<script>$(function(){$("div#list2-7").html('."'$content'".');});</script>';
        
        $myfile = $_FILES["step2_8"];
        $file_path1 = "./stepfiles/"."step2_8";
        $file_path2 = "./stepfiles/"."step2_8W3"; 
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            echo '<script>alert("不合法的文件！");</script>';
            else
            {
                move_uploaded_file($myfile["tmp_name"],$file_path1); 
                echo '<script>$(function(){$("div#message8").html("上传成功");});</script>';
            }
        }
        $content="";
        if(file_exists($file_path1))
        $content=$content.'<input type="submit" value="开始处理" name="2_8" form="step"><br/>';
        if(file_exists($file_path2))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_8W3\\'".')">结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path2.'">右键另存为</a><br/>';
        echo '<script>$(function(){$("div#list2-8").html('."'$content'".');});</script>';
        
        $myfile = $_FILES["step2_9_W1"];
        $file_path1 = "./stepfiles/"."step2_9_W1";
        $illegel="";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            $illegel=$illegel."W1";
            else
            move_uploaded_file($myfile["tmp_name"],$file_path1); 
        }
        $myfile = $_FILES["step2_9_W2"];
        $file_path1 = "./stepfiles/"."step2_9_W2";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            $illegel=$illegel."W2";
            else
            move_uploaded_file($myfile["tmp_name"],$file_path1); 
        }
        $myfile = $_FILES["step2_9_W3"];
        $file_path1 = "./stepfiles/"."step2_9_W3";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            $illegel=$illegel."W3";
            else
            move_uploaded_file($myfile["tmp_name"],$file_path1); 
        }
        $file_path1 = "./stepfiles/"."step2_9_W1";
        $file_path2 = "./stepfiles/"."step2_9_W2";
        $file_path3 = "./stepfiles/"."step2_9_W3";
        $file_path4 = "./stepfiles/"."step2_9_W";
        if($illegel!="")
        echo '<script>alert("'.$illegel.'文件不合法");</script>';
        $content="";
        if(file_exists($file_path1))
        $content=$content.'W1已就绪<br/>';
        if(file_exists($file_path2))
        $content=$content.'W2已就绪<br/>';
        if(file_exists($file_path3))
        $content=$content.'W3已就绪<br/>';
        echo '<script>$(function(){$("div#message9").html('."'$content'".');});</script>';
        $content="";
        if(file_exists($file_path1)&&file_exists($file_path2)&&file_exists($file_path3))
        $content=$content.'<input type="submit" value="开始处理" name="2_9" form="step"><br/>';
        if(file_exists($file_path4))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_9_W\\'".')">结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path4.'">右键另存为</a><br/>';
        echo '<script>$(function(){$("div#list2-9").html('."'$content'".');});</script>';
        
        $myfile = $_FILES["step2_10_W"];
        $file_path1 = "./stepfiles/"."step2_10_W";
        $illegel="";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            $illegel=$illegel."W ";
            else
            move_uploaded_file($myfile["tmp_name"],$file_path1); 
        }
        $myfile = $_FILES["step2_10_T"];
        $file_path1 = "./stepfiles/"."step2_10_T";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            $illegel=$illegel."T ";
            else
            move_uploaded_file($myfile["tmp_name"],$file_path1); 
        }
        $file_path1 = "./stepfiles/"."step2_10_W";
        $file_path2 = "./stepfiles/"."step2_10_T";
        $file_path3 = "./stepfiles/"."step2_10_t";
        if($illegel!="")
        echo '<script>alert("'.$illegel.'文件不合法");</script>';
        $content="";
        if(file_exists($file_path1))
        $content=$content.'W已就绪<br/>';
        if(file_exists($file_path2))
        $content=$content.'T已就绪<br/>';
        echo '<script>$(function(){$("div#message10").html('."'$content'".');});</script>';
        $content="";
        if(file_exists($file_path1)&&file_exists($file_path2))
        $content=$content.'<input type="submit" value="开始处理" name="2_10" form="step"><br/>';
        if(file_exists($file_path3))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_10_t\\'".')">结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path3.'">右键另存为</a><br/>';
        echo '<script>$(function(){$("div#list2-10").html('."'$content'".');});</script>';
        
        $myfile = $_FILES["step2_12"];
        $file_path1 = "./stepfiles/"."step2_12K";
        $file_path2 = "./stepfiles/"."step2_12W"; 
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            echo '<script>alert("不合法的文件！");</script>';
            else
            {
                move_uploaded_file($myfile["tmp_name"],$file_path1); 
                echo '<script>$(function(){$("div#message12").html("上传成功");});</script>';
            }
        }
        $content="";
        if(file_exists($file_path1))
        $content=$content.'<input type="submit" value="开始处理" name="2_12" form="step"><br/>';
        if(file_exists($file_path2))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_12W\\'".')">结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path2.'">右键另存为</a><br/>';
        echo '<script>$(function(){$("div#list2-12").html('."'$content'".');});</script>';
        
        $myfile = $_FILES["step2_14_W"];
        $file_path1 = "./stepfiles/"."step2_14_W";
        $illegel="";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            $illegel=$illegel."W ";
            else
            move_uploaded_file($myfile["tmp_name"],$file_path1); 
        }
        $myfile = $_FILES["step2_14_W4"];
        $file_path1 = "./stepfiles/"."step2_14_W4";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            $illegel=$illegel."W4 ";
            else
            move_uploaded_file($myfile["tmp_name"],$file_path1); 
        }
        $file_path1 = "./stepfiles/"."step2_14_W";
        $file_path2 = "./stepfiles/"."step2_14_W4";
        $file_path3 = "./stepfiles/"."step2_14_WF";
        if($illegel!="")
        echo '<script>alert("'.$illegel.'文件不合法");</script>';
        $content="";
        if(file_exists($file_path1))
        $content=$content.'W已就绪<br/>';
        if(file_exists($file_path2))
        $content=$content.'W4已就绪<br/>';
        echo '<script>$(function(){$("div#message14").html('."'$content'".');});</script>';
        $content="";
        if(file_exists($file_path1)&&file_exists($file_path2))
        $content=$content.'<input type="submit" value="开始处理" name="2_14" form="step"><br/>';
        if(file_exists($file_path3))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_14_WF\\'".')">结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path3.'">右键另存为</a><br/>';
        echo '<script>$(function(){$("div#list2-14").html('."'$content'".');});</script>';
        
        $myfile = $_FILES["step2_15_WF"];
        $file_path1 = "./stepfiles/"."step2_15_WF";
        $illegel="";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            $illegel=$illegel."WF ";
            else
            move_uploaded_file($myfile["tmp_name"],$file_path1); 
        }
        $myfile = $_FILES["step2_15_T"];
        $file_path1 = "./stepfiles/"."step2_15_T";
        if(!empty($myfile))
        {
            $filename = $myfile['name']; 
            $type = strstr($filename, '.'); 
            if ($type != ".txt") 
            $illegel=$illegel."T ";
            else
            move_uploaded_file($myfile["tmp_name"],$file_path1); 
        }
        $file_path1 = "./stepfiles/"."step2_15_WF";
        $file_path2 = "./stepfiles/"."step2_15_T";
        $file_path3 = "./stepfiles/"."step2_15_C";
        if($illegel!="")
        echo '<script>alert("'.$illegel.'文件不合法");</script>';
        $content="";
        if(file_exists($file_path1))
        $content=$content.'WF已就绪<br/>';
        if(file_exists($file_path2))
        $content=$content.'T已就绪<br/>';
        echo '<script>$(function(){$("div#message15").html('."'$content'".');});</script>';
        $content="";
        if(file_exists($file_path1)&&file_exists($file_path2))
        $content=$content.'<input type="submit" value="开始处理" name="2_15" form="step"><br/>';
        if(file_exists($file_path3))
        $content=$content.'<a href="#" onclick="sumt('."\\'step2_15_C\\'".')">结果预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$file_path3.'">右键另存为</a><br/>';
        echo '<script>$(function(){$("div#list2-15").html('."'$content'".');});</script>';
    }
    function view()
    {
        if(!$_POST['view'])
        exit;
        $content="";
        $file_path = "./stepfiles/".$_POST['view'];
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
    uploadfile();
    view();
?>