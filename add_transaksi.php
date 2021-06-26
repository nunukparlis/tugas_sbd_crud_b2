<?php include('header.php');?>
 
<body>
	<br/><br/>
 
	<form action="add_transaksi.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Transaksi</td>
				<td><input type="text" name="id_transaksi"></td>
			</tr>
			<tr> 
				<td>ID Pembeli</td>
				<td><input type="text" name="id_pembeli"></td>
			</tr>
			<tr>
				<td>ID Produk</td>
				<td><input type="text" name="id_produk"></td>
			</tr>
            <tr>
				<td>Tanggal bayar</td>
				<td><input type="text" id="date" name="tgl_bayar"></td>
			</tr>
            <tr>
				<td>Total Harga</td>
				<td><input type="text" name="total_bayar"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" class="btn info" name="Submit" value="Tambah transaksi"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_transaksi = $_POST['id_transaksi'];
		$id_pembeli = $_POST['id_pembeli'];
		$id_produk = $_POST['id_produk'];
        $tgl_bayar = $_POST['tgl_bayar'];
        $total_bayar = $_POST['total_bayar'];
		
		// include database connection file
		include("config.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO transaksi_cost(id_transaksi,id_pembeli,id_produk,tgl_bayar,total_bayar) 
		VALUES('$id_transaksi','$id_pembeli','$id_produk','$tgl_bayar','$total_bayar')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
    }
	?>
</body>
<?php include('footer.php');?>