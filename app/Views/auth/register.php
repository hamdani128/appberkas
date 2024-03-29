<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kapella Bootstrap Admin Dashboard Template</title>
    <!-- base:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo">
                                <img src="<?= base_url(); ?>/assets/images/logo.svg" alt="logo">
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Join us today! It takes only few steps</h6>

                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <form class="pt-3 user" action="<?= route_to('register') ?>" method="post">
                                <?= csrf_field() ?>

                                <div class="form-group">
                                    <label>Fullname</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-account-plus text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="fullname"
                                            class="form-control <?php if(session('errors.fullname')) : ?>is-invalid<?php endif ?> form-control-lg border-left-0"
                                            placeholder="Fullname" value="<?= old('fullname') ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-account-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="username"
                                            class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?> form-control-lg border-left-0"
                                            placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-email-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="email" name="email"
                                            class="form-control  <?php if(session('errors.email')) : ?>is-invalid<?php endif ?> form-control-lg border-left-0"
                                            placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                                        <small id="emailHelp"
                                            class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label>Country</label>
                                    <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                                        <option>Country</option>
                                        <option>United States of America</option>
                                        <option>United Kingdom</option>
                                        <option>India</option>
                                        <option>Germany</option>
                                        <option>Argentina</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password"
                                            class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?> form-control-lg border-left-0"
                                            name="password" placeholder="Password" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password"
                                            class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?> form-control-lg border-left-0"
                                            name="pass_confirm" placeholder="Password" autocomplete="off">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"><?=lang('Auth.register')?></button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="/login" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 register-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy;
                            2020 All rights reserved.</p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="<?= base_url(); ?>/assets/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?= base_url(); ?>/assets/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>