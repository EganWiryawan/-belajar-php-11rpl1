<?php 
include ('./input-config-siswa.php');
$data=mysqli_query($mysqli,"DELETE FROM siswa_nilai WHERE nis='".$_GET["nis"]."'");
header("location:input-siswa.php")
?>