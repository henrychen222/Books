<?php
  $q = $_GET["q"]; 
  $xmlDoc = new DOMDocument( );
  $xmlDoc->load( "courseList.xml" );
  $x = $xmlDoc->getElementsByTagName( 'number' );
  for ( $i=0; $i<=$x->length-1; $i++ ) {
    // Process only element nodes.
    if ( $x->item($i)->nodeType == 1 ) {
      if ( $x->item($i)->childNodes->item(0)->nodeValue == $q ) {
	$y = ( $x->item($i)->parentNode );
      }
    }
  }
  $course = ( $y->childNodes );
  echo( "<font size='+1'>" );
  for ( $i=0; $i<$course->length; $i++ ) {
    // Process only element nodes.
    if ( $course->item($i)->nodeType == 1 ) {
      echo( "<font color='#3366CC'><b>" . $course->item($i)->nodeName . ":</b></font> " );
      echo( $course->item($i)->childNodes->item(0)->nodeValue );
      echo( "<br />" );
    }
  }
  echo ( "</font>" );

?>