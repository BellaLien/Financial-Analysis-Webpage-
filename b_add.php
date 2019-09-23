<!doctype html>
<html>
<head><title>接收POST訊息&顯示</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
  
<?php 
    error_reporting(0);            //把提示警告去除
    $name=$_POST[bname];
    $news=$_POST[bnews];
     
    $link = mysqli_connect("localhost","root","webfinal123");
    mysqli_query($link, "set names 'UTF8'");
    $sql="insert into guest.bt1(no,name,news)
                        values(null,'$name','$news')";
    mysqli_query($link, $sql);
    include("b_disp.php");         //資料存入SQL後 回b_disp.php
?>
</body>
</html>
