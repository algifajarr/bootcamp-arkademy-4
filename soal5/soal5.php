<?php 
$lines = file('soal5.txt'); 
foreach ($lines as $line_num => $line){
	print "<pre>". $line . "</pre>"; 
}
?>