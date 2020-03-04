<!DOCTYPE html>
<html>
<head>

	<title><?php echo $judultab; ?></title>

	<style>
		.ukuran {
			width: 600px;
			margin: auto;
		}

		.tabelprofil {
		  padding: 10px;
		  margin-top: 90px;
		  box-shadow: 0px 10px 30px 14px rgba(21, 21, 33,0.40);
		  border-radius: 15px;
		  letter-spacing: 1.4px;
		  font-family: poppins;
		}
	</style>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: #f0f0f7">

<div class="ukuran">
	<div class="container">

		<table class="table table-dark tabelprofil" style="background-color: blue">
		  <thead class="text-center">
		    <tr>
		      <th colspan="2"><?php echo $judul; ?></th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      	<td><?php echo $nama; ?></td>
		      	<td><?php echo $namasaya; ?></td>
		    </tr>
		    <tr>
		      	<td><?php echo $alamat; ?></td>
		      	<td><?php echo $alamatsaya; ?></td>
		    </tr>
		    <tr>
		      	<td><?php echo $jenis; ?></td>
		      	<td><?php echo $jenissaya; ?></td>
		    </tr>
		    <tr>
		      	<td><?php echo $asal; ?></td>
		      	<td><?php echo $asalsaya; ?></td>
		    </tr>
		  </tbody>
		</table>
	</div>

</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>