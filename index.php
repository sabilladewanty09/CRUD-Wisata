<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?ver=1">
    <title>Wisata Indonesia</title>
</head>
<body>


    <header>
        <div class="judul">
            <h2>Wisata Indonesia</h2>
        </div>
        <div class="hero">
            <p class="hero-title">Rasakan Indahnya Pesona INDONESIA melalui wisata dan kulinernya</p>
        </div>
    </header>


    <main>
        <nav class="menu">
            <ul>
                <li ><a href="tambah-wisata.php" class="active">Tambah Data Wisata</a></li>
                <li ><a href="lihat-data.php" class="secondary">Lihat Data Wisata</a></li>
            </ul>
        </nav>
    </main>

    



    <?php if(isset($_GET['status'])): ?>

    <h3>
        <?php 
            if($_GET['status'] == 'sukses') {
                echo "Penambahan Wisata Berhasil!";
            }else {
                echo "Penambahan Gagal..";
            }
        ?>
    </h3>

    <?php endif; ?>

    <footer>
        <p>Wisata Indonesia | made with ❤️ by Rizal Wibowo (201810225219)</p>
    </footer>
    
</body>
</html>