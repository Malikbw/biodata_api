<h1><?php echo $judulbagi; ?></h1>
<?php echo form_open('hitung/pembagian'); ?>
<?php echo form_input('angka1',$angka1); ?> :
<?php echo form_input('angka2',$angka2); ?>
<br>
<p><?php echo form_submit('submit','Hitung');?></p>
<?php echo form_close();?>
<br>
Hasil : <?php echo $hasil; ?>

<p><?php echo anchor('hitung','kembali') ?></p>