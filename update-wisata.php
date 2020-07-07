
<?php 

    include ("config.php");

    // kalo tidak ada id di query string
    if(!isset($_GET['id'])) {
        header('Location:index.php');
    }

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari DB
    $sql = "SELECT * FROM wisata WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $wisata = mysqli_fetch_assoc($query);


    // jika  data yang di edit tidak di temukan
    if(mysqli_num_rows($query) < 1) {
        die("data tidak ditemukan...");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?ver=1">
    <title>Update Wisata</title>
</head>
<body>

    <header class="title">
        <h3>Edit Data Wisata</h3>
    </header>

    <div class="form-update">

        <form action="proses-update.php" method="post">

            <div class="field hide">
                <input type="text" name="id" value="<?php echo $wisata['id'] ?>"/>
            </div>

            <div class="field">
                <label for="kota">Edit Nama Kota / Wisata </label>
                <input type="text" name="nama_kota" value="<?php echo $wisata['nama_kota']?>" required>
            </div>

            <div class="field">
                <label for="makanan">Edit Makanan Khas </label>
                <input type="text" name="makanan_khas" value="<?php echo $wisata['makanan_khas'] ?>" required>
            </div>

            <div class="field">
                <label for="spot">Edit Spot Wisata Populer </label>
                <input type="text" name="spot_wisata" value="<?php echo $wisata['spot_wisata'] ?>" required>
            </div>

            <div class="cta">
                <input type="submit" value="Simpan" name="simpan">
            </div>
        </form>

    </div>
    
    
</body>
</html>




