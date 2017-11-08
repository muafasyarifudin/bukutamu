<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Daftar Tamu</title>
	<link href ="css_submit.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
  <center>
   <h3><b>Tambah Data Baru</b></h3>
 </center><br>

 <form method="POST" action="aksi_tambah.php">
   <div class="bs-example">
    <form class="form-horizontal">
      <div class="form-group">
        <label class="control-label col-xs-2" for="No">Nomor</label>
        <div class="col-xs-2">
          <input type="text" class="form-control" id="inputNo" placeholder="Isikan dengan angka" name="No">
        </div>
      </div><br><br>&nbsp;
      <div class="form-group">
        <label class="control-label col-xs-2" for="Nama">Nama</label>
        <div class="col-xs-7">
          <input type="text" class="form-control" id="inputNama" placeholder="Masukan nama anda" name="Nama">
        </div>
      </div><br>&nbsp;
      <div class="form-group">
        <label class="control-label col-xs-2" for="Keperluan">Keperluan</label>
        <div class="col-xs-7">
          <textarea rows="3" class="form-control" id="inputKeperluan" placeholder="Wajib di isi" name="Keperluan"></textarea>
        </div>
      </div><br><br><br>&nbsp;
      <div class="form-group">
        <label class="control-label col-xs-2" for="Telp">No. Telp</label>
        <div class="col-xs-7">
          <input type="text" class="form-control" id="inpuTelp" placeholder="Nomor Telepon / Handphone" name="Telp">
        </div>
      </div><br>&nbsp;
      <div class="form-group">
        <label class="control-label col-xs-2" for="Alamat">Alamat</label>
        <div class="col-xs-7">
          <input type="text" class="form-control" id="Alamat" placeholder="Masukkan alamat anda" name="Alamat">
        </div>
      </div><br>&nbsp;
      <div class="form-group">
        <label class="control-label col-xs-2" for="Waktu">Waktu</label>
        <div class="col-xs-7">
          <input type="text" class="form-control" id="inputWaktu" placeholder="Wajib di isi" name="Waktu">
        </div>
      </div>
    </div><br>&nbsp;
    <div class="form-group">
      <div class="col-xs-offset-2 col-xs-9">
        <label class="checkbox-inline">
          <input type="checkbox" value="Setuju">  Saya Setuju dengan <a href="#">Kebijakan dan Ketentuan</a> yang berlaku.
        </label>
      </div>
    </div>
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