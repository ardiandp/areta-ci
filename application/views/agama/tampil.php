<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul ?></title>
</head>
<body>
<table border="2" width="300">
	<tr>
		<td>No</td><td>Nama Agama</td><td>Aksi</td>
	</tr>
<?php $no=1; foreach ($agama as $key => $value) { ?>
	<tr>
		<td> <?php echo $no++ ?></td>
		<td> <?php echo $value->nama_agama ?></td>
		<td><a href="">Edit</a>| <a href="">Hapus</a> </td>
	</tr>
<?php } ?>
	
</table>
</body>
</html>