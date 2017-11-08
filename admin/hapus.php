<?php
include 'koneksi.php';
$No = $_GET['No'];
mysql_query("DELETE FROM data1 WHERE No='$No'") or die(mysql_error());

header("location:index.php?pesan=hapus");
?>