<?php 
include "koneksi.php";
$sql = "SELECT * FROM bouquet_iyya";
$result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Bouquet by Iyya - Gift and Bouquet</title>
</head>
<body>
    <div class="container">
        <h2>Daftar Bouquet</h2>
         <a href="tambah_menu.php" class="btn btn-secondary mt-4">Tambah Menu Bouquet Iyya</a>
                <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
                <div class="container">
                <div class="col-md-12 row justify-content-center">
                <div class="col-md-8 mt-4">
                <div class="col-md-12 mt-4">
                </div>
            </div>
        </div>
     </div>
    <table class="table" border="1">
    <thead>
        <tr>
        <th>Id</th>
        <th>Nama Product</th>
        <th>Harga</th></th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody> 
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['harga']; ?></td>
                    <td><?php echo $row['deskripsi']; ?></td>
                    <td><a href="update.php?id=<?php echo $row['id']; ?>"class="btn btn-secondary mt-4">Edit</a>&nbsp;<a href="delete.php?id=<?php echo $row['id']; ?>"class="btn btn-secondary mt-4">Delete</a></td>
                    </tr>                       
        <?php       
                }
            }
        ?>                
    </tbody>
</table>
<a href="tambah_menu.php"></a>
</div> 
</body>
</html>