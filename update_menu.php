<?php
include "koneksi.php";
    if (isset($_POST['update'])) {
        $id_menu = $_POST['id'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
        $sql = "UPDATE `bouquet_iyya` SET `nama`='$nama',`harga`='$harga',`deskripsi`='$deskripsi' WHERE `id`='$id_menu'"; 
        $result = $koneksi->query($sql); 
        if ($result == TRUE) {
            echo "Data telah berhasil diupdate!";
            echo "<meta http-equiv=refresh content=1;URL='admin_bouquet.php'>";
        }else{
            echo "Error:" . $sql . "<br>" . $koneksi->error;
        }
    } 
if (isset($_GET['id'])) {
    $id_menu = $_GET['id']; 
    $sql = "SELECT * FROM `bouquet_iyya` WHERE `id`='$id_menu'";
    $result = $koneksi->query($sql); 
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $nama = $row['nama'];
            $harga = $row['harga'];
            $deskripsi = $row['deskripsi'];
        } 
    ?>
        <h2>Form Update Menu</h2>
        <form action="" method="post">
            Nama :<br>
            <input type="text" name="nama" value="<?php echo $nama; ?>">
            <input type="hidden" name="id" value="<?php echo $id_menu; ?>">
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