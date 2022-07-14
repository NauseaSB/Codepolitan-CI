<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Blog <?php echo $blogs['title']; ?></title>
</head>

<body>
    <h1><?php echo $blogs['title']; ?></h1>
    <p><?php echo $blogs['content'] ?></p>
    <a href="<?php echo site_url('blogs/index'); ?>">Kembali Ke Halaman Utama</a>
</body>

</html>