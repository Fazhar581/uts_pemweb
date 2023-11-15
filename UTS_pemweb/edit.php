<?php
// Koneksi ke database
include_once ("db.php");
// EDIT
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $query = "UPDATE products SET nama_produk='$nama_produk' WHERE id=$id";
    $result = $db->query($query);

    if($result){
        echo "Data produk berhasil diubah.";
    } else {
        echo "Terjadi kesalahan saat mengubah data produk.";
    }
}
?>
