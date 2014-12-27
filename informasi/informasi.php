 
<?php
$tgl = date('l, d-m-Y');
echo $tgl; 
?>
<?php
 $ip_addr=$_SERVER['REMOTE_ADDR'];
 $browser=$_SERVER['HTTP_USER_AGENT'];
 $refer= $_SERVER['HTTP_REFERER'];
 echo "<strong>IP address : $ip_addr</strong><br />\n";
 echo "<strong>Jenis Browser : $browser</strong>:<br />\n";
 echo "<strong>Sebelumnya anda berada di halaman : $refer</strong>:<br />\n";
?>