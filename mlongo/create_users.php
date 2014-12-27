<?php
 require_once('mongo_config.php');
 require_once('mongo_menu.php');
 
function check_empty($ar){
 $empty = 0;
 if(is_array($ar)){
 foreach($ar as $v){
 if(empty($v)){
 $empty = 1;
 }
 }
 }
 return $empty;
 }
 ?>
 
<?php
 if(!empty($_POST)){
 $daftar_alamat = $collection->find();
 $daftar_alamat_count = $daftar_alamat->count();
 
$empty = check_empty($_POST);
 if($empty != 1){
 $id = $daftar_alamat_count + 1;
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 
$daftar_alamat = array('id'=>$id, 'nama'=>$nama, 'alamat'=>$alamat);
 
$collection->insert($daftar_alamat);
 echo $nama . ' berhasil diinput!';
 }else{
 echo 'Semua kolom agar diisi!';
 }
 }
 ?></blockquote>