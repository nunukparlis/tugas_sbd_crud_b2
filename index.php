<?php include("config.php");?>
<?php include('header.php');?>

<h3>Data Pembeli</h3>
    <a class="btn btn-primary" href="add_pembeli.php">Add Pembeli</a><br/><br/>
    <table width='50%' border=1>
        <thead>
            <tr>
                <th>ID Pembeli</th>
                <th>Nama Pembeli</th>
                <th>No Telp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include("config.php");
        $sql = 'SELECT * FROM  pembeli_cost';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_pembeli']?></td>
                <td><?php echo $row['nama_pembeli']?></td>
                <td><?php echo $row['no_telp']?></td>
                <td><a class="glyphicon glyphicon-pencil" style='font-size:24px;color:blue' href="edit_pembeli.php?id=<?= $row['id_pembeli']; ?>">Edit</a>
                    <a class="glyphicon glyphicon-remove" style='font-size:24px;color:red' href="delete.php?id=<?= $row['id_pembeli']; ?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <h3>Data Produk</h3>
    <a class="btn btn-primary" href="add_produk.php">Add Produk</a><br/><br/>
    <table width='50%' border=1>
        <thead>
            <tr>
                <th>ID produk</th>
                <th>Nama produk</th>
                <th>kategori</th>
                <th>harga</th>
                <th>stock</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include("config.php");
        $sql = 'SELECT * FROM  produk_cost';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_produk']?></td>
                <td><?php echo $row['nama_produk']?></td>
                <td><?php echo $row['kategori']?></td>
                <td><?php echo $row['harga']?></td>
                <td><?php echo $row['stok']?></td>
                <td><a class="glyphicon glyphicon-pencil" style='font-size:24px;color:blue' href="edit_produk.php?id=<?= $row['id_produk']; ?>">Edit</a>
                    <a class="glyphicon glyphicon-remove" style='font-size:24px;color:red' href="delete.php?id=<?= $row['id_produk']; ?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <h3>Data Transaksi</h3>
    <a class="btn btn-primary" href="add_transaksi.php">Add Transaksi</a><br/><br/>
    <table width='70%' border=1>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Pembeli</th>
                <th>ID Produk</th>
                <th>Tanggal bayar</th>
                <th>Total harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include("config.php");
        $sql = 'SELECT * FROM  transaksi_cost';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_transaksi']?></td>
                <td><?php echo $row['id_pembeli']?></td>
                <td><?php echo $row['id_produk']?></td>
                <td><?php echo $row['tgl_bayar']?></td>
                <td><?php echo $row['total_bayar']?></td>
                <td><a class="glyphicon glyphicon-pencil" style='font-size:24px;color:blue' href="edit_transaksi.php?id=<?= $row['id_transaksi']; ?>">Edit</a>
                    <a class="glyphicon glyphicon-remove" style='font-size:24px;color:red' href="delete.php?id=<?= $row['id_transaksi']; ?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
<?php include('footer.php');?>