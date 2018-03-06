<?php
include("config/config.php");



session_start();
ob_start();

$nama = $_POST['nama'];
$nrp = $_POST['nrp'];
$sql = "select * from users where nama='".$nama."' and nrp='".$nrp."'";

$hasil = mysqli_query($mysqli,$sql);


if ($hasil) {
	$row = mysqli_num_rows($hasil);
	if($row){
		$_SESSION['email_aja'] = $nama;
		header("location: " . "tampil.php");
	}
}
