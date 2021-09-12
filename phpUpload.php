<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP File Upload</title>
	<style type="text/css">
		body{
			background-color: aliceblue;
			display: flex;
	        justify-content: center;
    	    align-items: center;
        	flex-direction: column;
		}
		form{
			background-color: powderblue;
			padding: 20px;
			letter-spacing: 1px;
		}
		.container {
    	    background-color: #fff;
        	border-radius: 10px;
        	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                0 10px 10px rgba(0,0,0,0.22);
        	position: relative;
	        overflow: hidden;
    	    width: 768px;
        	max-width: 100%;
       		min-height: 480px;
	    }
	    .form-container {
    	    position: absolute;
        	top: 0;
    	    height: 100%;
        	transition: all 0.6s ease-in-out;
	    }
	</style>
</head>
<body>

<?php
$nama = $nim = $prodi = $alamat = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nama = input($_POST["nama"]);
	$nim = input($_POST["nim"]);
	$prodi= input($_POST["prodi"]);
	$alamat = input($_POST["alamat"]);
}

function input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h2>FORMULIR PENDAFTARAN KEPENGURUSAN</h2>
<div class="container" id="container">
	<div class="form container">
		<form method="POST" action="the_input.php" enctype="multipart/form-data">
			Nama:
			<br><input type="text" name="nama" size="80" required><br><br>
			NIM:
			<br><input type="text" name="nim" size="80" required><br><br>
			PRODI:
			<br><select style="font-size: 14.5px;" name="prodi" required>
					<option value="KA">Komputerisasi Akuntansi</option>
					<option value="TI">Teknik Informatika</option>
					<option value="MI">Manajemen Informasi</option>
					<option value="SI">Sistem Informasi</option>
					<option value="RPL">Rekayasa Perangkat Lunak</option>
				</select><br><br>
			Alamat:
			<br><textarea name="alamat" rows="7" cols="75" required></textarea><br><br>
			Masukkan Bukti KTM:
			<input type="file" name="fileToUpload" id="fileToUpload" required><br>
			<input style="background-color: skyblue; margin-top: 1cm;" type="submit" value="Submit" name="submit">
		</form>
	</div>
</div>
</body>
</html>
