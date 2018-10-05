<form method="POST">
	<table>
		<tr>
			<td>KOMENTAR</td>
			<td>:</td>
			<td><input type="text" name="komen"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submitReg" value="MASUK"></td>
		</tr>
	</table>
</form>

<?php
	if (isset($_POST['komen'])) {
		$kata = $_POST['kata'];

		if (strlen($komen)!=10) {
			echo "komentar yang anda inputkan kurang ";
		}
	}


?>
