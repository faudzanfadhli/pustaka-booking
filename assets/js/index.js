function merk() {
	var x = document.getElementById("merk").value;
	document.getElementById("selected").innerHTML =	'<img src="<?= base_url(); ?>assets/pictures/' + x + '.png" ' + 'alt="brand" width="150">';
	if (x == "Nike") {
		var hrg = 375000;
	} else if (x == "Adidas") {
		var hrg = 300000;
	} else if (x == "Kickers") {
		var hrg = 250000;
	} else if (x == "Eiger") {
		var hrg = 275000;
	} else if (x == "Buccheri") {
		var hrg = 400000;
	}
	document.getElementById("hrg").innerHTML = "<td>Harga</td><td>:</td><td>" + hrg + "</td>";
}
