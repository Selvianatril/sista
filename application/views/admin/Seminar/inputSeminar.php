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
                                    <h4>Tambah Seminar</h4>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area">
                            <?php $this->load->view('layouts/_alerts') ?>
                            <div class="table-responsive">
                                <form action="<?= base_url('Admin/addSeminar') ?>" method="POST">
                                    <div class="form-group">
                                        <label>Semester</label>
                                        <input type="text" name="semester" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Jam</label>
                                        <input type="time" name="jam" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>kategori</label>
                                        <select name="kategori_seminar_id" class="form-control">
                                            <?php foreach ($kategori as $kategoris) { ?>
                                                <option value="<?= $kategoris->id ?>"><?= $kategoris->nama ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>NIM</label>
                                        <input type="text" name="nim" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama mahasiswa</label>
                                        <input type="text" name="nama_mahasiswa" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input type="text" name="judul" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Lokasi</label>
                                        <input type="text" name="lokasi" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Pembimbing</label>
                                        <select name="pembimbing_id" class="form-control">
                                            <?php foreach ($dosen as $dosens) { ?>
                                                <option value="<?= $dosens->id ?>"><?= $dosens->nama ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Penguji 1</label>
                                        <select name="penguji1_id" class="form-control">
                                            <?php foreach ($dosen as $dosens) { ?>
                                                <option value="<?= $dosens->id ?>"><?= $dosens->nama ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Penguji 2</label>
                                        <select name="penguji2_id" class="form-control">
                                            <?php foreach ($dosen as $dosens) { ?>
                                                <option value="<?= $dosens->id ?>"><?= $dosens->nama ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="SUBMIT">
                                </form>
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