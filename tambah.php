<?php
include('koneksi.php');
//menyimpan data ke dalam tabel kategori_menu
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$query = "INSERT INTO bouquet_iyya (nama, harga, deskripsi) VALUES ('$nama','$harga', '$deskripsi')";
$result = mysqli_query($koneksi, $query);
//mengecek apakah data berhasil disimpan
if($result){
echo "Data kategori menu berhasil disimpan.";
} else {
echo "Data kategori menu gagal disimpan.";
}
mysqli_close($koneksi);
?>
