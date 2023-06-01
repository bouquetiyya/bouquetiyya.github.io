<?php
include "koneksi.php";
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $id = $_POST['id'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
        $sql = "UPDATE `bouquet_iyya` SET `nama`='$nama',`harga`='$harga',`deskripsi`='$deskripsi' WHERE `id`='$id'"; 
        $result = $koneksi->query($sql); 
        if ($result == TRUE) {
            echo "Data telah berhasil diupdate!";
            echo "<meta http-equiv=refresh content=1;URL='admin_bouquet.php'>";
        }else{
            echo "Error:" . $sql . "<br>" . $koneksi->error;
        }
    } 
if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $sql = "SELECT * FROM `bouquet_iyya` WHERE `id`='$id'";
    $result = $koneksi->query($sql); 
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $nama = $row['nama'];
            $harga = $row['harga'];
            $deskripsi = $row['deskripsi'];
            $id = $row['id'];
        } 
    ?>
        <h2>Form Update Menu</h2>
        <form action="" method="post">
            Nama :<br>
            <input type="text" name="nama" value="<?php echo $nama; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <br>
            Harga :<br>
            <input type="text" name="harga" value="<?php echo $harga; ?>">
            <br>
            Deskripsi :<br>
            <input type="text" name="deskripsi" value="<?php echo $deskripsi; ?>">
            <br><br>
            <input type="submit" value="Update" name="update">
        </form> 
        </body>
        </html> 
    <?php
    } else{ 
        header('Location: tambah_menu.php');
    } 
}
?>