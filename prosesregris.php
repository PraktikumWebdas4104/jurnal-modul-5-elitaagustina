<?php 
session_start();
include "koneksi.php";

		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$email = $_POST['email'];

		echo "data berhasil disimpan";

 ?>
