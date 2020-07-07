<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?ver=1">
    <title>Data Wisata</title>
</head>
<body>


    <header class="title">
        <h2>Data Wisata</h2>
    </header>


    <nav class="home">
        <a href="index.php"> << Ke Halaman Utama</a>
        <a href="tambah-wisata.php">Tambah Data Lagi >> </a>
    </nav>

    <br>
    <div class="data-wisata">
        <table>

            <thead>
                <tr>
                    <th>Kota / Wisata</th>
                    <th>Makanan Khas</th>
                    <th>Spot Populer</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                
                    $sql = "SELECT * FROM wisata";
                    $query = mysqli_query($db, $sql);

                    while ($wisata = mysqli_fetch_array($query)) {

                        echo "<tr>";

                        echo "<td>".$wisata['nama_kota']."</td>";
                        echo "<td>".$wisata['makanan_khas']."</td>";
                        echo "<td>".$wisata['spot_wisata']."</td>";
                        echo "<td>";
                        // update and delete
                        echo "<a href='update-wisata.php?id=".$wisata['id']."'>Edit Wisata</a> | <a href='delete-wisata.php?id=".$wisata['id']."'>Hapus Wisata</a>";
                        echo "</td>";

                        echo "</tr>";
                    }

                ?>
            </tbody>

        </table>
    </div>
    

    <p class="total">Total Wisata ada : <?php echo mysqli_num_rows($query) ?></p>

    
</body>
</html>

