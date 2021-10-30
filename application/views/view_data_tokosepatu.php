<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Data Pembelian Sepatu</title>
  <style>
    body {
      background-color: black;
      color: white;
    }

    #container {
      height: 100ex;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #tabel_data {
      border: 3px solid white;
      border-radius: 15px;
      padding: 15px 25px;
    }

    #btn_buy {
      border: 2px solid white;
      border-radius: 20px;
      padding: 5px 15px;
      text-decoration: none;
      font-weight: bold;
      color: white;
    }

    #btn_buy:hover {
      background-color: white;
      color: black;
      border: 2px solid gray;
      transition: all 0.3s ease-in-out;
    }
  </style>
</head>
<body>
  <div id="container">
		<table id="tabel_data">
			<tr>
				<th colspan="3"><h3>Data Pembelian Sepatu</h3><hr></th>
			</tr>
			<tr>
				<th>Nama Pembeli</th>
				<th>:</th>
				<td><?= $nmpembeli; ?></td>
			</tr>
			<tr>
				<th>Nomor handphone</th>
				<th>:</th>
				<td><?= $nohp; ?></td>
			</tr>
			<tr>
				<th>Merk</th>
				<th>:</th>
				<td><?= $merk; ?></td>
			</tr>
			<tr>
        <th>Ukuran</th>
        <th>:</th>
        <td><?= $uk; ?></td>
			</tr>
      <tr>
        <th>Harga</th>
        <th>:</th>
        <td><?= $hrg; ?></td>
      </tr>
			<tr>
				<td colspan="3" align="center">
          <hr><br>
					<a id="btn_buy" href="<?= base_url('tokosepatu'); ?>">Beli lagi</a>
				</td>
			</tr>
		</table>
  </div>
</body>
</html>