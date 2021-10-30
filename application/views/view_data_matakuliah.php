<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Data Mata Kuliah</title>
</head>
<body>
	<center>
		<table>
			<tr>
				<th colspan="3"><h3>Data Mata Kuliah<hr/></h3></th>
			</tr>
			<tr>
				<th>Kode Mata Kuliah</th>
				<th>:</th>
				<td>
					<?= $kode; ?>
				</td>
			</tr>
			<tr>
				<th>Nama Mata Kuliah</th>
				<th>:</th>
				<td>
					<?= $nama; ?>
				</td>
			</tr>
			<tr>
				<th>Banyak SKS</th>
				<th>:</th>
				<td>
					<?= $sks; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<a href="<?= base_url('matakuliah'); ?>">Kembali</a>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>
