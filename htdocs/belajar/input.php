<?php
include 'koneksi.php';
?>

<fieldset>
	<form accept="" method="POST">
	<label></label><br>
	<select>
		<?php
        $ambil = mysqli_query("SELECT * FROM actor")
        while ($data = mysqli_fetch_assoc($ambil)){

        	echo '<option valeu="'$data['actor_id']' '$data['first_name']' '$data ['last_name']' '$data['last_update']'" ></option>';
        }
		?>
	</select><br>
	<label>Actor ID</label>
	<input type="text" name="nama">
		

	</form>
</fieldset>