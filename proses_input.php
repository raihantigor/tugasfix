<?php

include('config/config.php');


$nama = $_POST['nama'];
$email = $_POST['email'];
$nrp = $_POST['nrp'];

$sql = "insert into users (nama, email, nrp) VALUES ('". $nama ."', '". $email ."', '". $nrp ."')";

$result = mysqli_query($mysqli, $sql);


header("location: ". "index.html");
?>