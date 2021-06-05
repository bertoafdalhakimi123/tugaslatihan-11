<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hapus Rekord Pengguna Kendaraan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hapus Rekord Pengguna Kendaraan</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">Ketik nama lengkap pengguna Kendaraan yang dihapus:</label>
      <input type="text" class="form-control" id="email" placeholder="Ketik nama pengguna Kendaraan yang akan dihapus" name="namadihapus">
    </div>
	    <button type="submit" class="btn btn-primary" name="bhapus" onclick="return confirm('Apakah rekord dengan kata kunci yang terpilih dihapus ?')">Hapus</button>
  </form>
</div>
</body>
</html>
<?php if (isset($_POST['bhapus'])) {
	$namadihapus=$_POST['namadihapus'];
	$koneksi=new mysqli("localhost","root","","tokoumb");
	$sql="DELETE FROM `pengguna` WHERE `pengguna`.`NamaPengguna` = '".$namadihapus."'";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "Rekord sudah dihapus !";
	} else {
		echo "Rekord gagal dihapus !";
	}
}