<form action="<?= base_url('Auth/proses_register') ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-form-label">NIM</label>
        <input type="text" class="form-control" placeholder=" " name="nim" required="">
    </div>
    <div class="form-group">
        <label class="col-form-label">Nama</label>
        <input type="text" class="form-control" placeholder=" " name="nama" required="">
    </div>
    <div class="form-group">
        <label class="col-form-label">Email</label>
        <input type="email" class="form-control" placeholder=" " name="email" required="">
    </div>
    <div class="form-group">
        <label class="col-form-label">Seminar</label>
        <select name="seminar_id" class="form-control">
            <?php foreach ($seminars as $seminar) { ?>
                <option value="<?= $seminar->id ?>"><?= $seminar->judul ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label class="col-form-label">Password</label>
        <input type="password" class="form-control" placeholder=" " name="password" id="password1" required="">
    </div>
    <div class="right-w3l">
        <input type="submit" class="btn btn-primary" value="Daftar">
    </div>
    <div class="sub-w3l">
        <p class="text-center dont-do mt-3">I Have Account?
            <a href="<?= base_url('Welcome/login') ?>" class="btn btn-link" data-toggle="modal" data-dismiss="modal" data-target="#exampleModal">
                Login</a>
        </p>
    </div>
</form>