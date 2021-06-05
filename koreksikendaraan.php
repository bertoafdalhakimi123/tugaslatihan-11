<!DOCTYPE html>
<html lang="en">
<head>
  <title>Koreksi Rekord Pengguna</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Koreksi Kendaraan</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">Ketik kode kendaraan yang dikoreksi:</label>
      <input type="text" class="form-control" id="email" placeholder="Ketik kode kendaraan yang akan dikoreksi" name="namadikoreksi">
    </div>
	    <button type="submit" class="btn btn-primary" name="bkoreksi" onclick="return confirm('Apakah rekord dengan kata kunci yang terpilih dikoreksi ?')">Koreksi</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bkoreksi'])) {
	$namadikoreksi=$_POST['namadikoreksi'];
	$koneksi=new mysqli("localhost","root","","tokoumb");
	$sql="select * from pengguna where KodePengguna = '".$namadikoreksi."'";
	$q=$koneksi->query($sql);
	$r=$q->fetch_array();
	if (empty($r)) {
		echo "Rekord tidak ditemukan !";
		exit();
	} else {
		?>
<div class="container">
  <h2>Koreksi Pengguna</h2>
  <form method="post">
    <div class="form-group">
      <label for="kodepengguna">Kode Pengguna:</label>
      <input type="text" class="form-control" id="kodepengguna" placeholder="Enter kode pengguna" name="KodePengguna" value="<?php echo $r['KodePengguna'];?>" readonly>
    </div>
	<div class="form-group">
      <label for="NamaPengguna">Nama Pengguna:</label>
      <input type="text" class="form-control" id="NamaPengguna" placeholder="Enter nama pengguna" name="NamaPengguna" value="<?php echo $r['NamaPengguna'];?>">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password"
	  value="<?php echo $r['Password'];?>"
	  >
    </div>
    <div class="form-group">
     <label for="Alamat">Alamat:</label>
     <textarea class="form-control" rows="5" id="Alamat" name="Alamat"><?php echo $r['Alamat'];?></textarea>
   </div>
   <div class="form-group">
      <label for="NoHP">No. Handphone Pengguna:</label>
      <input type="text" class="form-control" id="NoHP" placeholder="Enter nama pengguna" name="NoHP" value="<?php echo $r['NoHP'];?>"
	  >
    </div>
    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan Rekord Pengguna</button>
  </form>
</div>		
		
		<?php
	} //end if empty
}
if (isset($_POST['bSimpan'])) {
	$KodeKendaraan=$_POST['KodeKendaraan'];
	$NamaPengguna=$_POST['NamaPengguna'];
	$Password=$_POST['Password'];
	$Alamat=$_POST['Alamat'];
	$NoHP=$_POST['NoHP'];
	$koneksi=new mysqli("localhost","root","","tokoumb");
	$sql="UPDATE `pengguna` SET `NamaPengguna` = '$NamaPengguna', `Password` = '$Password', `Alamat` = '$Alamat', `NoHP` = '$NoHP' WHERE `pengguna`.`KodeKendaraan` = '$KodeKendaraan`';";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "Rekord Kendaraan sudah tersimpan !";
	} else {
		echo "Rekord Kendaraan gagal tersimpan !";
	}	
}
?>