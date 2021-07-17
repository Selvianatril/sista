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
                                <form action="<?= base_url('Admin/updateNilai/' . $seminar[0]['id']) ?>" method="POST">
                                    <input type="hidden" name="semester" value="<?= $seminar[0]['semester'] ?>">
                                    <input type="hidden" name="tanggal" value="<?= $seminar[0]['tanggal'] ?>">
                                    <input type="hidden" name="jam" value="<?= $seminar[0]['jam'] ?>">
                                    <input type="hidden" name="kategori_seminar_id" value="<?= $seminar[0]['kategori_seminar_id'] ?>">
                                    <input type="hidden" name="nim" value="<?= $seminar[0]['nim'] ?>">
                                    <input type="hidden" name="nama_mahasiswa" value="<?= $seminar[0]['nama_mahasiswa'] ?>">
                                    <input type="hidden" name="judul" value="<?= $seminar[0]['judul'] ?>">
                                    <input type="hidden" name="pembimbing_id" value="<?= $seminar[0]['pembimbing_id'] ?>">
                                    <input type="hidden" name="penguji1_id" value="<?= $seminar[0]['penguji1_id'] ?>">
                                    <input type="hidden" name="penguji2_id" value="<?= $seminar[0]['penguji2_id'] ?>">
                                    <div class="form-group">
                                        <label>Nilai Pembimbing 1</label>
                                        <input type="text" name="nilai_pembimbing" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Nilai Penguji 1</label>
                                        <input type="text" name="nilai_penguji1" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Nilai Penguji 2</label>
                                        <input type="text" name="nilai_penguji2" class="form-control">
                                    </div>
                                    <a href="<?= base_url('Admin/Seminar') ?>" class="btn btn-danger">Back</a>
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