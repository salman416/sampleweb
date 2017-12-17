<?php
$cuaca = "cerah";
if($cuaca == "cerah"){
	echo "Saya Berangkat Kerja";
}
echo "<br>";
?>

<?php
$jarak = 40;
if($jarak <= 40){
	echo "Jalan kaki saja";
}echo "<br>";
if($jarak >= 40){
	echo "Naik Angkot";
}echo "<br>";
if($jarak != 40){
	echo "Bobo di rumah";
}echo "<br>";
?>

<?php
$cuaca = "mendung";
if($cuaca == "cerah"){
	echo "Saya Berangkat Kerja";
}else{
	echo "Saya Bobo di rumah saja";
}
echo "<br>";
?>

<?php
$cuaca = "mendung";
if($cuaca != "cerah"){
	echo "Saya Berangkat Kerja";
}else{
	echo "Saya Bobo di rumah saja";
}
echo "<br>";
?>

<?php
$cuaca = "mendung";
if($cuaca == "mendung"){
	echo "Maka bawa payung";
}else if($cuaca == "cerah"){
	echo "Maka saya akan berangkat ";
}else if($cuaca == "banjir"){
	echo "Maka saya akan naik perahu";
}else{
	echo "Dirumah saja";
}
echo "<br>";
?>