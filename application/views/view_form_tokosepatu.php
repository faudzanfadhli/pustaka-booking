<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Form Pembelian Sepatu</title>
	<style>
    body {
      background-color: black;
      color: white;
    }
    
    .msg_error {
      font-weight: bold;
      color: white;
      width: 250px;
      height: auto;
      background-color: red;
    }

    #container {
      height: 100ex;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #tabel {
      border: 3px solid white;
      border-radius: 15px;
      padding: 10px 25px;
    }

    #brand_img {
      border: 2px solid grey;
      background-color: white;
      padding: 2px
    }

    #merk_img {
      display: flex;
      justify-content: center;
    }

    #merk {
      height: 20px;
      width: 120px;
    }

    #hrg, #uk {
      width: 210px;
    }

    .btn {
      border: 2px solid white;
      border-radius: 20px;
      padding: 5px 15px;
      font-weight: bold;
      color: white;
      background-color: black;
      margin: 0 15px;
    }

    .btn:hover {
      background-color: white;
      color: black;
      border: 2px solid gray;
      transition: all 0.3s ease-in-out;
    }
	</style>
</head>
<body>
  <div class="msg_error">
    <?= validation_errors(); ?>
  </div>
  <div id="container">
		<form action="<?= base_url('tokosepatu/cetak'); ?>" method="post" id="form_input">
			<table id="tabel">
				<tr>
					<th colspan="3">Form Input Data Pembelian Sepatu<hr/></th>
				</tr>
				<tr>
					<th>Nama Pembeli</th>
					<th>:</th>
					<td><input size="25" type="text" name="nmpembeli" id="nmpembeli" placeholder="Masukkan nama" /></td>
				</tr>
				<tr>
					<th>Nomor Handphone</th>
					<th>:</th>
					<td><input size="25" type="text" name="nohp" id="nohp" placeholder="Masukkan nomor handphone"/></td>
				</tr>
				<tr>
					<th>Merk Sepatu</th>
					<th>:</th>
					<td style="height: 80px;">
            <div id="merk_img">
              <select name="merk" id="merk">
						  	<option value="Nike">Nike</option>
						  	<option value="Adidas">Adidas</option>
						  	<option value="Kickers">Kickers</option>
						  	<option value="Eiger">Eiger</option>
						  	<option value="Buccheri">Buccheri</option>
						  </select>
						  <span id="selected"></span>
            </div>
					</td>
				</tr>
        <tr>
          <th>Harga</th>
          <th>:</th>
          <td>
            <select name="hrg" id="hrg"></select>
          </td>
        </tr>
        <tr>
          <th>Ukuran</th>
          <th>:</th>
          <td>
            <select name="uk" id="uk">
              <option value="32">32</option>
              <option value="33">33</option>
              <option value="34">34</option>
              <option value="35">35</option>
              <option value="36">36</option>
              <option value="37">37</option>
              <option value="38">38</option>
              <option value="39">39</option>
              <option value="40" selected>40</option>
              <option value="41">41</option>
              <option value="42">42</option>
              <option value="43">43</option>
              <option value="44">44</option>
            </select>
          </td>
        </tr>
				<tr>
					<td colspan="3" align="center">
            <hr>
						<input class="btn" type="submit" value="Proses" />
						<input class="btn" type="reset" value="Bersihkan" />
					</td>
				</tr>
			</table>
		</form>
  </div>
<script>
var form = document.querySelector('#form_input');
form.addEventListener("change", function (e) {
  var x = document.getElementById("merk").value;
	if (x == "Nike") {
    var hrg = "Rp375.000";
	} else if (x == "Adidas") {
    var hrg = "Rp300.000";
	} else if (x == "Kickers") {
    var hrg = "Rp250.000";
	} else if (x == "Eiger") {
    var hrg = "Rp275.000";
	} else if (x == "Buccheri") {
    var hrg = "Rp400.000";
	}
  document.getElementById("selected").innerHTML =	'<img id="brand_img"src="<?= base_url(); ?>assets/pictures/' + x + '.png" ' + 'alt="brand" width="80">';
	document.getElementById("hrg").innerHTML = '<option value="' + hrg + '">' + hrg + '</option>';
});
</script>
</body>
</html>
