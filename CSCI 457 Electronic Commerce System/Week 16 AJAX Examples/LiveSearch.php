<?php
  $xmlDoc = new DOMDocument( );
  $xmlDoc->load( "links.xml" );
  $x = $xmlDoc->getElementsByTagName('link');

  // Get the q parameter from URL.
  $q = $_GET["q"];

  // Lookup all links from the xml file if length of q > 0.
  if ( strlen($q) > 0 ) {
    $hint = "";
    for( $i=0; $i<($x->length); $i++ ) {
      $y = $x->item($i)->getElementsByTagName('title');
      $z = $x->item($i)->getElementsByTagName('url');
      if ( $y->item(0)->nodeType == 1 ) {  // 1: element
	// Find a link matching the search text.
	if ( stristr( $y->item(0)->childNodes->item(0)->nodeValue, $q ) ) {
	  if ( $hint == "" ) {
            $hint = "<a href='" .
	      $z->item(0)->childNodes->item(0)->nodeValue .
              "' target='_blank'>" .
	      $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
	  }
	  else {
            $hint = $hint . "<br /><br class='e' /><a href='" .
	      $z->item(0)->childNodes->item(0)->nodeValue .
              "' target='_blank'>" .
	      $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
	  }
        }
      }
    }
  }

  // Set output to "no suggestion" if no hint were found
  // or to the correct values.
  if ( $hint == "" ) {
    $hint = "<table width='100%' bgcolor='#EDF3FE'><tr><td>";
    $response = $hint . "No suggestion" . "</td></tr></table>";
  }
  else {
    $hint = "<table width='100%' bgcolor='#EDF3FE'><tr><td>" . $hint;
    $response = $hint . "</td></tr></table>";
  }

  // Output the response.
  echo $response;
?> 