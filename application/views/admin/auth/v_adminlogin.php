<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Login | TBL Admin</title>
        <link rel="stylesheet" href="<?=base_url()?>Asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>Asset/fonts/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="<?=base_url()?>Asset/css/style.min.css">
        <link rel="stylesheet" href="<?=base_url()?>Asset/css/components.min.css">
    </head>
    <body style="overflow: hidden">
        <div id="app">
            <section class="section">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                            <div class="login-brand">
                                The Black Label Administrator
                            </div>
                            <?php if ($this->session->flashdata('msg') != null) { ?>
                                <?php echo $this->session->flashdata('msg');?>
                            <?php } ?>
                            <div class="card card-primary">
                                <div class="card-header"><h4>Login Admin</h4></div>
                                <div class="card-body">
                                    <form method="POST" action="<?=base_url('Admin_Login')?>">
                                        <div class="form-group">
                                            <div class="d-block">
                                	            <label for="username" class="control-label">Username</label>
                                            </div>
                                            <input type="text" class="form-control" name="username" tabindex="2" autocomplete="off" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                	            <label for="password" class="control-label">Password</label>
                                            </div>
                                            <input id="password" type="password" class="form-control" name="password" tabindex="2" autocomplete="off" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-lg btn-block" name="login" value="Login">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="simple-footer">
                                Copyright &copy; 2021 The Black Label<div class="bullet"></div>All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="<?=base_url()?>Asset/js/jquery-3.2.1.min.js"></script>
        <script src="<?=base_url()?>Asset/modules/tooltip.js"></script>
        <script src="<?=base_url()?>Asset/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>Asset/modules/nicescroll/jquery.nicescroll.min.js"></script>
        <script src="<?=base_url()?>Asset/js/stisla.js"></script>
        <script src="<?=base_url()?>Asset/js/page/index-0.js"></script>
        <script src="<?=base_url()?>Asset/js/scripts.js"></script>
        <script src="<?=base_url()?>Asset/js/custom.js"></script>
    </body>
</html>
