
<body style="font-family:mimich;background-color: #00FFFF;">

	<center><h2 style="font-family:mimich ; text-shadow: 30%">Frofile Saya</h2></center>
	<form action=" " method="POST" enctype="multipart/form-data">
	<table>
		<ul>
		<tr>
			<td><li><b>Foto</b></li>
			<input type="file" name="Foto" style="width: 80%; height: 20px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Hobby :</b></li></td>
		</tr>
		<tr>
			<td>
			<br><input type="checkbox" name="hoby[]" value="game">main game 
				<br><input type="checkbox" name="hoby[]" value="travelling">jalan jalan
			<br><input type="checkbox" name="hoby[]" value="makan">Makan
				<br><input type="checkbox" name="hoby[]" value="ketiduran">Tidur
			<br><input type="checkbox" name="hoby[]" value="sing">menyanyi
				<br><input type="checkbox" name="hoby[]" value="Music">membaca webtoon
			<br><input type="checkbox" name="hoby[]" value="menulis">Menulis
				<br><input type="checkbox" name="hoby[]" value="tertawa">tertawa
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Genre Film Yang Disukai:</b></li></td>
		</tr>
		<tr>
			<td>
				<br><input type="checkbox" name="film[]" value="Horror">Horror
				<br><input type="checkbox" name="film[]" value="Action">Action 
				<br><input type="checkbox" name="film[]" value="Anime">Anime
				<br><input type="checkbox" name="film[]" value="Thriller">Thiller
				<br><input type="checkbox" name="film[]" value="Animasi">Animasi
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Tempat Wisata Tujuan Travelling :</b></li></td>
		</tr>
		<tr>
			<td>
				<br><input type="checkbox" name="travel[]" value="Bali">Bali
				<br><input type="checkbox" name="travel[]" value="Raja Ampat">Raja Ampat 
				<br><input type="checkbox" name="travel[]" value="Pulau Derawan">Pulau Derawan
				<br><input type="checkbox" name="travel[]" value="Bangka Belitung">Bangka Belitung
				<br><input type="checkbox" name="travel[]" value="Labuan Bajo">Labuan Bajo
			</td
		</tr>
		<tr>
			<td><br></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><center><input type="submit" name="simpan" value="Submit" style="font-family:mimich;color: black; width: 100px;height: 40px;border-radius: 10px"></center></td>
		</tr>	

		</ul>
	</table>

<?php
	if(isset($_POST['simpan'])) {
		$hobby = $_POST['hoby'];
		$genref = $_POST['film'];
		$tdestin = $_POST['travel'];
		$poto = $_FILES["Foto"]["name"];

		echo "<br><br><br>";
		echo "<hr>";

		$uploaddir = 'gambar/';
    	$uploadfile = $uploaddir . basename($_FILES['Foto']['name']);

    	echo "<p>";

    	

	?>
	<center>
<table style="width: 20%; height: 10%; border-radius: 10%">
	<tr>
		<td colspan="2" align="center"><h3>Your Result</h3></td>
	</tr>	
	<tr>
		<td><b>Hobby : </b></td>
		<td align="center">
			<?php
				foreach ($hobby as $a) {
					echo $a."<br>";
				}
			?>		
		</td>
	</tr>
	<tr>
		<td><b>Genre: </b></td>
		<td align="center">
			<?php
				foreach ($genref as $b) {
					echo $b."<br>";
				}
			?>
		</td>
	</tr>
	<tr>
		<td><b>Travel Destination : </b></td>
		<td align="center">
			<?php
				foreach ($tdestin as $c) {
					echo $c."<br>";
				}
			?>	
		</td>
	</tr>

	<tr>
		<td>Gambar : </td>
		<td>
			<?php
				if (move_uploaded_file($_FILES['poto']['tmp_name'], $uploadfile)) {
      				echo "<img src='gambar/$poto' style='width:200px;height:200px'>";	
    			} else {
       				echo "masukan file";
    			}
			?>
		</td>

	</tr>
</table>
	<?php		

	}
?>


</body>
