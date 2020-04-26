<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta meta name="viewport" content="width=device-width, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/login.css">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/423bfd438c.js" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <title>Register</title>
</head>
<body>

<div class="container py-5 ">
    <div class="row">
        <div class="col-md-12">
            <div class="row ">
                <div class="col-md-6 mx-auto">
                    <div style="margin-top: auto;"></div>
                    <div class="card rounded-5 shadow-lg text-white bg-dark mb-3" style="margin: 40px;">
                        <div class="card-reader">
                            <h3 class="mb-0" style="text-align: center;">Register</h3>
                        </div>
                        <div class="card-body">
                        <form action="<?= base_url() ?>register/tambahUser" method="post">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" class="form-control" placeholder="Email" type="email">
                                </div> <!-- form-group// -->

                                <div class="form-group">
                                    <label>Username</label>
                                    <input name="username" class="form-control" placeholder="Username" type="text">
                                </div> <!-- form-group// -->

                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" class="form-control" placeholder="Password" type="password">
                                </div> <!-- form-group// -->

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input name="alamat" class="form-control" placeholder="Alamat" type="text">
                                </div> <!-- form-group// -->

                                <div class="form-group">
                                    <label>Nomor HP</label>
                                    <input name="telp" class="form-control" placeholder="No HP" type="text">
                                </div> <!-- form-group// -->

                                <br>

                                <div class="form-group ">
                                    <button type="submit" class="font-weight-light btn btn-primary btn-lg">Daftar</button>
                                </div> <!-- form-group// -->

                                <p>Sudah Punya Akun? <a href="<?= base_url(); ?>login/index">Masuk Disini</a> </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>