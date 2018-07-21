<?php
  // Fill up array with course titles.
  $a[] = "160 Computer Science I";
  $a[] = "161 Computer Science II";
  $a[] = "242 Algorithms and Data Structures";
  $a[] = "250 Assembly Language Programming";
  $a[] = "260 .NET and Web Programming";
  $a[] = "327 Data Communications";
  $a[] = "351 Introduction to File Processing";
  $a[] = "370 Computer Architecture";
  $a[] = "435 Formal Languages and Automata";
  $a[] = "451 Operating Systems I";
  $a[] = "457 Electronic Commerce Systems";
  $a[] = "465 Principles of Translation";
  $a[] = "Comm 110 Fundamentals of Public Speaking";
  $a[] = "Chem 121 General Chemistry I";
  $a[] = "Chem 122 General Chemistry II";
  $a[] = "EE201 Introduction to Digital Electronics";
  $a[] = "EE 202 Electrical Engineering Laboratory";
  $a[] = "Engl 110 College Composition I";
  $a[] = "Engl 125 Technical and Business Writing";
  $a[] = "Math 146 Applied Calculus I";
  $a[] = "Math 165 Calculus I";
  $a[] = "Math 166 Calculus II";
  $a[] = "Math 208 Discrete Mathematics";

  // Get the q parameter from URL.
  $q = $_GET["q"];

  // Look up all hints from array if length of q > 0.
  if ( strlen($q) > 0 ) {
    $hint = "";
    for ( $i=0; $i<count($a); $i++ )
      if ( strtolower($q) == strtolower( substr( $a[$i], 0, strlen($q) ) ) ) 
	if ( $hint == "" ) 
	  $hint = $a[$i];
	else 
	  $hint = $hint . ", " . $a[$i];
  }

  // Set output to "no suggestion" if no hint were found
  //   or to the correct values.
  if ( $hint == "" )
    $response = "No suggestion";
  else
    $response = $hint;

  // Output the response.
  echo $response;
?>