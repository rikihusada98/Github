<?php
require_once "config.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html"/>
    <meta name="author" content="lolkittens"/>
	<title>AutoSelect</title>
</head>
<body>

<form action="" method="post">
    <label>Provinsi :</label><br>

    <?php 
     mysqli_query($con, 'SELECT * FROM provinsi');
     ?>

	<select name="provinsi" id="provinsi">
		<option value="">Pilih Provinsi</option>
<?php 
while ($row_provinsi = mysqli_fetch_array($sql_provinsi)){ ?>
        <option value=""><?php echo $row_provinsi ['nama_provinsi'] ?></option>

      <?php } ?>
	</select><br>

 <label>Kota :</label><br>
<select name="provinsi" id="provinsi">
	
	<option value="">Pilih Kota</option>

</select>
</form>

</body>
</html>