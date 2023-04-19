
<!DOCTYPE html>
<html>
<head>
	<title>Generate Account Number</title>
</head>
<body>
	<h1>Generate Account Number</h1>
	<button onclick="generateAccount()">Buat Nomor Rekening</button>

	<div id="result"></div>

	<script>
		function generateAccount() {
			var xhr = new XMLHttpRequest();
			xhr.open("GET", "Generate_Nomor_Rekening.php", true);
			xhr.onload = function() {
				if (xhr.readyState === xhr.DONE && xhr.status === 200) {
					document.getElementById("result").innerHTML = xhr.responseText;
				}
			};
			xhr.send();
		}
	</script>
</body>
</html>
