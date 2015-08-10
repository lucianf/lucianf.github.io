<HTML>
<HEAD><TITLE>Lista accese CV</TITLE></HEAD>
<LINK REL="stylesheet" type="text/css" href="http://www.lucianf.ro/style.css" />
<BODY BGCOLOR="#305080" TEXT="#CCFFFF">
<TABLE CLASS="p" CELLPADDING=3 CELLSPACING=3>
<TR BGCOLOR="#5070A0">
  <td align=right>ID</td><td>NUME</td><td>COMPANIE</td><td>EMAIL</td><td>TELEFON</td><td>DATA</td><td>IP</td><td>LB</td><td>PROXY FW</td>
</TR>
<?php
  
  $db = @mysql_connect("localhost", "emerge_lucianf", "SuidZer0") or die("Eroare la deschidere DB");
  mysql_select_db("emerge_lucianf", $db);

  $sql = "SELECT * FROM cvdb ORDER BY ID DESC";
  $result = mysql_query($sql);

  while($a=mysql_fetch_array($result)) {
    echo "<TR>\n  <td align=right>$a[ID]</td><td>$a[NUME]</td><td>$a[COMP]</td><td>$a[EMAIL]</td>";
    echo "<td>$a[TEL]</td><td>$a[DATA]</td><td>$a[IP]</td><td>$a[LNG]</td><td>$a[PXFW]</td>\n</TR>\n";
  }

?>
</TABLE>
</BODY>
</HTML>