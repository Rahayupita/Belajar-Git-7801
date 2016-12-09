<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$id = $_GET['a'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}

$siswa = new Siswa();
$data = $siswa->readAllSiswa($id);

$siswa = new Siswa();
$data = $siswa->readSiswa($id);

if(empty($data)){
	exit('Data Not Found');
}

$dt = $data[0];

?>

<table border="1">
	<tr>
		<td>ID SISWA</td>
		<td><?php echo $dt['id_siswa']?></td>
	</tr>
	<tr>
		<td>FULL NAME</td>
		<td><?php echo $dt['full_name']?></td>
	</tr>
		<td>DATE OF BIRTH</td>
		<td><?php echo $dt['date_ob']?></td>
	</tr>
	<tr>
		<td>NATIONALITY</td>
		<td><?php echo $dt['nationality']?></td>
	</tr>
</table>
<br/>
<a href="siswa.php">Kembali</a>