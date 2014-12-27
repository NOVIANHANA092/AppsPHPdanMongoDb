<strong> </strong>
<blockquote><?php
 require_once('mongo_config.php');
 require_once('mongo_menu.php');
 
$daftar_alamat = $collection->find();
 $daftar_alamat_count = $daftar_alamat->count();
 
echo $daftar_alamat_count . ' data ditemukan<br/>';
 
if($daftar_alamat_count > 0){
 ?>
 
<table border="1">
 <thead>
 <tr>
 <th>ID</th>
 <th>Nama</th>
 <th>Alamat</th>
 </tr>
 </thead>
 <tbody>
 <?php foreach($daftar_alamat as $v){ ?>
 <tr>
 <td><a href="update_users.php?nama=<?php echo $v['nama']; ?>"><?php echo $v['id']; ?></a></td>
 <td><?php echo $v['nama']; ?></td>
 <td><?php echo $v['alamat']; ?></td>
 </tr>
 <?php } ?>
 </tbody>
 </table>
 <?php } ?>