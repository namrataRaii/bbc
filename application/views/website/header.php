<?php 
  
 $first_part = $this->uri->segment('1');

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= base_url('websiteassets') ?>/img/fav">
    <meta name="author" content="codepixer">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <title>Being Billionaire Consultancy Services Pvt. Ltd.</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('websiteassets') ?>/css/linearicons.css">
    <link rel="stylesheet" href="<?= base_url('websiteassets') ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('websiteassets') ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('websiteassets') ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('websiteassets') ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('websiteassets') ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('websiteassets') ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('websiteassets') ?>/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<style>
		.d-block {
    display: block; /* Hide submenu by default */
}
.d-none
{
	display:none;
}
	</style>
</head>

<body>
    <header id="header">
        <div class="container">
            <div class="row header-top align-items-center">
            <div class="col-lg-3 menu-top-middle justify-content-center d-flex">
                    <a href="<?= base_url('index') ?>">
                        <img class="img-fluid logo" src="<?= base_url('websiteassets') ?>/img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-4 menu-top-left">
                    <div class="top-icon d-flex aligns-self-center">
                        <div class="icon aligns-self-center">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <!-- <img src="<?= base_url('websiteassets') ?>/img/placeholder.png" class="img-fluid "> -->
                        <div class="top-text ">
                            <p class="f-bold">Office Address</p>
                            <p>13th floor, 1304, Skyline Plaza 1, Sushant Golf City,<br /> Lucknow, Uttar Pradesh,
                                226030</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-5 col-sm-5 d-flex justify-content-between">
                    <div class="top-icon d-flex">
                        <div class="icon">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <div class="top-text">
                            <p class="f-bold">Phone Number</p>
                            <p>+91 70078 08908 </p>
                        </div>
                    </div>
                    <div class="top-icon d-flex">
                        <div class="icon">
                            <i class="fa fa-envelope-open-text"></i>
                        </div>
                        <div class="top-text">
                            <p class="f-bold">Email Address</p>
                            <p>contact@beingbillionaireconsultancy.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row align-items-center justify-content-center d-flex">
            <nav id="nav-menu-container">
    <ul class="nav-menu sf-arrows">
        <li class="<?php echo ($first_part == 'index') ? 'menu-active' : ''; ?>">
            <a href="<?= base_url('index') ?>">Home</a>
        </li>
        <li class="menu-has-children <?php echo ($first_part == 'about' || $first_part == 'founder') ? 'menu-active' : ''; ?>">
            <a href="#" class="sf-with-ul" onclick="toggleSubMenu()">About</a>
            <ul class="drop d-none">
                <li class="<?php echo ($first_part == 'about') ? 'menu-active' : ''; ?>"><a href="<?= base_url('about') ?>">Our Company</a></li>
                <li class="<?php echo ($first_part == 'founder') ? 'menu-active' : ''; ?>"><a href="<?= base_url('founder') ?>">Our Founder</a></li>
            </ul>
        </li>
        <li class="<?php echo ($first_part == 'services') ? 'menu-active' : ''; ?>">
            <a href="<?= base_url('services') ?>">Services</a>
        </li>
        <li class="<?php echo ($first_part == 'blogs') ? 'menu-active' : ''; ?>">
            <a href="<?= base_url('blogs') ?>">Blogs</a>
        </li>
        <li class="<?php echo ($first_part == 'career') ? 'menu-active' : ''; ?>">
            <a href="<?= base_url('career') ?>">Careers</a>
        </li>
        <li class="<?php echo ($first_part == 'contact') ? 'menu-active' : ''; ?>">
            <a href="<?= base_url('contact') ?>">Contact</a>
        </li>
    </ul>
</nav>

            </div>
        </div>
    </header>