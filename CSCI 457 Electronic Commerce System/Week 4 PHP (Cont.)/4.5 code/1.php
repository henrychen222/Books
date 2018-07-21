<?php

if ( $_POST['act'] == "Enter" ) {
  header( "Content-type: text/html" );
  $file = fopen( "2_1.html", "r" )
    or exit( "Unable to open file!" );
  while ( !feof( $file ) )
    echo  fgets( $file );
  fclose( $file );
  echo  $_POST[name];

  $file = fopen( "2_2.html", "r" )
    or exit( "Unable to open file!" );
  while ( !feof( $file ) )
    echo  fgets( $file );
  fclose( $file );
  echo  $_POST[name];

  $file = fopen( "2_3.html", "r" )
    or exit( "Unable to open file!" );
  while ( !feof( $file ) )
    echo  fgets( $file );
  fclose( $file );
}

elseif ( $_POST["act"] == "Display source" ) {
  header( "Content-type: text/plain" );
  $file = fopen( "1.php", "r" ) or
    exit( "Unable to open file!" );
  while ( !feof( $file ) )
    echo  fgets( $file );
  fclose( $file );
}

?>