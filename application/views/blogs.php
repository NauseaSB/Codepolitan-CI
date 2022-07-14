<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo base_url('assets/img/home-bg.jpg'); ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Selamat Datang!</h1>
                    <span class="subheading">Menyediakan Beberapa Artikel Sebagai Contoh</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <form method="get">
                <input type="text" name="find">
                <button type="submit">Cari</button>
            </form>

            <?php foreach ($blogs as $key => $blog) : ?>
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="<?php echo site_url('blogs/detail/' . $blog['url']); ?>">
                        <h2 class="post-title"><?php echo $blog['title']; ?></h2>
                        <h3 class="post-subtitle"><?php echo $blog['content']; ?></h3>
                    </a>
                    <p class="post-meta">
                        Posted on <?php echo $blog['date']; ?>
                        <a href="<?php echo site_url('blogs/formEdit/' . $blog['id']); ?>"> Edit</a>
                        <a href="<?php echo site_url('blogs/delete/' . $blog['id']); ?>"> Delete</a>
                    </p>

                </div>
                <!-- Divider-->
                <hr class="my-4" />
            <?php endforeach; ?>
        </div>
    </div>
</div>