<?php
include "koneksi.php";
$No = @$_GET['No'];

//perintah menampilkan sql untuk dtbase
$queri = "SELECT * FROM data1 WHERE No='$No' ";

//perintah eksekusi sql
$hasil = mysql_query($queri);

//menjadi data dalam bentuk array
$data = mysql_fetch_array($hasil);

$No = @$data['No'];
$Nama = @$data['Nama'];
$Keperluan = @$data['Keperluan'];
$Telp = @$data['Telp'];
$Alamat = @$data['Alamat'];
$Waktu = @$data['Waktu'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pengubahan Data</title>
	<link href ="css_submit.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<center>
		<h3><b>Pengubahan Data Tamu</b></h3>
	</center><br>

	<form method="POST" action="aksi_edit.php">
   <div class="bs-example">
    <form class="form-horizontal">
      <div class="form-group">
        <label class="control-label col-xs-2" for="No">Nomor</label>
        <div class="col-xs-2">
          <input type="text" class="form-control" id="inputNo" name="No" value="<?php echo $data['No'] ?>">
        </div>
      </div><br><br>&nbsp;
      <div class="form-group">
        <label class="control-label col-xs-2" for="Nama">Nama</label>
        <div class="col-xs-7">
          <input type="text" class="form-control" id="inputNama" name="Nama" value="<?php echo $data['Nama'] ?> ">
        </div>
      </div><br>&nbsp;
      <div class="form-group">
        <label class="control-label col-xs-2" for="Keperluan">Keperluan</label>
        <div class="col-xs-7">
          <input type="text" class="form-control" id="inputKeperluan" name="Keperluan" value="<?php echo $data['Keperluan'] ?> ">
        </div>
      </div><br>&nbsp;
      <div class="form-group">
        <label class="control-label col-xs-2" for="Telp">No. Telp</label>
        <div class="col-xs-7">
          <input type="text" class="form-control" id="inpuTelp" name="Telp" value="<?php echo $data['Telp'] ?> ">
        </div>
      </div><br>&nbsp;
      <div class="form-group">
        <label class="control-label col-xs-2" for="Alamat">Alamat</label>
        <div class="col-xs-7">
          <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?php echo $data['Alamat'] ?>">
        </div>
      </div><br>&nbsp;
      <div class="form-group">
        <label class="control-label col-xs-2" for="Waktu">Waktu</label>
        <div class="col-xs-7">
          <input type="text" class="form-control" id="inputWaktu" name="Waktu" value="<?php echo $data['Waktu'] ?> ">
        </div>
      </div>
    </div><br>&nbsp;
    <br>
    <div class="form-group">
      <div class="col-xs-offset-2 col-xs-9">
        <input type="submit" class="btn btn-primary" value="Kirim" name="submit">
        <input type="reset" class="btn btn-danger" value="Reset" name="reset">
        <a href="index.php" class="btn btn-default">Kembali</a>
      </div>
    </div>
  </form>
</div>
</form>
</body>
</html>