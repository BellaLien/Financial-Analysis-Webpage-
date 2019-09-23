<html>
<head><title>留言板</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<form action="b_insert.php" method=post>
    名字: 
    <input name=bname type=text /><br />
    留言:
    <input name=bnews type=text  />
    <input name=ok type=submit value="OK"/><br />
</form>
<br />
<?php
    $link = mysqli_connect("localhost","root","webfinal123");
    mysqli_query($link, "set names 'UTF8'");
    $sql="select * from guest.bt1";
    $aa=mysqlo_query($link,$sql);
 
    echo "<table width=400 border="2px black solid" style="border-collapse:collapse">";
		
        while($bb=mysqli_fetch_row($aa)){
        echo "<tr><td>$bb[0]"."$bb[1]"."說:"."$bb[2]</td></tr>";
        }
    echo "</table>";
?>


</body>
</html>
