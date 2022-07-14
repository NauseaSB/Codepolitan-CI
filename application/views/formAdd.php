<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo base_url('assets/img/about-bg.jpg'); ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>Tambah Artikel</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Form Content -->
<div class="container">
    <div class="row justify-content-center">
        <div class="com-md-8">
            <form action="" method="post">
                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" type="text" name="title">
                </div>
                <div class="form-group">
                    <label>URL</label>
                    <input class="form-control" type="text" name="url">
                </div>
                <div class="form-group">
                    <label>Konten</label>
                    <textarea class="form-control" name="content" cols="30" rows="10"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
</div>
<!-- Divider-->
<hr class="my-4" />