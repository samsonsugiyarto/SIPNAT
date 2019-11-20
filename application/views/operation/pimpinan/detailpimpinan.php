<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Pimpinan</h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/pimpinan/') . $pimpinan['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $pimpinan['nidn']; ?></h5>
                    <p class="card-text"><?= $pimpinan['name']; ?></p>
                    <p class="card-text"><?= $pimpinan['jk']; ?></p>
                    <p class="card-text"><?= $pimpinan['jabatan']; ?></p>
                    <p class="card-text"><?= $pimpinan['email']; ?></p>
                    <p class="card-text"><?= $pimpinan['hp']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <a href="<?= base_url('operation/pimpinan'); ?>" class="btn btn-danger">Kembali</a>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->