<strong> </strong>
<blockquote><?php
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
 
if(!empty($_GET['nama'])){
 $nama = $_GET['nama'];
 $query = array('nama'=>$nama);
 
$daftar_alamat = $collection->findOne($query);
 $nama = $daftar_alamat['nama'];
 $alamat = $daftar_alamat['alamat'];
 
?>
 <form action="update_users.php" method="post">
 <p>
 <label for="nama">Name:</label>
 <input type="text" name="nama" value="<?php echo $nama; ?>" readonly>
 </p>
 <p>
 <label for="alamat">Alamat:</label>
 <input type="text" name="alamat" value="<?php echo $alamat; ?>">
 </p>
 <p>
 <input type="submit" value="Update">
 </p>
 </form>
 <?php } ?>
 
<?php
 
if(!empty($_POST)){
 $empty = check_empty($_POST);
 if($empty != 1){
 
echo "nama : ". $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 
$query = array('nama'=>$nama);
 $daftar_alamat = $collection->findOne($query);
 
$daftar_alamat['nama'] = $nama;
 $daftar_alamat['alamat'] = $alamat;
 $collection->save($daftar_alamat);
 
echo 'Update Berhasil!';
 }
 }
 ?>