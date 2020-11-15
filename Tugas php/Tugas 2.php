<?php
$nama = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
sort($nama);

$clength = count($nama);
for($x = 0; $x < $clength; $x++) {
  echo $nama[$x];
  echo "<br>";
}
?>
