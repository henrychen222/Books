
function getVote( int ) {
  if ( window.XMLHttpRequest ) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest( );
  }
  else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
  }
  xmlhttp.onreadystatechange = function( ) {
    if ( ( xmlhttp.readyState == 4 ) &&
         ( xmlhttp.status     == 200 ) ) {
      document.getElementById("poll").innerHTML = 
        xmlhttp.responseText;
    }
  }
  xmlhttp.open( "GET", "pollVote.php?vote="+int, true );
  xmlhttp.send( );
}