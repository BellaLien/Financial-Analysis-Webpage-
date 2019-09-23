
<?php
   $select = $_POST["select"];
   $query = "SELECT " . $select . " FROM DuPontAnalysis WHERE Company='Nanya'";
   if ( !( $database = mysqli_connect( "localhost", "root", "webfinal123" ) ) )
       die( "Could not connect to database </body></html>" );
   if ( !mysqli_select_db( $database, "finalproject" ) )
       die( "Could not open finalproject database </body></html>" );
   if ( !( $result = mysqli_query( $database, $query ) ) )
   {
       print( "<p>Could not execute query!</p>" );
       die( mysqli_error($database = mysqli_connect( "localhost", "root", "webfinal123" )) . "</body></html>" );
   }
   mysqli_close( $database );

   print ("<table><tr><td>簡稱</td><td>證期會代碼</td><td>年月</td><td>淨利率</td><td>資產週轉率</td><td>權益乘數</td><td>股東權益報酬率</td></tr>");
  
   while ( $row = mysqli_fetch_row( $result ) )
   {
       

       print("<tr>");
       foreach ( $row as $value )
         print( "<td>$value</td>" );
       print( "</tr>" );
   }
   print ("</table>");
?>
