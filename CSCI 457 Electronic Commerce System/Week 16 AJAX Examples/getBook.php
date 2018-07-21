<?php
  $username = $database = "userid";
  $password = "password";
  $host     = "mysqldev.aero.und.edu";
  $conn     = mysql_connect( $host, $username, $password );
  if ( !$conn ) {
    die( 'Could not connect: ' . mysql_error( ) );
  }
  mysql_select_db( $database, $conn );

  echo " <center><table id='table1' class='width80'>
  <tr>
   <th width='25%'>ISBN</th>
   <th width='50%'>Title</font></th>
   <th width='25%'>Price</th>
  </tr>";

  $q = $_GET["q"];
  $sql = "select * from bookList where ISBN = " . $q;
  if ( $result = mysql_query( $sql, $conn ) ) {
    while( $row = mysql_fetch_array( $result ) ) {
      echo "<tr>";
      echo "<td>" . $row['ISBN']  . "</td>";
      echo "<td>" . $row['title'] . "</td>";
      echo "<td>" . $row['price'] . "</td>";
      echo "</tr>";
    }
  }
  echo "</table></center>";
  mysql_close( $conn );
?> 