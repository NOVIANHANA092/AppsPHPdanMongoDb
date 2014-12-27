<html>
<head>
 	<title> LAGU </title>
	<style type="text/css">
	table,th,td 
	{
		border : 3px solid aqua;
	} body{color : white;
	}
	body{
background-color:black;
background-attachment:fixed;
background-clip: border-box ;
/background-color: transparent;
background-image:url("http://wallike.com/wp-content/upload/2013/06/black-word-map-1280x720.jpg")
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
z-index: 0;
</style>
</head>
 
<body>

 <div align = "center">
 <h1>DAFTAR LAGU</h1>
 <?php
 $songs = simplexml_load_file('song.xml');
 echo"
 <table>
 <tr>
 	<th>No</th>
	<th>Tanggal Dimainkan</th>
	<th>Title</th>
	<th>Artis</th>
	<th>Genre</th>
</tr> ";
$noUrut = 0;
foreach($songs as $song)
{
	$noUrut++;
		echo "
		<tr>
			<th width = '30'>{$noUrut}</th>
			<th width = '200'>{$song['dateplayed']}</th>
			<th width = '200'>{$song->title}</th>
			<th width = '200'>{$song->artist}</th>
			<th width = '150'>{$song->genre}</th>
		</tr>";
}	
       echo '</table>';
	   ?>
  </div>
</body>
</html>