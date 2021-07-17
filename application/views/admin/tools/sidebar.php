<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="<?= base_url('Admin') ?>">
                    <img style="border-radius: 10px" src="<?= base_url() ?>assets/1.jpeg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="<?= base_url('Admin') ?>" class="nav-link"> SISTA</a>
            </li>
            <li class="nav-item toggle-sidebar">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left sidebarCollapse">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
            </li>
        </ul>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu menu-heading">
                <div class="heading"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg><span>Apps</span></div>
            </li>

            <li class="menu <?php $this->uri->segment(2) == "" || $this->uri->segment(2) == "editPeserta" ? print("active") : print('') ?>">
                <a href="<?= base_url('Admin') ?>" aria-expanded="<?php $this->uri->segment(2) == "" || $this->uri->segment(2) == "editPeserta" ? print("true") : print('false') ?>" class="dropdown-toggle">
                    <div class="">
                        <!-- {{-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-message-square">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg> --}} -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Beranda</span>
                    </div>
                </a>
            </li>

            <li class="menu <?php $this->uri->segment(2) == "inputPenilaian" || $this->uri->segment(2) == "Penilaian" || $this->uri->segment(2) == "editPenilaian" ? print("active") : print('') ?>">
                <a href="#email" data-toggle="collapse" aria-expanded="<?php $this->uri->segment(2) == "inputPenilaian" || $this->uri->segment(2) == "Penilaian" || $this->uri->segment(2) == "editPenilaian" ? print("true") : print('false') ?>" class="dropdown-toggle">
                    <div class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span>Penilaian</span>
                    </div>
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="email" data-parent="#accordionExample">
                    <li class="<?php $this->uri->segment(2) == "inputPenilaian" ? print("active") : print('') ?>">
                        <a href="<?= base_url('Admin/inputPenilaian') ?>" aria-expanded="<?php $this->uri->segment(2) == "inputPenilaian" ? print("true") : print('false') ?>">
                            Input Penilaian </a>
                    </li>
                    <li class="<?php $this->uri->segment(2) == "Penilaian" || $this->uri->segment(2) == "editPenilaian" ? print("active") : print('') ?>">
                        <a href="<?= base_url('Admin/Penilaian') ?>" aria-expanded="<?php $this->uri->segment(2) == "Penilaian" ? print("true") : print('false') ?>">
                            Penilaian </a>
                    </li>
                </ul>
            </li>

            <li class="menu <?php $this->uri->segment(2) == "inputDosen" || $this->uri->segment(2) == "Dosen" || $this->uri->segment(2) == "editDosen" ? print("active") : print('') ?>">
                <a href="#kuliner" data-toggle="collapse" aria-expanded="<?php $this->uri->segment(2) == "inputDosen" || $this->uri->segment(2) == "Dosen" || $this->uri->segment(2) == "editDosen" ? print("true") : print('false') ?>" class="dropdown-toggle">
                    <div class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span>Dosen</span>
                    </div>
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="kuliner" data-parent="#accordionExample">
                    <li class="<?php $this->uri->segment(2) == "inputDosen" ? print("active") : print('') ?>">
                        <a href="<?= base_url('Admin/inputDosen') ?>" aria-expanded="<?php $this->uri->segment(2) == "inputDosen" ? print("true") : print('false') ?>">
                            Input Dosen </a>
                    </li>
                    <li class="<?php $this->uri->segment(2) == "Dosen" || $this->uri->segment(2) == "editDosen" ? print("active") : print('') ?>">
                        <a href="<?= base_url('Admin/Dosen') ?>" aria-expanded="<?php $this->uri->segment(2) == "Dosen" || $this->uri->segment(2) == "editDosen" ? print("true") : print('false') ?>">
                            Dosen </a>
                    </li>
                </ul>
            </li>

            <li class="menu <?php $this->uri->segment(2) == "inputKategori" || $this->uri->segment(2) == "Kategori" || $this->uri->segment(2) == "editKategori" ? print("active") : print('') ?>">
                <a href="#kategori" data-toggle="collapse" aria-expanded="<?php $this->uri->segment(2) == "inputKategori" || $this->uri->segment(2) == "Kategori" || $this->uri->segment(2) == "editKategori" ? print("true") : print('false') ?>" class="dropdown-toggle">
                    <div class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span>Kategori</span>
                    </div>
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="kategori" data-parent="#accordionExample">
                    <li class="<?php $this->uri->segment(2) == "inputKategori" ? print("active") : print('') ?>">
                        <a href="<?= base_url('Admin/inputKategori') ?>" aria-expanded="<?php $this->uri->segment(2) == "inputDosen" ? print("true") : print('false') ?>">
                            Input Kategori </a>
                    </li>
                    <li class="<?php $this->uri->segment(2) == "Kategori" || $this->uri->segment(2) == "editKategori" ? print("active") : print('') ?>">
                        <a href="<?= base_url('Admin/Kategori') ?>" aria-expanded="<?php $this->uri->segment(2) == "Kategori" || $this->uri->segment(2) == "editKategori" ? print("true") : print('false') ?>">
                            Kategori </a>
                    </li>
                </ul>
            </li>

            <li class="menu <?php $this->uri->segment(2) == "inputSeminar" || $this->uri->segment(2) == "seminar" || $this->uri->segment(2) == "editSeminar" ? print("active") : print('') ?>">
                <a href="#seminar" data-toggle="collapse" aria-expanded="<?php $this->uri->segment(2) == "inputSeminar" || $this->uri->segment(2) == "seminar" || $this->uri->segment(2) == "editSeminar" ? print("true") : print('false') ?>" class="dropdown-toggle">
                    <div class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span>Seminar</span>
                    </div>
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="seminar" data-parent="#accordionExample">
                    <li class="<?php $this->uri->segment(2) == "inputSeminar" ? print("active") : print('') ?>">
                        <a href="<?= base_url('Admin/inputSeminar') ?>" aria-expanded="<?php $this->uri->segment(2) == "inputSeminar" ? print("true") : print('false') ?>">
                            Input Seminar </a>
                    </li>
                    <li class="<?php $this->uri->segment(2) == "seminar" || $this->uri->segment(2) == "editSeminar" ? print("active") : print('') ?>">
                        <a href="<?= base_url('Admin/seminar') ?>" aria-expanded="<?php $this->uri->segment(2) == "seminar" || $this->uri->segment(2) == "editSeminar" ? print("true") : print('false') ?>">
                            Seminar </a>
                    </li>
                </ul>
            </li>
        </ul>

    </nav>

</div>
<!--  END SIDEBAR  -->