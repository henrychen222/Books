<?php

if ( $_POST['act'] == "Next page" ) {
  header( "Content-type: text/html" );
  $file = fopen( "3_1.html", "r" )
    or exit( "Unable to open file!" );
  while ( !feof( $file ) )
    echo  fgets( $file );
  fclose( $file );
  echo  $_GET[name];

  $file = fopen( "3_2.html", "r" )
    or exit( "Unable to open file!" );
  while ( !feof( $file ) )
    echo  fgets( $file );
  fclose( $file );
  echo  $_GET[name];

  $file = fopen( "3_3.html", "r" )
    or exit( "Unable to open file!" );
  while ( !feof( $file ) )
    echo  fgets( $file );
  fclose( $file );
}

elseif ( $_POST['act'] == "Home" ) {
  header( "Content-type: text/html" );
  $file = fopen( "1.html", "r" )
    or exit( "Unable to open file!" );
  while ( !feof( $file ) )
    echo  fgets( $file );
  fclose( $file );
}

elseif ( $_POST["act"] == "Display source" ) {
  header( "Content-type: text/plain" );
  $file = fopen( "2.php", "r" ) or
    exit( "Unable to open file!" );
  while ( !feof( $file ) )
    echo  fgets( $file );
  fclose( $file );
}

?>