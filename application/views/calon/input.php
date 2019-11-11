<!DOCTYPE html>
<html>
<head>
	<title>Inpuit Calon Mahasiawa</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>No Pendataran</td><td><input type="text" name="no_pendafatran" value="<?php echo date('YmdHis')?>"></td>
		</tr>
		<tr>
			<td>Nama Pendaftar</td><td><input type="text" name="nama" placeholder="Nama Pendaftar"></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td><td><input type="text" name="tempat_lahir"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td><td><input type="date" name="tgl_lahir"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td><td><input type="radio" name="jk" value="L">Laki- Laki
				<input type="radio" name="jk" value="P">Perempuan</td>
		</tr>
		<tr>
			<td>Alamat</td><td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td>No Telp</td><td><input type="text" name="no_telp"></td>
		</tr>
		<tr>
			<td>Agama</td><td><select name="agama">
				<option value="">== Pilih Agama ==</option>
				<?php foreach ($agama as $key => $value) { ?>
				<option value="<?php echo $value->id_agama ?>"><?php echo $value->nama_agama ?></option>
				<?php } ?>
			</select></td>
		</tr>
		<tr>
			<td>Email</td><td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Jurusan</td><td><select name="Jurusan">\
				<option value=""> == Pilih Jurusan ==</option>
				<?php
				foreach ($jurusan as $key => $value) { ?>
					<option value="<?php echo $value->kode_jurusan?>"> <?php echo $value->nama_jurusan?></option>
				<?php } ?>
			</select></td>
		</tr>
		<tr>
			<td><input type="submit" name="simpan" value="Simpan Data"></td><td><input type="reset" name=""></td>
		</tr>
	</table>

</body>
</html>