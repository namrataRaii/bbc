<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Losss Damage | Registration<?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Loss Damage" name="description" />
    <meta content="Loss Damage" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets') ?>/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets') ?>/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('assets') ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('assets') ?>/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css" integrity="sha512-PlmS4kms+fh6ewjUlXryYw0t4gfyUBrab9UB0vqOojV26QKvUT9FqBJTRReoIZ7fO8p0W/U9WFSI4MAdI1Zm+A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .auth-body-bg {
            background-color: $card-bg;
        }

        .authentication-bg {
            background-image: url("<?= base_url('assets') ?>/images/authentication-bg.jpg");
            height: 100vh;
            background-size: cover;
            background-position: center;

            .bg-overlay {
                background-color: azure;
            }

            @media (max-width: 991px) {
                display: none;
            }
        }

        .authentication-page-content {
            height: 100vh;
            display: flex;
        }

        .auth-form-group-custom {
            position: relative;

            .form-control {
                height: 60px;
                padding-top: 28px;
                padding-left: 60px;
            }

            label {
                position: absolute;
                top: 7px;
                left: 60px;
            }

            .auti-custom-input-icon {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                left: 19px;
                font-size: 24px;
                color: $primary;
            }
        }



        .auth-logo {
            &.logo-light {
                display: $display-none;
            }

            &.logo-dark {
                display: $display-block;
            }
        }
        input#pwd {
        /* width: 180px; */
        /* padding: 10px;
        color: #000;
        float: left;
        margin-right: 10px; */
    }

    #pwd_strength_wrap {
        border: 1px solid #D5CEC8;
        display: none;
        float: left;
        padding: 10px;
        position: relative;
        width: 320px;
        margin-left: 20px;
        opacity: 5;
       
    }

    #pwd_strength_wrap:before,
    #pwd_strength_wrap:after {
        content: ' ';
        height: 0;
        position: absolute;
        width: 0;
        border: 10px solid transparent;
        /* arrow size */
    }

    #pwd_strength_wrap:before {
        border-bottom: 7px solid rgba(0, 0, 0, 0);
        border-right: 7px solid rgba(0, 0, 0, 0.1);
        border-top: 7px solid rgba(0, 0, 0, 0);
        content: "";
        display: inline-block;
        left: -18px;
        position: absolute;
        top: 10px;
    }

    #pwd_strength_wrap:after {
        border-bottom: 6px solid rgba(0, 0, 0, 0);
        border-right: 6px solid #fff;
        border-top: 6px solid rgba(0, 0, 0, 0);
        content: "";
        display: inline-block;
        left: -16px;
        position: absolute;
        top: 11px;
        
    }

    #pswd_info ul {
        list-style-type: none;
        margin: 5px 0 0;
        padding: 0;
    }

    #pswd_info ul li {
        background: url(icon_pwd_strength.png) no-repeat left 2px;
        padding: 0 0 0 20px;
    }

    #pswd_info ul li.valid {
        background-position: left -42px;
        color: green;
    }

    #passwordStrength {
        display: block;
        height: 5px;
        margin-bottom: 10px;
        transition: all 0.4s ease;
    }

    .strength0 {
        background: none;
        /* too short */
        width: 0px;
    }

    .strength1 {
        background: none repeat scroll 0 0 #FF4545;
        /* weak */
        width: 25px;
    }

    .strength2 {
        background: none repeat scroll 0 0 #FFC824;
        /* good */
        width: 75px;
    }

    .strength3 {
        background: none repeat scroll 0 0 #6699CC;
        /* strong */
        width: 100px;
    }

    .strength4 {
        background: none repeat scroll 0 0 #008000;
        /* best */
        width: 150px;
    }
    </style>
</head>

<body class="auth-body-bg">
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-5">
                    <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                        <div class="w-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div>
                                        <div class="text-center">
                                            <div>
                                                <a href="index.html" class="">
                                                    <img src="<?= base_url('assets') ?>/images/logo-dark.png" alt=""
                                                        height="20" class="auth-logo logo-dark mx-auto">
                                                    <img src="<?= base_url('assets') ?>/images/logo-light.png" alt=""
                                                        height="20" class="auth-logo logo-light mx-auto">
                                                </a>
                                            </div>

                                            <h4 class="font-size-18 mt-4">Register account</h4>
                                            <p class="text-muted">Get your free Loss Damage account now.</p>
                                        </div>

                                        <div class="p-2 mt-5" id="form_1">
                                        <?=form_open('Auth/registration',['id'=>'addForm'])?>
                                                
                                                <div class="auth-form-group-custom mb-4">
                                                    <i class="ri-user-line auti-custom-input-icon"></i>
                                                    <label for="useremail">Full Name</label>
                                                    <input type="text" class="form-control" name="name" id="useremail"
                                                        placeholder="Enter Full Name">
                                                </div>
                                                 <div class="auth-form-group-custom mb-4">
                                                    <i class="ri-mail-line auti-custom-input-icon"></i>
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Enter Email">
                                                </div>

                                                <div class="auth-form-group-custom mb-4">
                                                    <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" name="password" id="pwd"
                                                        placeholder="Enter Password">
                                                <div id="pwd_strength_wrap">
                                                <div id="passwordDescription">Password not entered</div>
                                                <div id="passwordStrength" class="strength0"></div>
                                                <div id="pswd_info">
                                                    <strong>Strong Password Tips:</strong>
                                                    <ul>
                                                        <li class="invalid" id="length">At least 6 characters</li>
                                                        <li class="invalid" id="pnum">At least one number</li>
                                                        <li class="invalid" id="capital">At least one lowercase &amp; one uppercase letter</li>
                                                        <li class="invalid" id="spchar">At least one special character</li>
                                                    </ul>
                                                </div><!-- END pswd_info -->
                                            </div>
                                                </div>
                                                <!-- <label for="Captcha">Captcha</label>  -->
                                                <div class="auth-form-group-custom mb-4">
                                                    <!-- <label for="Captcha">Captcha</label> -->
                                                    <!-- <input type="password" class="form-control password" name="confirm_password" id="checkPassword" onkeyup='check()'
                                                        placeholder="Enter confirm password">
                                                        <p id="alertPassword"></p> -->
                                                        <div class="g-recaptcha"
                                                data-sitekey="6LcZYWYeAAAAAFFzV_pFdZBksDadFNggfpxTZMfS"></div>
                                                </div>


                                                <div class="text-center">
                                                <button class="btn btn-primary w-xl waves-effect waves-light" type="submit"
                                        id="addBtn" >Submit <i class="fa fa-spin fa-spinner" id="addSpin"
                                            style="display:none;"></i></button>
                                                </div>

                                                
                                            </form>
                                            <div class="mt-4 text-center">
                                                    <p class="mb-0">Alredy have an account? &nbsp;<a href="<?=base_url('admin')?>"
                                                            class="text-primary">Login</a></p>
                                                </div>
                                        </div>
                                        <div class="p-2 mt-5 d-none" id="form_2">
                                            <?=form_open('Auth/OTPValidation',['id'=>'otpForm'])?>
                                            <div class="auth-form-group-custom mb-4" id="otpVerify">
                                                    <i class="ri-mail-line auti-custom-input-icon"></i>
                                                    <label for="OTP">Verify OTP</label>
                                                    <input type="text" class="form-control" name="otp" id="otp"
                                                        placeholder="Enter OTP" required> 
                                                    <input type="hidden" name="userid" id="userid">
                                                </div>

                                                <button class="btn btn-primary w-xl waves-effect waves-light" type="submit"
                                        id="Btn" >Verify <i class="fa fa-spin fa-spinner" id="Spin"
                                            style="display:none;"></i></button>  
                                            <?=form_close();?> 
                                        </div>

                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="authentication-bg position-relative">
                        <div class="bg-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- JAVASCRIPT -->
    <script src="<?= base_url('assets') ?>/libs/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url('assets') ?>/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets') ?>/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url('assets') ?>/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url('assets') ?>/libs/node-waves/waves.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url('assets') ?>/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#addForm').on('submit', function(e) {
        var formAction = $(this);
        var btnAction = $('#addBtn');
        var spinAction = $('#addSpin');
        e.preventDefault(); 
        var data = new FormData(this);
        if ($(formAction).parsley().isValid() == true) {
            $.ajax({
                type: 'POST',
                url: $(formAction).attr('action'),
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $(btnAction).attr("disabled", true);
                    $(spinAction).show();
				},
                success: function(response) {
                    console.log(response);
                    var response = JSON.parse(response);
                    $(btnAction).removeAttr("disabled");
                    $(spinAction).hide();
                    if (response[0].res == 'success') {
                        $('.notifyjs-wrapper').remove(); 
                        $('.toast').remove();
                        // $.notify("" + response[0].msg + "", "success");

                        // if(response[0].verifyotp == 'true'){
                        //     $("#form_1").addClass('d-none');
                        //     $("#form_2").removeClass('d-none');
                        //     $("#form_2").addClass('d-block');
                        //     $("#userid").val(response[0].userid);
                        // }
                        Command: toastr["success"](response[0].msg)
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "preventOpenDuplicates": true,
                        "onclick": null,
                        "showDuration": 300,
                        "hideDuration": 1000,
                        "timeOut": 5000,
                        "extendedTimeOut": 1000,
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                        window.setTimeout(function() {
                            window.location.reload();
						}, 1500);
                        if (response[0].redirect) {
                            window.setTimeout(function() {
                                window.location.href = response[0].redirect;
							}, 1000);
							} else {
                            window.setTimeout(function() {
                                window.location.reload();
							}, 1000);
						}
						} else if (response[0].res == 'error') {
                        // $('.notifyjs-wrapper').remove();
                        // $.notify("" + response[0].msg + "", "error");
                        $('.toast').remove();
                        Command: toastr["error"](response[0].msg)
					}
				}, 
                error: function() {
                    window.location.reload();
				}
			});
		}
	});
    </script>
    <script>
window.onload = function() {
  var recaptcha = document.forms["addForm"]["g-recaptcha-response"];
  recaptcha.required = true;
  recaptcha.oninvalid = function(e) {
    // do something
    alert("Please complete the captcha");
  }
}
</script>
    <script>
	//Login
	$('#otpForm').on('submit', function(e) {
		e.preventDefault();
		var data = new FormData(this); 
		$.ajax({  
			type: 'POST',
			url: $('#otpForm').attr('action'),
			data: data,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend: function() {
				$("#Btn").attr("disabled", true);
				$('#Spin').show();
			},
			success: function(response) {
				console.log(response);
				
				var response = JSON.parse(response);
				$("#Btn").removeAttr("disabled");
				$('#Spin').hide();
				if (response[0].res == 'success') {
					$('.notifyjs-wrapper').remove();
					$.notify("" + response[0].msg + "", "success");
					if(response[0].redirect){
						// window.setTimeout(function() {
						// 	window.location.href = response[0].redirect;
						// }, 800);
					}
					 
				}
				else if (response[0].res == 'error') {
					$('.notifyjs-wrapper').remove();
					$.notify("" + response[0].msg + "", "error");
				}
			}, 
			error: function() {
				// window.location.reload();
			} 
		});
	}); 
</script>
<script>
    var check = function() {
        if (document.getElementById('pwd').value ==
            document.getElementById('checkPassword').value) {
            document.getElementById('alertPassword').style.color = '#8CC63E';
            document.getElementById('alertPassword').innerHTML = '<span><i class="fas fa-check-circle"></i>Matched !</span>';
            $("#addBtn").removeAttr('disabled', 'true');
        } else {
            document.getElementById('alertPassword').style.color = '#EE2B39';
            document.getElementById('alertPassword').innerHTML = '<span><i class="fas fa-exclamation-triangle"></i>Oops! Password did not match</span>';
            $("#addBtn").attr('disabled', 'true');
        }
    }
    //https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js
    $("input#pwd").on("focus keyup", function() {

    });

    $("input#pwd").blur(function() {

    });
    $("input#pwd").on("focus keyup", function() {
        var score = 0;
        var a = $(this).val();
        var desc = new Array();

        // strength desc
        desc[0] = "Too short";
        desc[1] = "Weak";
        desc[2] = "Good";
        desc[3] = "Strong";
        desc[4] = "Best";

    });

    $("input#pwd").blur(function() {

    });
    $("input#pwd").on("focus keyup", function() {
        var score = 0;
        var a = $(this).val();
        var desc = new Array();

        // strength desc
        desc[0] = "Too short";
        desc[1] = "Weak";
        desc[2] = "Good";
        desc[3] = "Strong";
        desc[4] = "Best";

        // password length
        if (a.length >= 6) {
            $("#length").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#length").removeClass("valid").addClass("invalid");
        }

        // at least 1 digit in password
        if (a.match(/\d/)) {
            $("#pnum").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#pnum").removeClass("valid").addClass("invalid");
        }

        // at least 1 capital & lower letter in password
        if (a.match(/[A-Z]/) && a.match(/[a-z]/)) {
            $("#capital").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#capital").removeClass("valid").addClass("invalid");
        }

        // at least 1 special character in password {
        if (a.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) {
            $("#spchar").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#spchar").removeClass("valid").addClass("invalid");
        }


        if (a.length > 0) {
            //show strength text
            $("#passwordDescription").text(desc[score]);
            // show indicator
            $("#passwordStrength").removeClass().addClass("strength" + score);
        } else {
            $("#passwordDescription").text("Password not entered");
            $("#passwordStrength").removeClass().addClass("strength" + score);
        }
    });

    $("input#pwd").blur(function() {

    });
    $("input#pwd").on("focus keyup", function() {
        var score = 0;
        var a = $(this).val();
        var desc = new Array();

        // strength desc
        desc[0] = "Too short";
        desc[1] = "Weak";
        desc[2] = "Good";
        desc[3] = "Strong";
        desc[4] = "Best";

        $("#pwd_strength_wrap").fadeIn(400);

        // password length
        if (a.length >= 6) {
            $("#length").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#length").removeClass("valid").addClass("invalid");
        }

        // at least 1 digit in password
        if (a.match(/\d/)) {
            $("#pnum").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#pnum").removeClass("valid").addClass("invalid");
        }

        // at least 1 capital & lower letter in password
        if (a.match(/[A-Z]/) && a.match(/[a-z]/)) {
            $("#capital").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#capital").removeClass("valid").addClass("invalid");
        }

        // at least 1 special character in password {
        if (a.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) {
            $("#spchar").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#spchar").removeClass("valid").addClass("invalid");
        }


        if (a.length > 0) {
            //show strength text
            $("#passwordDescription").text(desc[score]);
            // show indicator
            $("#passwordStrength").removeClass().addClass("strength" + score);
        } else {
            $("#passwordDescription").text("Password not entered");
            $("#passwordStrength").removeClass().addClass("strength" + score);
        }
    });

    $("input#pwd").blur(function() {
        $("#pwd_strength_wrap").fadeOut(400);
    });
</script>
</body>
 
</html>
