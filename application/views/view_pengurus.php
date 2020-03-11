<?php echo form_open('pengurus/addpengurus'); ?>
<h2><?php echo $judul; ?></h2>
<table border="0">
	<tr>
		<td>ID</td>
		<td><?php echo form_input('id'); ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><?php echo form_input('nama'); ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>
			<input type="radio" name="gender" value="L">Laki-laki
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="radio" name="gender" value="P"> Perempuan
		</td>
	</tr>
	<tr>
		<td align="top">Alamat</td>
		<td>
			<textarea name="alamat" rows="3" cols="40"></textarea>
		</td>
	</tr>
	<tr>
		<td>Gaji</td>
		<td><?php echo form_input('gaji'); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit','simpan'); ?>
			<input type="reset" value="batal">
		</td>
	</tr>

</table>

<?php echo form_close(); ?>


<h2><?php echo $isi; ?></h2>
<table border="1" style="padding: 20px;">
	<tr style="background-color: blue;">
		<th style="padding: 10px; background-color: blue;">ID</th>
		<th>NAMA</th>
		<th>JENIS KELAMIN</th>
		<th>ALAMAT</th>
		<th>GAJI</th>
		<th>AKSI</th>
	</tr>
<?php 
foreach ($data->result_array() as $row) {
?>

	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		<td><?php echo $row['alamat']; ?></td>
		<td><?php echo $row['gaji']; ?></td>
		<td>
			<?php echo anchor('pengurus/edit/'.$row['id'],'edit  |') ?>
			<?php echo anchor('pengurus/delete/'.$row['id'],'Hapus') ?>
		</td>
	</tr>
<?php } ?>

</table>