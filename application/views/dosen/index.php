<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/dosen/') . $user['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nik']; ?></h5>
                    <p class="card-text"><?= $user['name']; ?></p>
                    <?php if($user['jk'] == "L"):?>
                     <p class="card-text">Laki - Laki</p>
                     <?php else:?>
                       <p class="card-text">Perempuan</p>
                   <?php endif;?>
                   <p class="card-text"><?= $user['mengajar']; ?></p>
                   <p class="card-text"><?= $user['email']; ?></p>
                   <p class="card-text"><?= $user['hp']; ?></p>
               </div>
           </div>
       </div>
   </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->