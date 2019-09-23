
<?php
   $select = $_POST["select"];
   $query = "SELECT " . $select . " FROM CompanyRatio WHERE Company='Nanya'";
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

   print ("<table><tr><td>簡稱</td><td>證期會代碼</td><td>年月</td><td>稅後淨利成長率</td><td>總資產成長</td><td>營收成長率</td><td>營業毛利成長率</td><td>總資產報酬成長率</td></tr>");
  
   while ( $row = mysqli_fetch_row( $result ) )
   {
       

       print("<tr>");
       foreach ( $row as $value )
         print( "<td>$value</td>" );
       print( "</tr>" );
   }
   print ("</table>");
?>
