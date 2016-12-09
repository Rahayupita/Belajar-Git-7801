<?php

// fix komentar setelah merge
// --------------------------

	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	require_once('lib/m_nationality.php');
	
	$siswa = new siswa();
	$nation = new nationality();
	$data_nation = $nation -> readAllNationality();
	
	if(isset($_POST['kirim'])) {
		$nis	= $_POST['in_nis'];
		$name	= $_POST['in_name'];
		$email	= $_POST['in_email'];
		$nat	= $_POST['in_nation'];
		$data['foto'] = 'img/'.$_POST['in_nis'].'.png';
		
		$tambah	= $siswa->createSiswa($nat, $nis, $name, $email, $foto);
		echo "Data Siswa berhasil ditambahkan<br/><br/>";
	}
?>

<h1>Tambah Data Siswa</h1>
<form action="tsiswa.php" method="post">
	NIS:<br/>
	<input type ="text" name="in_nis"><br/>
	Nama Lengkap:<br/>
	<input type ="text" name="in_name"><br/>
	Email:<br/>
	<input type ="text" name="in_email"><br/>
	Kewarganegaraan:<br/>
	<select name="in_nation">
		<option value=""> --pilih negara-- </option>
		<?php foreach($data_nation as $n): ?>
		<option value="<?php echo $n['id_nationality']?>">
			<?php echo $n['nationality']?>
		</option>
		<?php endforeach?>
	</select><br/>
	Foto :
	<input type="file" name="in_foto" /> <br/>
	<?php if (!empty($dt['foto'])):?>                                                                                                                                                                                        
	<img src=<?php echo $dt['foto']?>" width="100" />
	<?php endif?><br/>
	<input type="submit" name="kirim" value="simpan">
</form>


<br/>
<a href="siswa.php">Kembali</a>

