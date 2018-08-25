<?php 
function biodata()
{
	$name = "Algi Fajar Febriansyah";
	$adress = "Desa Leksana kecamanatan Karangkobar RT 02 RW 1 kab Banjarnegara, Jawa Tengah";
	$hobbies = array(
		'Basket',
		'Nonton Film',
		'Main Game'
	);
	$is_married = false;
	$school= array(
		'highSchool'=> 'SMK TELKOM PURWOKERTO',
		'university'=> 'Tidak melanjutkan kuliah',
	);
	$skills= array(
		'HTML',
		'css',
		'php'
	);
	$data = array('Name'=> $name,'Adress'=> $adress, 'Hobbies'=> $hobbies, 'Is Married'=> $is_married, 'School'=> $school, "skills"=> $skills);
	$json = json_encode($data);
	echo $json;

}
return biodata();

 ?>