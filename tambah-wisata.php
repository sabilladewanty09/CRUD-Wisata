<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?ver=1">
    <title>Tambah Data Wisata</title>
</head>

<body>


    <header class="title">
        <h3>Tambah Data Wisata Baru</h3>
    </header>

    <div class="form-tambah">
        <form action="proses-tambah.php" method="POST">

            <div class="field">
                <label for="kota">Nama Kota / Wisata </label>
                <input type="text" name="nama_kota" placeholder="Nama Kota / Wisata" required>
            </div>

            <div class="field">
                <label for="makanan">Makanan Khas </label>
                <input type="text" name="makanan_khas" placeholder="Makanan Khas" required>
            </div>

            <div class="field">
                <label for="spot">Spot Wisata Populer </label>
                <input type="text" name="spot_wisata" placeholder="Spot Wisata" required>
            </div>

            <div class="cta">
                <input type="submit" value="Tambah" name="tambah">
            </div>

        </form>
    </div>



</body>

</html>