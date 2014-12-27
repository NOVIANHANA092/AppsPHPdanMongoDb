
 <strong> </strong>
<blockquote><?php
 require_once('mongo_config.php');
 require_once('mongo_menu.php');
 
$daftar_alamat = $collection->find();
 $daftar_alamat_count = $daftar_alamat->count();
 
echo $daftar_alamat_count . ' data ditemukan<br/>';
 
$page = 1; $docs_per_page = 3;

     $all_documents = NULL;
     $total_documents = $daftar_alamat_count;
     $skip = (int)($docs_per_page * ($page - 1));
     $limit = $docs_per_page;
     $total_pages = ceil($total_documents / $limit);

     /** Get All documents */
     $criteria = array();
     $return_fields = array("id" => TRUE,"nama" => TRUE,"alamat" => TRUE);
     $cursor = $daftar_alamat->limit($limit)->skip($skip);

     // do some more stuff
     return $all_documents;

 
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