<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <h3 style="text-align: center;">
                            Sistem Informasi Seminar Tugas Akhir - SISTA
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-toggleable-lg navbar-light bg-info">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="navbar-toggler-icon"></span>
                            </button> <a class="navbar-brand" href="index.html">SISTA</a>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?= base_url() ?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('Welcome/jadwal') ?>">Jadwal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('Welcome/register') ?>">Daftar Seminar</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        </br></br></br>


                        <form action="<?= base_url('Auth/aksi_login') ?>" method="post" id="login-form">
                            <h1>login</h1>
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input id="emaillogin" type="email" class="form-control" placeholder=" " name="email" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>

                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <input id="submit" type="submit" class="btn btn-success" value="LOGIN">

                        </form>

</body>
<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/scripts.js"></script>


</html>