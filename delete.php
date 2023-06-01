<?php 
include "koneksi.php"; 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `bouquet_iyya` WHERE `id`='$id'";
     $result = $koneksi->query($sql);
     if ($result == TRUE) {
        echo "Data telah berhasil dihapus!";
        echo "<meta http-equiv=refresh content=1;URL='admin_bouquet.php'>";
    }else{
        echo "Error:" . $sql . "<br>" . $koneksi->error;
    }
} 
?>