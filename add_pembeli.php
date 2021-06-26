<?php include('header.php');?>
 
<body>
	<br/><br/>
 
	<form action="add_pembeli.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Pembeli</td>
				<td><input type="text" name="id_pembeli"></td>
			</tr>
			<tr> 
				<td>Nama Pembeli</td>
				<td><input type="text" name="nama_pembeli"></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td><input type="text" name="no_telp"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" class="btn info" name="Submit" value="Tambah pembeli"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_pembeli = $_POST['id_pembeli'];
		$nama_pembeli = $_POST['nama_pembeli'];
		$no_telp = $_POST['no_telp'];
		
		// include database connection file
		include("config.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO pembeli_cost(id_pembeli,nama_pembeli,no_telp) 
		VALUES('$id_pembeli','$nama_pembeli','$no_telp')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
    }
	?>
</body>
<?php include('footer.php');?>