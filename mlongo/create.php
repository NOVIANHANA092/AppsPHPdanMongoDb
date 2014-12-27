&nbsp;
 
<?php
 require_once('mongo_config.php');
 require_once('mongo_menu.php');
 ?>
 <form action="create_users.php" method="post">
 <p>
 <label for="name">Nama:</label>
 <input type="text" name="nama">
 </p>
 <p>
 <label for="age">Alamat:</label>
 <input type="text" name="alamat">
 </p>
 <p>
 <input type="submit" value="Save">
 </p>
 </form>