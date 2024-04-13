<?php include 'header.php';?>
 <section class="banner-area relative" id="home">
     <div class="overlay overlay-bg"></div>
     <div class="container">
         <div class="row d-flex align-items-center justify-content-center">
             <div class="about-content col-lg-12">
                 <h1 class="text-white">
                     Careers
                 </h1>
                 <p class="text-white link-nav"><a href="index">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="about"> Careers</a></p>
             </div>
         </div>
     </div>
 </section>

 <section class="section-gap">
     <div class="container">
     <?php if (empty($careerdata)) { ?>
         <div class="row d-flex justify-content-center">
             <div class="menu-content pb-60 col-lg-9">
                 <div class="title text-center">
                         <h1 class="mb-10">No Vacancy as of now!</h1>
                     
                 </div>
             </div>
         </div>
         <?php } else{ ?>

         <div class="row justify-content-center">
            <?php foreach($careerdata as $career){?>
             <div class="col-lg-6">
                 <div class="career mb-30">
                     <div class="row justify-content-between align-items-center">
                         <div class="col-lg-6">
                             <div class="career-info d-flex align-items-center mb-30">
                                 <i class="fas fa-suitcase"></i>
                                 <h4><?= $career->job_designation?></h4>
                             </div>
                             <div class="career-desc d-flex">
                                 <p><?= $career->job_duration?></p>
                                 <p><?= $career->job_experience?></p>

                             </div>
                         </div>
                         <div class="col-lg-4 text-right">
                             <div class="career-apply text-center job-mobile-view">
                                 <p><?= $career->job_location?></p>
                                 <a href="<?= base_url('profile') ?>" class="genric-btn danger-border radius">Apply Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
<?php }?>
             <!-- <div class="col-lg-6">
                 <div class="career mb-30">
                     <div class="row justify-content-between align-items-center">
                         <div class="col-lg-6">
                             <div class="career-info d-flex align-items-center mb-30">
                                 <i class="fas fa-suitcase"></i>
                                 <h4>Full Stack Developer</h4>
                             </div>
                             <div class="career-desc d-flex">
                                 <p>Full Time</p>
                                 <p>3+ Experience</p>

                             </div>
                         </div>
                         <div class="col-lg-4 text-right">
                             <div class="career-apply text-center job-mobile-view">
                                 <p>Lucknow</p>
                                 <a href="profile" class="genric-btn danger-border radius">Apply Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div> -->


         </div>
         <?php } ?>
     </div>
     </div>
 </section>
 <?php include 'footer.php';?>