 
<?php
$tgl = date('l, d-m-Y');
echo $tgl;
echo "<br />";


 
 echo "<br />";
  $ip_addr=$_SERVER['REMOTE_ADDR'];
 echo "IP address : $ip_addr :<br />\n";
 echo "<br />";
  $browser=$_SERVER['HTTP_USER_AGENT'];
 echo "Jenis Browser : $browser :<br />\n";
 echo "<br />";
 $refer= $_SERVER['HTTP_REFERER'];
 echo "Sebelumnya anda berada di halaman : $refer:<br />\n";
 echo "<br />";
 $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo "Nama Komputer: $hostname";
?>