<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul ?></title>
</head>
<body>
	<?php echo form_open('agama/simpan'); ?>
<table border="1">
	<tr><td>Nama Agama</td><td><input type="text" name="agama"></td></tr>
	<tr><td><input type="submit" name="simpan" value="Simpan"></td><td><input type="reset" name="batal" value="Batal"></td></tr>
</table>
<?php echo form_close(); ?>
</body>
</html>