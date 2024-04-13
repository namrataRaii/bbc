<?php include 'header.php';?>

<div class="home-banner">
  <video muted loop autoplay>
    <source src="<?= base_url('websiteassets') ?>/img/video.mp4" type="video/mp4">
  </video>
  <div class="banner-content">
    <h6 class="text-yellow">Chase Your Billionaire Dreams with Us </h6>
    <h1 class="text-yellow">Let's Ignite Your Journey <br> Together NOW!</h1>
    <a href="contact" class="genric-btn circle">Book Consultancy</a>
  </div>
</div>
</section>


<section class="calltotop-area">
  <div class="container-fluid">
    <div class="callto-section">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-12 call-left no-padding">
          <div class="news blue d-flex">
            <span class="mw-110">Latest News</span><span class="text1">
              <marquee onmouseover="this.stop();" onmouseout="this.start();">
                <?php foreach ($newsdata as $news) { ?>
                  <a href="" class="text-white"><i class="fa fa-circle fs-1"></i> <?php echo $news->news_description; ?></a> &emsp;&emsp;
                <?php } ?>
              </marquee>
            </span>
            <!-- || <a href="" class="text-white"></a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-top-area section-gap">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6 about-top-left">
        <p class="about-section">Welcome to</p>
        <h1 class="text-red">
          Being Billionaire <br>Consultancy Services
        </h1>
        <p>
          At Being Billionaire, we believe that every individual and organization possesses the
          potential to achieve greatness and make a significant impact on the world. Our company is
          dedicated to providing comprehensive and transformative education, training, guidance,
          consultancy, and advisory services to help our clients reach the pinnacle of success as
          aspiring billionaires.
        </p>
        <a class="genric-btn danger f-bold" href="about-us">Read More</a>
      </div>
      <div class="col-lg-6 about-top-right">
        <img class="img-fluid" src="<?= base_url('websiteassets') ?>/img/pages/about.jpg" alt="">
      </div>
    </div>
  </div>
</section>

<section class="top-course-area section-gap">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-60 col-lg-9">
        <div class="title text-center">
          <h1 class="mb-10">Our Services</h1>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="active-offered-carusel">
        <div class="single-top-course item">
          <div class="thumbs relative">
            <div class="overlay overlay-bg"></div>
            <img class="img-fluid" src="<?= base_url('websiteassets') ?>/img/pages/business.jpg" alt="">
          </div>
          <div class="details">
            <div class="title justify-content-between d-flex">
              <a href="business-and-startup-services">
                <h4 class="price">Business & Startup Services</h4>
              </a>
            </div>
            <p>
              Starting and running a business or startup involves a multitude of intricate processes and legalities.
            </p>
          </div>
        </div>

        <div class="single-top-course item">
          <div class="thumbs relative">
            <div class="overlay overlay-bg"></div>
            <img class="img-fluid" src="<?= base_url('websiteassets') ?>/img/pages/tax.jpg" alt="">
          </div>
          <div class="details">
            <div class="title justify-content-between d-flex">
              <a href="taxation-Investment-services">
                <h4 class="price">Taxation & Investment Services</h4>
              </a>
            </div>
            <p>
              In the intricate tapestry of business and personal finance, the nuances of taxation and investment...
            </p>
          </div>
        </div>

        <div class="single-top-course item">
          <div class="thumbs relative">
            <div class="overlay overlay-bg"></div>
            <img class="img-fluid" src="<?= base_url('websiteassets') ?>/img/pages/cont.jpg" alt="">
          </div>
          <div class="details">
            <div class="title justify-content-between d-flex">
              <a href="content-services">
                <h4 class="price">Content Services</h4>
              </a>
            </div>
            <p>
              In a world where communication is paramount and it knows no bounds, the power of words is immeasurable...
            </p>
          </div>
        </div>


        <div class="single-top-course item">
          <div class="thumbs relative">
            <div class="overlay overlay-bg"></div>
            <img class="img-fluid" src="<?= base_url('websiteassets') ?>/img/pages/it.jpg" alt="">
          </div>
          <div class="details">
            <div class="title justify-content-between d-flex">
              <a href="it-and-ites-services">
                <h4 class="price">IT & ITES Services</h4>
              </a>

            </div>
            <p>
              In the rapidly evolving digital landscape, businesses need to harness the power of technology to stay...
            </p>
          </div>
        </div>

        <div class="single-top-course item">
          <div class="thumbs relative">
            <div class="overlay overlay-bg"></div>
            <img class="img-fluid" src="<?= base_url('websiteassets') ?>/img/pages/dm.jpg" alt="">
          </div>
          <div class="details">
            <div class="title justify-content-between d-flex">
              <a href="digital-marketing-services">
                <h4 class="price">Digital Marketing Services</h4>
              </a>
            </div>
            <p>
              In today's fast-evolving business landscape, a strong digital presence is no longer an option; it's a necessity...
            </p>
          </div>
        </div>

        <div class="single-top-course item">
          <div class="thumbs relative">
            <div class="overlay overlay-bg"></div>
            <img class="img-fluid" src="<?= base_url('websiteassets') ?>/img/pages/rt.jpg" alt="">
          </div>
          <div class="details">
            <div class="title justify-content-between d-flex">
              <a href="recruitment-and-training-services">
                <h4 class="price">Recruitment & Training Services</h4>
              </a>
            </div>
            <p>
              In the dynamic world of business, finding the right talent is not just a task; it's an art. At Being Billionaire...
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php';?>