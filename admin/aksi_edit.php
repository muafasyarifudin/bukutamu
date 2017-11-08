<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

</body>
</html>
<?php
include 'koneksi.php';

$No = @$_POST['No'];
$Nama = @$_POST['Nama'];
$Keperluan = @$_POST['Keperluan'];
$Telp = @$_POST['Telp'];
$Alamat = @$_POST['Alamat'];
$Waktu = @$_POST['Waktu'];

$update="UPDATE data1 SET No='$No',Nama='$Nama',Keperluan='$Keperluan',Telp='$Telp',Alamat='$Alamat',Waktu='$Waktu' WHERE No='$No' ";
$hasil=mysql_query($update);

if ($hasil){

echo " <center> Data Berhasil diupdate <br/>
<br> Untuk melihat daftar peserta klik <a href='index.php' class='btn btn-default'>Disini</a></center>";
} else { echo "Data gagal diperbarui";
}

?>  