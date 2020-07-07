<?php 

include("config.php");

// cek apakah tombol daftar sudah di klik?
if(isset($_POST['tambah'])) {

    //ambil data dari formulir
    $namaKota = $_POST['nama_kota'];
    $makananKhas = $_POST['makanan_khas'];
    $spotWisata = $_POST['spot_wisata'];

    // buat query
    $sql = "INSERT INTO wisata (nama_kota, makanan_khas, spot_wisata) VALUE ('$namaKota', '$makananKhas', '$spotWisata')";

    $query = mysqli_query($db, $sql);


    // apakah query simpan berhasil?
    if($query) {
        // kalo berhasil alihkan ke index.php dgn sattus=sukses
        header('Location:index.php?status=sukses');
    }else {
        header('Location:index.php?status=gagal');
    }


}else {
    die("Akses Dilarang...");
}

?>