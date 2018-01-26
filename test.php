<?php
/**
 * Created by PhpStorm.
 * User: yafei
 * Date: 2017-12-26
 * Time: 20:28
 */
ini_set('display_errors', 1);
if(false) {
    echo 6666;

}
 else{
    echo 555;
 }

 echo "kkkkkkkkkk kkkkkkkkkkkkkkkkkkkkkkkkk";
//echo time();

print_r($_GET);
print_r($_POST);





ariteMsg(); //
function ariteMsg() {
    echo "Hello world!";
}

//writeMsg(); // 调用函数
?>
<html>
<head>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("div").ajaxSuccess(function(){
                alert("AJAX 请求已成功完成");
            });
            $("button").click(function(){
                // $("div.footer").load("http://zsr.iirii.com/aqq/index.html");
                $("div").load("http://zsr.iirii.com/aqq/index.html");

            });
        });
    </script>
</head>

<body>

<div id="txt"><h2>通过 AJAX 改变文本</h2></div>
        <<button>改变内容</button>
</body>
</html>

