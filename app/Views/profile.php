<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("assets/css/biodata.css") ?>">
</head>

<body>
    <div class="background">
        <img src="<?=base_url('/assets/img/aprik.jpeg')?>" alt="cantik" width=130 height=130 class="gambar">
        <div class="teks">
            <p>Nama: <?= $nama ?></p>
            <br>
            <p>NPM: <?= $npm ?></p>
        </div>
    </div>
</body>

</html>