<?php
  // Get the q parameter from URL.
  $q = $_GET["q"];

  // Find out which feed was selected.
  switch ( $q ) {
    case "Google": 
      $xml = ("http://news.google.com/news?ned=us&topic=h&output=rss");
      break;
    case "MSNBC":
      $xml = ("http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml");
      break;
    case "CNN":
      $xml = ("http://rss.cnn.com/rss/cnn_topstories.rss");
      break;
    case "CBS":
      $xml = ("http://www.cbsnews.com/feeds/rss/main.rss");
      break;
    case "ABC":
      $xml = ("http://feeds.abcnews.com/abcnews/topstories" );
      break;
    case "BBC":
      $xml = ("http://feeds.bbci.co.uk/news/rss.xml" );
      break;
  }

  $xmlDoc = new DOMDocument( );
  $xmlDoc->load( $xml );

  // Get elements from "<channel>".
  $channel = $xmlDoc->getElementsByTagName('channel')->item(0);
  $channel_title = $channel->getElementsByTagName('title')
    ->item(0)->childNodes->item(0)->nodeValue;
  $channel_link = $channel->getElementsByTagName('link')
    ->item(0)->childNodes->item(0)->nodeValue;
  $channel_desc = $channel->getElementsByTagName('description')
    ->item(0)->childNodes->item(0)->nodeValue;

  // Output elements from "<channel>".
  echo( "<table width='100%' bgcolor='#EDF3FE'><tr><td>" );
  echo( "<p><a href='" . $channel_link
        . "'>" . $channel_title . "</a>" );
  echo( "<br />" );
  echo( $channel_desc . "</p>" );

  // Get and output "<item>" elements.
  $x = $xmlDoc->getElementsByTagName('item');
  for ( $i=0; $i<=2; $i++ ) {
    $item_title=$x->item($i)->getElementsByTagName('title')
      ->item(0)->childNodes->item(0)->nodeValue;
    $item_link=$x->item($i)->getElementsByTagName('link')
      ->item(0)->childNodes->item(0)->nodeValue;
    $item_desc=$x->item($i)->getElementsByTagName('description')
      ->item(0)->childNodes->item(0)->nodeValue;

    echo( "<p><a href='" . $item_link
	  . "'>" . $item_title . "</a>" );
    echo( "<br />" );
    echo( $item_desc . "</p>" );
  }
  echo( "</td></tr></table>" );
?> 