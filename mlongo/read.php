<strong> </strong>
<blockquote><?php
 require_once('mongo_config.php');
 require_once('mongo_menu.php');
 $jumRecord = 2;
 $reqPage = $_REQUEST['page'];
$daftar_alamat = $collection->find()->limit($jumRecord)->skip($jumRecord * ($reqPage-1));
 $daftar_alamat_count = $daftar_alamat->count();
 $totalPage = ceil($daftar_alamat_count/$jumRecord); 
 
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
 <?php
	}
?>
 </tbody>
 </table>
<?php
	for($i=1;$i<=$totalPage; $i++){
?>
		<a href="read.php?page=<?php echo $i;?>"><?php echo $i;?></a>
<?php
	}
}
?>