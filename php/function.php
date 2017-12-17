<?php
function tes(){
	echo "Ini adalah tes";
	echo "<br>";
}
tes();
?>

<?php
function tes1($nilai){
	echo "Tinggi badan anda adalah $nilai";
	echo "<br>";
}

$tinggibadan=170;
tes1($tinggibadan);
?>

<?php
function jumlah($nilai1, $nilai2){
	$total=$nilai1+$nilai2;
	echo "$nilai1+$nilai2=".$total;
}

jumlah(30,20);
?>