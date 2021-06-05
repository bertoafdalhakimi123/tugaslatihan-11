<!DOCTYPE html>
<html lang="en">
<head>
  <title>Input Data Kendaraan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Input Data Kendaraan</h2>
  <form method="post">
    <div class="form-group">
      <label for="kodepengguna">Kode Input Kendaraan:</label>
      <input type="text" class="form-control" id="kodeinputkendaraan" placeholder="Enter kode Input Kendaraan" name="Kodeinput">
    </div>
	<div class="form-group">
      <label for="NamaPengguna">Nama Pengguna:</label>
      <input type="text" class="form-control" id="NamaPengguna" placeholder="Enter nama pengguna" name="NamaPengguna">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password">
    </div>
    <div class="form-group">
     <label for="Alamat">Alamat:</label>
     <textarea class="form-control" rows="5" id="Alamat" name="Alamat"></textarea>
   </div>
   <div class="form-group">
      <label for="NoHP">No. Handphone Pengguna:</label>
      <input type="text" class="form-control" id="NoHP" placeholder="Enter nama pengguna" name="NoHP">
    </div>
    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan Rekord Pengguna</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bSimpan'])) {
	$KodePengguna=$_POST['KodePengguna'];
	$NamaPengguna=$_POST['NamaPengguna'];
	$Password=$_POST['Password'];
	$Alamat=$_POST['Alamat'];
	$NoHP=$_POST['NoHP'];
	$koneksi=new mysqli("localhost","root","","tokoumb");
	$sql="INSERT INTO `pengguna` (`KodePengguna`, `NamaPengguna`, `Password`, `Alamat`, `NoHP`, `TanggalDaftar`) VALUES ('$KodePengguna', '$NamaPengguna', '$Password', '$Alamat', '$NoHP', current_timestamp());";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "Rekord pengguna sudah tersimpan !";
	} else {
		echo "Rekord pengguna gagal tersimpan !";
	}	
}