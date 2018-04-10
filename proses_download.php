<?php
// Fungsi header dengan mengirimkan raw data excel
include_once("config/config.php");
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=EXPORTEXCEL.xls");
 
// Tambahkan table
include 'data.php';

?>