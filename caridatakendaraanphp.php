<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cari Data Kendaraan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cari Data Kendaraan yang tersimpan</h2>
  <form method="post">
    <div class="form-group">
      <label for="namadatakendaraandicari">Ketik data kendaraan dicari atau kata kunci data kendaraan:</label>
      <input type="text" class="form-control" id="namadatakendaraandicari" name="namadatakendaraandicari" placeholder="Ketik nama data kendaraan dicari atau kata kunci nama data kendaraan">
    </div>
    
    <button type="submit" class="btn btn-primary" name="bcari">Cari Data kendaraannya</button>
  </form>
</div>
</body>
</html>
<?php if (isset($_POST['bcari'])) {
	$koneksi=new mysqli("localhost","root","","tokoumb");
	$namadatakendaraandicari=$_POST['namadatakendaraandicari'];
	if (empty($namadatakendaraandicari)) {
		exit();
	}
$sql="SELECT * FROM `barang` WHERE `namadata` LIKE '%".$namadatakendaraandicari."%'";
$q=$koneksi->query($sql);
$rekorddata=$q->fetch_array();
include("daftarkodekendaraan.php");
} 

?>