
<?php 

    include("config.php");

    if(isset($_GET['id'])) {

        // ambil id dari query string
        $id = $_GET['id'];

        // buat query hapus
        $sql = "DELETE FROM wisata WHERE id=$id";
        $query = mysqli_query($db, $sql);


        // apakah query hapus berhasil?
        if($query) {
            header('Location:lihat-data.php');
        }else {
            die("Gagal menghapus...");
        }

    }else {
        die("terjadi kesalah hingga tidak bisa di hapus");
    }

?>


