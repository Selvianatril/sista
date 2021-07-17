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
                                    <h4>Dosen</h4>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area">
                            <?php $this->load->view('layouts/_alerts') ?>
                            <div class="table-responsive">
                                <?php $this->load->view('layouts/_alerts.php') ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">NIDN.</th>
                                            <th scope="col">Nama Dosen</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($dosen as $dosens) { ?>
                                            <tr>
                                                <th scope="row"><?= $no++ ?></th>
                                                <td><?= $dosens->nidn ?></td>
                                                <td><?= $dosens->nama ?></td>
                                                <td>
                                                    <a href="<?= base_url('Admin/deleteDosen/' . $dosens->id) ?>" class="btn btn-danger">Delete</a>|
                                                    <a href="<?= base_url('Admin/editDosen/' . $dosens->id) ?>" class="btn btn-primary">Edit</a>
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