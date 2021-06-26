<?php
// include database connection file
include("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_produk'];
	
	$id_produk=$_POST['id_peroduk'];
	$nama_produk=$_POST['nama_produk'];
	$kategori=$_POST['kategori'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
		
	// update user data
	$result = mysqli_query($conn, 
	"UPDATE produk SET id_produk='$id_produk',nama_produk='$nama_produk',kategori='$kategori',harga='$harga',stok='$stok' WHERE id_produk=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM produk_cost WHERE id_produk=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_produk = $user_data['id_produk'];
	$nama_produk = $user_data['nama_produk'];
	$kategori = $user_data['kategori'];
    $harga = $user_data['harga'];
    $stok = $user_data['stok'];
}
?>
<?php include('header.php');?>
 
<body>

	<br/><br/>
	
	<form name="update_user" method="post" action="edit_produk.php">
		<table border="0">
			<tr> 
				<td>ID Produk</td>
				<td><input type="text" name="id_produk" value=<?php echo $id_produk;?>></td>
			</tr>
			<tr> 
				<td>Nama produk</td>
				<td><input type="text" name="nama_produk" value=<?php echo $nama_produk;?>></td>
			</tr>
			<tr> 
				<td>Kategori/day</td>
				<td><input type="text" name="kategori" value=<?php echo $kategori;?>></td>
			</tr>
            <tr> 
				<td>Harga/day</td>
				<td><input type="text" name="harga" value=<?php echo $harga;?>></td>
			</tr>
            <tr> 
				<td>Stok/day</td>
				<td><input type="text" name="stok" value=<?php echo $stok;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>