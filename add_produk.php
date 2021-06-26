<?php include('header.php');?>
 
<body>
	<br/><br/>
 
	<form action="add_produk.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Produk</td>
				<td><input type="text" name="id_produk"></td>
			</tr>
			<tr> 
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategori"></td>
			</tr>
            <tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
            <tr>
				<td>stock</td>
				<td><input type="text" name="stok"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" class="btn info" name="Submit" value="Tambah produk"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_produk = $_POST['id_produk'];
		$nama_produk = $_POST['nama_produk'];
		$kategori = $_POST['kategori'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
		
		// include database connection file
		include("config.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO produk_cost(id_produk,nama_produk,kategori,harga,stok) 
		VALUES('$id_produk','$nama_produk','$kategori','$harga','$stok')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
    }
	?>
</body>
<?php include('footer.php');?>