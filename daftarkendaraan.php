<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Kendaraan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php

?>
<div class="container">
  <h2>Daftar Kendaraan</h2>
  <p>Berikut ini daftar Kendaraan</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode Kendaraan</th>
        <th>Nama Kendaraan</th>
        <th>Jumlah Unit</th>
		<th>Harga Per Unit</th>
		<th>Total Nilai Kendaraan</th>
      </tr>
    </thead>
    <tbody><?php do { ?>
      <tr>
        <td><?php echo $rekordkendaraan['kodekendaraan'];?></td>
        <td><?php echo $rekordkendaraan['namakendaraan'];?></td>
        <td align="rigth"><?php echo number_format($rekordkendaraan['jumlah'],2,',','.');?></td>
        <td><?php echo $rekordbarang['satuan'];?></td>
        <td align="rigth"><?php echo number_format($rekordkendaraan['hargaperunit'],0,',','.');?></td>
        <td align="rigth"><?php echo number_format($rekordkendaraan['jumlah']*$rekordkendaraan['hargaperunit'],0,',','.');?></td>
	</tr> <?php } while($rekordkendaraan=$q->fetch_array());?>
    </tbody>
  </table>
</div>

</body>
</html>