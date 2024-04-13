<?php include 'login-header.php';?>
<body class="auth-body-bg">
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                        <div class="w-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div>
                                        <div class="text-center">
                                            <div>
                                                <a href="#" class="">
                                                    <img src="<?= base_url('assets/images/logo.png') ?>" alt=""
                                                        height="40" class="auth-logo logo-dark mx-auto">
                                                    <img src="<?= base_url('assets/images/logo.png') ?>" alt=""
                                                        height="40" class="auth-logo logo-light mx-auto">
                                                </a>
                                            </div>

                                            <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                            <p class="text-muted">Admin Login</p>
                                        </div>

                                        <div class="p-2 mt-5">
                                            <?= form_open('Auth/Authentication/Login', ['id' => 'loginForm']) ?>

                                            <div class="mb-3 auth-form-group-custom mb-4">
                                                <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                <label for="username" class="fw-semibold">Username</label>
                                                <input type="email" class="form-control" name="username" id="username"
                                                    placeholder="Enter username">
                                            </div>

                                            <div class="mb-3 auth-form-group-custom mb-4">
                                                <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                <label for="userpassword">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    id="userpassword" placeholder="Enter password">
                                            </div>

                                            <!-- <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="customControlInline">
                                                <label class="form-check-label" for="customControlInline">Remember
                                                    me</label>
                                            </div> -->

                                            <div class="mt-4 text-center">
                                                <button class="btn btn-primary w-md waves-effect waves-light"
                                                    type="submit" id="loginBtn"> Log In <i class="fa fa-spin fa-spinner"
                                                        id="loginSpin" style="display:none;"></i></button>
                                            </div>

                                            <!-- <div class="mt-4 text-center">
                                                <a href="auth-recoverpw.html" class="text-muted"><i
                                                        class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                            </div> -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="authentication-bg">
                        <div class="bg-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'login-footer.php';?>