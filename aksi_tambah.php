<?php
include "koneksi.php";

$No = @$_POST['No'];
$Nama = @$_POST['Nama'];
$Keperluan = @$_POST['Keperluan'];
$Telp = @$_POST['Telp'];
$Alamat = @$_POST['Alamat'];
$Waktu = @$_POST['Waktu'];

//perintah SQL
$query="INSERT INTO data1 VALUES ('$No','$Nama','$Keperluan','$Telp','$Alamat','$Waktu') ";

$hasil=mysql_query($query) or die(mysql_error());

if ($hasil){
	echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
	<meta http-equiv='refresh' content='2; url= index.php'/>  ";
} else { echo "Data gagal disimpan
<meta http-equiv='refresh' content='2; url= tambah.php'/> ";
}
?>