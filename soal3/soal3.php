


<form method="POST">
	<label>Masukan Jumlah Orang</label>
	<input type="number" name="orang" />
</form>



<?php 
error_reporting(0);

function count_handshake($total_people){

	$jabat_tangan = ($total_people/2) * ($total_people-1);
	echo "Total jabat tangan :";
	echo $jabat_tangan;
}

print(count_handshake($_POST['orang']));

 ?>