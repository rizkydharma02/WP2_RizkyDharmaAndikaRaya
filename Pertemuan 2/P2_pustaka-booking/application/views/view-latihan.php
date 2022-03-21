<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Latihan 1 Web Programming</title>
	</head>
	<body>
		<p>Halo Kawan Yuk Kita Belajar Web Programming!!!</p>
		<br />
		<p>
			Nilai 1 =
			<?= $nilai1; ?>
		</p>
		<p>
			Nilai 2 =
			<?= $nilai2; ?>
		</p>
		<p>
			Ini Hasil Dari Pemodelan Dengan Method Penjumlahan Yaitu 
			<?= $nilai1 ." + ". $nilai2 ." = ". $hasil; ?>
		</p>
	</body>
</html>
