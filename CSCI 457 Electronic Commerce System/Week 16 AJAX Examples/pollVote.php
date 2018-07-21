
<?php
  $vote = $_REQUEST['vote'];
  // Get content of textfile.
  $filename = "pollResult.txt";
  $content = file( $filename );

  // Put content in array.
  $array = explode( "||", $content[0] );
  $C      = $array[0];
  $Java   = $array[1];
  $Lisp   = $array[2];
  $Perl   = $array[3];
  $PHP    = $array[4];
  $Prolog = $array[5];
  $Python = $array[6];

  switch ( $vote ) {
    case 0:  $C      += 1;  break;
    case 1:  $Java   += 1;  break;
    case 2:  $Lisp   += 1;  break;
    case 3:  $Perl   += 1;  break;
    case 4:  $PHP    += 1;  break;
    case 5:  $Prolog += 1;  break;
    case 6:  $Python += 1;  break;
  }

  // Insert votes to txt file.
  $insertVote  = $C   . "||" . $Java   . "||" . $Lisp . "||" . $Perl . "||";
  $insertVote .= $PHP . "||" . $Prolog . "||" . $Python;
  $fp = fopen( $filename, "w" );
  fputs ( $fp, $insertVote );
  fclose( $fp );
?>

  <?php $total = $C + $Java + $Lisp + $Perl + $PHP + $Prolog + $Python; ?>
  <table width="60%" cellspacing="0" cellpadding="0">
   <tr>
    <td width="30%" rowspan="7">
     <font size="+1"><b>Results:</b></font><br /><br />
     (Total votes = <?php echo( $total ); ?>)
    </td>
    <td width="20%">C/C++:</td>
    <td width="50%">
     <img src='poll.gif' height='20'
       width = '<?php echo( 100*round($C/$total,2) ); ?>' />
     &nbsp; <?php echo( 100*round($C/$total,2) ); ?>%
    </td>
   </tr>
   <tr>
    <td>Java:</td>
    <td>
     <img src='poll.gif' height='20'
       width = '<?php echo( 100*round($Java/$total,2) ); ?>' />
     &nbsp; <?php echo( 100*round($Java/$total,2) ); ?>%
    </td>
   </tr>
   <tr>
    <td>Lisp:</td>
    <td>
     <img src='poll.gif' height='20'
       width = '<?php echo( 100*round($Lisp/$total,2) ); ?>' />
     &nbsp; <?php echo( 100*round($Lisp/$total,2) ); ?>%
    </td>
   </tr>
   <tr>
    <td>Perl:</td>
    <td>
     <img src='poll.gif' height='20'
       width = '<?php echo( 100*round($Perl/$total,2) ); ?>' />
     &nbsp; <?php echo( 100*round($Perl/$total,2) ); ?>%
    </td>
   </tr>
   <tr>
    <td>PHP:</td>
    <td>
     <img src='poll.gif' height='20'
       width = '<?php echo( 100*round($PHP/$total,2) ); ?>' />
     &nbsp; <?php echo( 100*round($PHP/$total,2) ); ?>%
    </td>
   </tr>
   <tr>
    <td>Prolog:</td>
    <td>
     <img src='poll.gif' height='20'
       width = '<?php echo( 100*round($Prolog/$total,2) ); ?>' />
     &nbsp; <?php echo( 100*round($Prolog/$total,2) ); ?>%
    </td>
   </tr>
   <tr>
    <td>Python:</td>
    <td>
     <img src='poll.gif' height='20'
       width = '<?php echo( 100*round($Python/$total,2) ); ?>' />
     &nbsp; <?php echo( 100*round($Python/$total,2) ); ?>%
    </td>
   </tr>
  </table> 