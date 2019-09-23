<!doctype html>
<html>
<head><title>留言板寫入資料庫</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
  
<?php 
error_reporting(0); 
    $name=$_POST[bname];
    $news=$_POST[bnews];
     
    $link = mysqli_connect("localhost","root","webfinal123");
    mysqli_query($link, "set names 'UTF8'");
    
    if(isset($name)){
    	$sql="insert into test.bt1(no,name,news)
                        values(null,'$name','$news')";
    mysqli_query($link, $sql);
    include("b_index.php");
	}
    
?>
</body>
</html>