<?php header("Content-Type:text/html; charset=utf-8"); ?>
<html>
<head>
<title>不負責任留言板</title>
</head>
<body>
<form method="POST" action="message.php">
<h2><strong>盡情留言吧!!</strong></h2>
<p><textarea name="message" rows="8" cols="52"></textarea></p>
<p><input type="submit" value="送出留言"> <input type="reset" value="清除留言"></p>
</form>
<?php 
      $link=mysqli_connect("localhost","root","webfinal123") or die("連接失敗");
      mysqli_select_db($link, "guest");
      mysqli_query($link, "SET NAMES utf8");
      $message=$_POST["message"];
      if (!empty($message)){
            $sqlStr= "INSERT INTO tb2 (message)";
            $sqlStr.="values('$message')";
            echo $sqlStr."<br>";
            // mysqli_query($link, $sqlStr) or die("寫入失敗");
            // echo "留言寫入成功<hr>"; 
      // }else{
      //       echo "請輸入留言內容<hr>";
      }
      $q=mysqli_query($link, 'select * from tb2');
      $c=1;
      while($row=mysqli_fetch_row($q)){
            foreach ($row as $i){
                  echo $c++.". ".$i." ";
            }
            echo "<br>";
      } 
?>
</body>
</html>