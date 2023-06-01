<?php 

include "koneksi.php";

  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO `bouquet_iyya`(`nama`, `harga`, `deskripsi`) VALUES ('$nama','$harga','$deskripsi')";
    $result = $koneksi->query($sql);

    if ($result == TRUE) {
      echo "Data Telah berhasil ditambahkan!";
      echo "<meta http-equiv=refresh content=1;URL='admin_bouquet.php'>";
    }else{
      echo "Error:". $sql . "<br>". $koneksi->error;
    } 
    $koneksi->close(); 
  }
?>

<!DOCTYPE html>
<html>
<body>
<h2>Form Tambah Bouquet</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Tambah Bouquet</legend>
    Nama:<br>
    <input type="text" name="nama">
    <br>
    Harga :<br>
    <input type="text" name="harga">
    <br>
    Deskripsi :<br>
    <input type="text" name="deskripsi">
    <br><br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
</body>
</html>