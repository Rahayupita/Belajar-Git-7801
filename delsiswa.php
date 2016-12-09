<?php
	
//Update 9 Dec 09:47
//by Randy	
	
	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	
	$id = $_GET['a'];
	if(!is_numeric($id)){
		exit('Acess Forbiden');
	}
	
	$siswa = new Siswa();
	$data = $siswa->deleteSiswa($id);
	
	if(empty($data)){
		echo "Data berhasil dihapus";
	}

?> 
<br/>
<br/>
<a href="siswa.php">Kembali</a>
