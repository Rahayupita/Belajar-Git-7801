<?php

// Update dari github
// By Ayu

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/age.php');

$siswa = new Siswa();
$data = $siswa->readAllSiswa();
$age = new Age();

$i = 1;

?>

<h1>Data Siswa</h1>

<table border="1">
	<tr>
		<th>NO</th>
		<th>ID SISWA</th>
		<th>FULL NAME</th>
		<th>DATE OF BIRTH</th>
		<th>AGE</th>
		<th>EMAIL</th>
		<th>NATIONALITY</th>
		<th colspan="4">ACTION</th>
	</tr>
	
	<?php foreach($data as $a):?>
	<?php $umur = date('Y-m-d') - $a['date_ob'];?>
	<tr>
		<td><?php echo $i; $i++ ?></td>
		<td><?php echo $a['id_siswa']?></td?>
		<td><?php echo $a['full_name']?></td?>
		<td><?php echo $a['date_ob']?></td>
		<td>
			<?php
				echo $umur;
			?>
		</td>
		<td><?php echo $a['email']?></td?>
		<td><?php echo $a['nationality']?></td?>
		<td><a href="dsiswa.php?a=<?php echo $a['id_siswa'];?>">Detail</a></td>
		<td><a href="delsiswa.php?a=<?php echo $a['id_siswa'];?>">Delete</a></td>
		<td><a href="tsiswa.php?a=<?php echo $a['id_siswa'];?>">Tambah</a></td>
		<td><a href="usiswa.php?a=<?php echo $a['id_siswa'];?>">Edit</a></td>
	</tr>
	<?php endforeach?>
</table>

