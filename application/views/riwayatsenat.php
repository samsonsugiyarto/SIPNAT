<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My css-->
    <link rel="stylesheet" href="<?= base_url('assets/css/reset.css'); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/riwayat.css'); ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200i,300,400,600,700,800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">

    <title>Riwayat | Sistem Informasi Pemilihan Senat Mahasiswa</title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logostikom.png'); ?>">
</head>

<body>


    <!-- Navbar -->
    <nav class="navbar  navbar-dark bg-dark navbar-expand-lg sticky-top ">
        <div class="container">
            <a class="navbar-brand page-scroll" href="#home"> <img id="logo" alt="Logo" src="<?= base_url('assets/img/logostikom.png') ?>" width="65" height="65"> <span>SIPNAT<b>Sistem Informasi Pemilihan Senat Mahasiswa</b></span> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link  page-scroll" href="<?= base_url('home') ?>">Home <span class="sr-only"></span></a>
                    <a class="nav-item nav-link" href="<?= base_url('home/kampanye'); ?>">Kampanye</a>
                    <a class="nav-item nav-link  active" href="<?= base_url('home/riwayatsenat'); ?>">Riwayat Senat</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-item nav-link btn btn-primary text-white tombol " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('auth'); ?>">Admin</a>
                            <a class="dropdown-item" href="<?= base_url('auth/pimpinan'); ?>">Pimpinan STIKOM</a>
                            <a class="dropdown-item" href="<?= base_url('auth/dosen'); ?>">Dosen</a>
                            <a class="dropdown-item" href="<?= base_url('auth/mahasiswa'); ?>">Mahasiswa</a>
                        </div>
                    </li>
                </div>

            </div>

        </div>
    </nav>
    <!-- akhir Navbar -->


    <!-- Begin Page Content -->


    <div class="container">
        <div class="row">
            <div class="col-lg col-12 text-center title">
                <h2><span>RIWAYAT SENAT MAHASISWA</span> </h2>
            </div>
        </div>
    </div>
    <?php foreach ($riwayat as $riw) : ?>

        <div class="container mb-4">
            <div class="row periode">
                <div class="col-lg text-center">
                    <h4>PERIODE SENAT MAHASISWA <?= $riw['th_jabatan']; ?> </h4>
                </div>
            </div>
        </div>


        <div class="container text-center ">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card-deck">
                        <div class="card">
                            <img class="img-fluid" src="<?= base_url('assets/img/profile/riwayat/') . $riw['fotoketua'];  ?>" alt="Responsive image">
                            <div class=" card-body">
                                <h5 class="card-title"><?= $riw['ketua']; ?></h5>
                                <p class="card-text">Ketua Senat</p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="img-fluid" src="<?= base_url('assets/img/profile/riwayat/') . $riw['fotowakil']; ?>" alt="Responsive image">
                            <div class="card-body">
                                <h5 class="card-title"><?= $riw['wakil']; ?></h5>
                                <p class="card-text">Wakil Ketua Senat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-5 justify-content-center">
            <div class="col-md-8 visibtn text-center">
                <h2 class="badge badge-pill badge-success"><span>VISI</span> </h2>
            </div>
        </div>

        <div class="row mt-3 justify-content-center">
            <div class="col-md-8">
                <figure class="figurevisi text-center visi">
                    <p> <?= $riw['visi']; ?></p>
                </figure>

            </div>
        </div>

        <div class="row mt-2 justify-content-center">
            <div class="col-md-8 visibtn  text-center">
                <h2 class="badge badge-pill badge-danger"><span>MISI</span> </h2>
            </div>
        </div>

        <div class="row mt-3 justify-content-center">
            <div class="col-md-8">
                <figure class="figuremisi text-justify misi">
                    <p><?= $riw['misi']; ?></p>
                </figure>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Footer -->
    <footer>
        <div class="container text-center ">
            <div class="row">
                <div class="col-sm-12 ">
                    <p>&copy; copyright 2019 | STIKOM Yos Sudarso Purwokerto</p>
                    <!-- <p>&copy; copyright 2019 | built with <i class="fas fa-heart"></i> by. <a href="http://instagram.com/samsonsugiyarto">Team A</a></p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>Sistem Informasi Pemilihan Senat</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>