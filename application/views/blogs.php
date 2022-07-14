<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Blog Saya Codepolitan</title>
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
    <h1>Artikel Terbaru</h1>
    <h3>
        <a href="<?php echo site_url('blogs/formAdd'); ?>">+Tambah Artikel</a>
    </h3>

    <form method="get">
        <input type="text" name="find">
        <button type="submit">Cari</button>
    </form>

    <?php foreach ($blogs as $key => $blog) : ?>
        <div class="blog">
            <h2>
                <a href="<?php echo site_url('blogs/detail/' . $blog['url']); ?>">
                    <?php echo $blog['title'] ?>
                </a>
            </h2>
            <a href="<?php echo site_url('blogs/formEdit/' . $blog['id']); ?>"> Edit</a>
            <a href="<?php echo site_url('blogs/delete/' . $blog['id']); ?>"> Delete</a>
            <br>
            <?php echo $blog['content'] ?>
        </div>
    <?php endforeach; ?>
</body>

</html>