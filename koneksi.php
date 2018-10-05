<?php
$koneksi = new mysqli("localhost", "root", "", "mahasiswa");


  			if (isset($_POST['submit'])) {
		

				if ($koneksi) {
					$nama = $_POST['nama'];
					$nim = $_POST['nim'];
					$email = $_POST['email'];
					
					$status=true;
	
					if (!is_int($nim) && strlen($nim)!=10 && strlen($nama)!=25) {
						echo "inputan salah";
						$status=false;
					}

					if ($status) {
							$sql = $koneksi->query("INSERT INTO 'mahasiswa' ('nama', 'nim', 'email') VALUES ('".$nama."', '".$nim."', '".$email."')");
					
					echo "REGISTRASI SUKSES<br>";

					}
				}else{
					echo "REGISTRASI GAGAL";
				}
			}


  		
 ?>
