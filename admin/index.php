<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<center>
		<h2>Daftar Buku Tamu</h2>
	</center><br>

	&nbsp;&nbsp;<a href="tambah.php" class="btn btn-success btn-md">Tambah Data</a><br>

	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
			<thead>
				<th>No</th>
				<th>Nama</th>
				<th>Keperluan</th>
				<th>Telp</th>
				<th>Alamat</th>
				<th>Waktu</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
				$queri="select * from data1 order by No asc";
				$hasil=mysql_query($queri);
				while ($data = mysql_fetch_array ($hasil)){

					echo "  

					<tr>
					<td>".$data['No']."</td>
					<td>".$data['Nama']."</td>
					<td>".$data['Keperluan']."</td>
					<td>".$data['Telp']."</td>
					<td>".$data['Alamat']."</td>
					<td>".$data['Waktu']."</td>
					<td><a href='edit.php?No=".$data['No'] ."' class='btn btn-primary btn-md'>Edit</a>&nbsp;

					<a href='hapus.php?No=".$data['No'] ."' class='btn btn-danger btn-md'>Hapus</a></td>
					</tr>
					";
				}
				echo "<b><font color='red' size ='2'><p> Berhasil Menampilkan data dar database</p></center></b></font>";
				?>

			</tbody>
		</table>
	</div>
</body>
</html>