<?

$ip = $_SERVER["REMOTE_ADDR"];
$block[] = "/217\\.73\\.164\\.14/" ; // cache.roedu.net
$block[] = "/201\\.245\\.136\\.*/" ; // co


for ($i=0;$i<count($block);$i++) {
  if (preg_match($block[$i], $ip)) {
    echo "document.location = 'blocked.html'\n";
    break;
  }
}

?>