<?php

   header("Expires: Nov, 02 Nov 1979 14:45:00 EET");    // Date in the past
   header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
                                                        // always modified
   header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
   header("Cache-Control: post-check=0, pre-check=0", false);
   header("Pragma: no-cache");                          // HTTP/1.0

   $baseURL = "http://www.lucianf.ro/";
   $ip = $_SERVER['REMOTE_ADDR'];
	putenv ("TZ=GMT-2");  // so that date is stored in RO tz; should be +2.. ?!
   $date = date("Y-m-d H:i:s");
   
   $lng = basename($_SERVER['HTTP_REFERER'], ".html");
   $lng = (substr(strtolower($lng), -2) == "en" ? "En" : "Ro");
   
   $proxyfw = $_SERVER['HTTP_X_FORWARDED_FOR'];

   if ($name != "lf") {
      // Open DB
      $db = @mysql_connect("localhost", "emerge_lucianf", "SuidZer0");
      if ($db) mysql_select_db("emerge_lucianf", $db);

      $fname = basename($fname); // assure this one doesn't get messed up

      $sql = "INSERT INTO cvdb (NUME, COMP, EMAIL, TEL, DATA, IP, LNG, PXFW) ";
      $sql .="VALUES ('$name','$company','$email','$phone','$date','$ip','$lng','$proxyfw')";
      $res = @mysql_query($sql);

   }

   $go = $baseURL . "_depo/cv0206finsw.pdf";
   $fp = fopen($go, "r");

   header("Content-disposition: attachment; filename=" . $fname);
   header("Content-Type: application/force-download");
   header("Content-Transfer-Encoding: binary");

   fpassthru($fp);

?>