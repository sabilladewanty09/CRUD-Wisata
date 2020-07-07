<?php 

    include("config.php");


    // cek apakah tombol simpan sudah di klik?
    if(isset($_POST['simpan'])) {

        // ambil data dari formulir
        $id = $_POST['id'];
        $namaKota = $_POST['nama_kota'];
        $makananKhas = $_POST['makanan_khas'];
        $spotWisata = $_POST['spot_wisata'];

        // buat query update
        $sql = "UPDATE wisata SET nama_kota='$namaKota', makanan_khas='$makananKhas', spot_wisata='$spotWisata' WHERE id=$id";

        $query = mysqli_query($db, $sql);

        // apakah query update berhasil?
        if($query) {
            // kalo berhasil alihkan ke halaman lihat-data.php
            header('Location:lihat-data.php');
        }else {
            // kalo gagal tampilkan pesan
            die("gagal menyimpan perubahan...");
        }


    }else {
        die("Akses Dialarang...");
    }


?>


