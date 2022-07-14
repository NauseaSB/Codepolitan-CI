<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah Artikel</title>
    <style>
        a {
            color: blue;
            text-decoration: none;
        }

        a:visited {
            color: blue;
            text-decoration: none;
        }

        a:hover {
            color: red;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>Form Tambah Artikel</h1>
    <form action="" method="post">
        <div>
            <label>Judul</label>
            <input type="text" name="title">
        </div>
        <div>
            <label>URL</label>
            <input type="text" name="url">
        </div>
        <div>
            <label>Konten</label>
            <textarea name="content" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Simpan</button>
    </form>
    <a href="<?php echo site_url('blogs/index'); ?>">Kembali Ke Halaman Utama</a>
</body>

</html>