<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Sistem Klinik Fitri</title>
    <style>
        .pasien,
        .dokter,
        .obat,
        .berobat {
            width: 120px;
            padding: 10px;
            float: left;
            margin: 10px;
            border-radius: 3px;
        }

        .pasien {
            background-color: greenyellow;
        }

        .dokter {
            background-color: salmon;
        }

        .obat {
            background-color: pink;
        }

        .berobat {
            background-color: lightblue;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url(); ?>">Klinik Fitri</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dokter'); ?>">Data Dokter</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('pasien'); ?>">Data Pasien</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('obat'); ?>">Data Obat</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('users'); ?>">Data User</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('kunjungan'); ?>">Rekam Medis</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>