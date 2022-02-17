<?php
  $filename = "./input.txt";

  $fr = fopen($filename, 'r');
  $text = fread($fr, filesize($filename));

  $matches = array();
  preg_match_all('/\[.*?\]/', $text, $matches);

  foreach($matches[0] as $matches)
  {
    echo $matches."<br/>";
  }

  fclose($fr);