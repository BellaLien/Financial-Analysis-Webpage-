<!doctype html>
<html>
<head><title>顯示資料&加表格</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
    $link = mysqli_connect("localhost","root","webfinal123");
 	mysqli_query($link, "set names 'UTF8'");
    $sql="select * from guest.bt1";
    $aa=mysqli_query($link, $sql);
 
    echo "<table width=400 border=1>";
     
        while($bb=mysqli_fetch_row($aa)){
        echo "<tr><td>$bb[0]</td>"."<td>$bb[1]".": "."$bb[2]</td></tr>";
        }
    echo "</table>";
?>
</body>
</html>