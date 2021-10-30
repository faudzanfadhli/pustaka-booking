<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OnChange Event</title>
</head>
<body>
  <?php $tes = 'http://localhost:8080/ci4-app/pustaka_booking/'; ?>
  <form action="" id="config">
  <select name="merk" id="merk" onchange="merk()">
    <option value="Nike">Nike</option>
    <option value="Adidas">Adidas</option>
    <option value="Kickers">Kickers</option>
    <option value="Eiger">Eiger</option>
    <option value="Buccheri">Buccheri</option>
  </select>
  <div id="log"></div>
  </form>
  <span id="selected"></span>
  <p id="hrg"></p>
<script>
// var inputs = document.getElementsByTagName("merk"); 
// for (i=0; i<inputs.length; i++) {
//    inputs[i].onchange = changeHandler;
// }

var form = document.querySelector('#config');
form.addEventListener("change", function (e) {
    var x = document.getElementById("merk").value;
    if (x == "Nike") {
	  	var hrg = "375000";
	  } else if (x == "Adidas") {
	  	var hrg = "300000";
	  } else if (x == "Kickers") {
	  	var hrg = "250000";
	  } else if (x == "Eiger") {
	  	var hrg = "275000";
	  } else if (x == "Buccheri") {
	  	var hrg = "400000";
	  }
  console.log("Form has changed" + hrg, e);
  log.insertAdjacentHTML ('beforeend', '<p>Form has changed</p>' + hrg, e);
  document.getElementById("selected").innerHTML =	'<img src="<?php echo base_url(); ?>assets/pictures/' + x + '.png" ' + 'alt="brand" width="150">';
});

// function merk() {
// 	var x = document.getElementById("merk").value;
// 	document.getElementById("selected").innerHTML =	'<img src="<?php echo base_url(); ?>assets/pictures/' + x + '.png" ' + 'alt="brand" width="150">';
// 	if (x == "Nike") {
// 		var hrg = "375000";
// 	} else if (x == "Adidas") {
// 		var hrg = "300000";
// 	} else if (x == "Kickers") {
// 		var hrg = "250000";
// 	} else if (x == "Eiger") {
// 		var hrg = "275000";
// 	} else if (x == "Buccheri") {
// 		var hrg = "400000";
// 	}
// 	document.getElementById("hrg").innerHTML = hrg;
// }
</script>
</body>
</html>
