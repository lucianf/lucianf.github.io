<?php

   header("Expires: Nov, 02 Nov 1979 14:45:00 EET");    // Date in the past
   header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
                                                        // always modified
   header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
   header("Cache-Control: post-check=0, pre-check=0", false);
   header("Pragma: no-cache");                          // HTTP/1.0


   $baseURL = "http://www.lucianf.ro/";
   $ip = $_SERVER['REMOTE_ADDR'];
   $date = date("Y-m-d H:i:s");

   // Open DB
   $db = @mysql_connect("mysql.suidzer0.org", "lucianf", "Suidzer0");
   if ($db) mysql_select_db("lucianf", $db);

   if (!$whoami || !$pwd || !$cvtype || !$fname ) {
      $sql = "INSERT INTO cv (NUME, TIPCV, DATA, IP, RESULT) VALUES ('$whoami','$cvtype','$date','$ip','Date incomplete')";
      $res = @mysql_query($sql);
      header("Location: " . $baseURL . "cverror.html");
      exit();
   }

   $fname = basename($fname); // assure somebody doesn't mess up this one

   switch ($cvtype) {
      case "jbc":
         $cmp = "200"; $real_fname = "cv0204jbase";
         break;

      case "fin":
         $cmp = "040"; $real_fname = "cv0204finsw";
         break;
/*
      case "net":
         $cmp = "006"; $real_fname = "cv0204net";
         break;
*/
      default:
         $cmp = "";
   }

   if ($pwd == $cmp) {

      $sql = "INSERT INTO cv (NUME, TIPCV, DATA, IP, RESULT) VALUES ('$whoami','$cvtype','$date','$ip','OK')";
      $res = @mysql_query($sql);

      $go = $baseURL . "_depo/" . $real_fname . ".pdf";
      $fp = fopen($go, "r");

      header("Content-disposition: attachment; filename=" . $fname);
      header("Content-Type: application/force-download");
      header("Content-Transfer-Encoding: binary");

      fpassthru($fp);

   } else {

      $sql = "INSERT INTO cv (NUME, TIPCV, DATA, IP, RESULT) VALUES ('$whoami','$cvtype','$date','$ip','Parola gresita: $pwd')";
      $res = @mysql_query($sql);

      header("Location: " . $baseURL . "cverror.html");

   }

?>