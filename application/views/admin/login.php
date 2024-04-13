<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('website_assets') ?>/img/l-&-d/favicon.png">



    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('assets') ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('assets') ?>/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css" integrity="sha512-PlmS4kms+fh6ewjUlXryYw0t4gfyUBrab9UB0vqOojV26QKvUT9FqBJTRReoIZ7fO8p0W/U9WFSI4MAdI1Zm+A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .notifyjs-corner {
            position: center !important;
            right: none;
        }

        .authentication-bg {
            background-image: url('<?= base_url('assets/bg/') ?>/images/authentication-bg.jpg');
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        .authentication-bg .bg-overlay {
            background-color: #292626;
        }
    </style>
</head>

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
                                                    <img src="<?= base_url('website_assets') ?>/img/l-&-d/logo.png" alt="" height="20" class="auth-logo logo-dark mx-auto">
                                                    <img src="<?= base_url('website_assets') ?>/img/l-&-d/logo.png" alt="" height="20" class="auth-logo logo-light mx-auto">
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
                                                <input type="email" class="form-control" name="username" id="username" placeholder="Enter username">
                                            </div>

                                            <div class="mb-3 auth-form-group-custom mb-4">
                                                <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                <label for="userpassword">Password</label>
                                                <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customControlInline">
                                                <label class="form-check-label" for="customControlInline">Remember
                                                    me</label>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit" id="loginBtn"> Log In <i class="fa fa-spin fa-spinner" id="loginSpin" style="display:none;"></i></button>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                            </div>
                                            </form>
                                        </div>

                                        <!-- <div class="mt-5 text-center">
                                            <p>Don't have an account ? <a href="auth-register.html"
                                                    class="fw-medium text-primary"> Register </a> </p>
                                            <p>©
                                                <script>document.write(new Date().getFullYear())</script> Nazox. Crafted
                                                with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                            </p>
                                        </div> -->
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



    <!-- JAVASCRIPT -->
    <script src="<?= base_url('assets') ?>/libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets') ?>/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets') ?>/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url('assets') ?>/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url('assets') ?>/libs/node-waves/waves.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url('assets') ?>/js/app.js"></script>
    <script>
        function appendsidebar() {
            $("body").addClass('sidebar-enable vertical-collpsed');
            // $("body").removeClass('sidebar-enable vertical-collpsed');
        }
        //Login
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();
            var data = new FormData(this);
            $.ajax({
                type: 'POST',
                url: $('#loginForm').attr('action'),
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $("#loginBtn").attr("disabled", true);
                    $('#loginSpin').show();
                },
                success: function(response) {
                    console.log(response);

                    var response = JSON.parse(response);
                    $("#loginBtn").removeAttr("disabled");
                    $('#loginSpin').hide();
                    if (response[0].res == 'success') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("" + response[0].msg + "", "success");
                        if (response[0].redirect) {
                            window.setTimeout(function() {
                                window.location.href = response[0].redirect;
                            }, 800);
                        }

                    } else if (response[0].res == 'error') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("" + response[0].msg + "", "error");
                    }
                },
                error: function() {
                    window.location.reload();
                }
            });
        });
    </script>
</body>

</html>