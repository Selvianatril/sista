<?php $this->load->view('admin/tools/header') ?>
<?php $this->load->view('admin/tools/loader') ?>
<?php $this->load->view('admin/tools/navbar') ?>
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>
    <?php $this->load->view('admin/tools/sidebar') ?>

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">

                <?php
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://");
                ?>
                <div id="tableCaption" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Seminar</h4>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area">
                            <?php $this->load->view('layouts/_alerts') ?>
                            <div class="table-responsive">
                                <a href="<?= base_url('Admin/inputSeminar') ?>" class="btn btn-primary">Tambah</a>

                                <?php $this->load->view('layouts/_alerts.php') ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Semester</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Jam</th>
                                            <th scope="col">Kategori Seminar</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">Nama Mahasiswa</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Lokasi</th>
                                            <th scope="col">Nama Dosen Pembimbing</th>
                                            <th scope="col">Penguji 1</th>
                                            <th scope="col">Penguji 2</th>
                                            <th scope="col">Nilai Pembimbing</th>
                                            <th scope="col">Nilai Penguji 1</th>
                                            <th scope="col">Nilai Penguji 2</th>
                                            <th scope="col">Nilai Akhir</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($seminar as $seminars) { ?>
                                            <tr>
                                                <th scope="row"><?= $no++ ?></th>
                                                <td><?= $seminars->semester ?></td>
                                                <td><?= $seminars->tanggal ?></td>
                                                <td><?= $seminars->jam ?></td>
                                                <td><?= $seminars->nama_kategori ?></td>
                                                <td><?= $seminars->nim ?></td>
                                                <td><?= $seminars->nama_mahasiswa ?></td>
                                                <td><?= $seminars->judul ?></td>
                                                <td><?= $seminars->lokasi ?></td>
                                                <td>
                                                    <?php
                                                    foreach ($dosen as $dosens) {
                                                        if ($dosens->id == $seminars->pembimbing_id) {
                                                            echo $dosens->nama;
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    foreach ($dosen as $dosens) {
                                                        if ($dosens->id == $seminars->penguji1_id) {
                                                            echo $dosens->nama;
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    foreach ($dosen as $dosens) {
                                                        if ($dosens->id == $seminars->penguji2_id) {
                                                            echo $dosens->nama;
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td><?= $seminars->nilai_pembimbing ?></td>
                                                <td><?= $seminars->nilai_penguji1 ?></td>
                                                <td><?= $seminars->nilai_penguji2 ?></td>
                                                <td><?php
                                                    if (!$seminars->nilai_pembimbing) {
                                                        echo "Nilai Belum Lengkap";
                                                    } else {
                                                        echo $seminars->nilai_akhir;
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('Admin/nilaiSeminar/' . $seminars->id) ?>" class="btn btn-success">Nilai</a>
                                                    <a href="<?= base_url('Admin/deleteSeminar/' . $seminars->id) ?>" class="btn btn-danger">Delete</a>|
                                                    <a href="<?= base_url('Admin/editSeminar/' . $seminars->id) ?>" class="btn btn-primary">Edit</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright &copy; <?= date('Y') ?> <a target="_blank" href="">SISTA</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Hanny <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg></p>
            </div>
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->


<?php $this->load->view('admin/tools/footer'); ?>