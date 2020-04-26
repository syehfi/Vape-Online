<?=
    form_open('login/proses_login');
?>
<title><?= $title ?></title>
<div class="container py-5 ">
    <div class="row">
        <div class="col-md-12">
            <div class="row ">
                <div class="col-md-6 mx-auto">
                    <div style="margin-top: auto;"></div>
                    <div class="card rounded-5 shadow-lg text-white bg-dark mb-3" style="margin: 40px;">
                        <div class="card-reader">
                            <h3 class="mb-0" style="text-align: center;">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" id="formLogin" method="post">
                                <div class="form-group">
                                    <label for="uname1">Username</label>
                                    <input class="form-control form-control-lg rounder-0" name="uname1" id="uname1" type="text"
                                    required="">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control form-control-lg rounder-0" name="pwd1" id="pwd1" type="password"
                                    required="">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg float-right" id="brnLogin">Login</button>
                                <p>Belum Punya akun? <a href="<?= base_url() ?>register">Daftar Disini</a></p>
                                <p><a href="<?= base_url() ?>home">Kembali Ke Halaman Utama</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?=
    form_close();
?>