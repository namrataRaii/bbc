<?php include 'header.php';?>
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Blogs
                </h1>
                <p class="text-white link-nav"><a href="index">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="blog-home"> Blogs</a></p>
            </div>
        </div>
    </div>
</section>


<section class="blog-posts-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 post-list blog-post-list">
                <div class="row">
                    <?php foreach($blogdata as $blog){
                        
                            // Convert the uploaded_date string to a DateTime object
                            $uploaded_date = new DateTime($blog->uploaded_date);
                            
                            // Format the date in the desired format
                            $formatted_date = $uploaded_date->format('j F, Y');
                            
                            // Assign the formatted date to the object
                            $blog->formatted_date = $formatted_date;
                        
                        ?>
                    <div class="col-md-6">
                        <div class="single-post">
                            <img class="img-fluid d-block m-auto" src="<?= base_url('uploads/'.$blog->gallery_thumbnail)?>" style="height:300px;" alt="">
                            <ul class="tags">
                                <li><a href="#">  <?php echo $blog->formatted_date;?> </a></li>
                              
                            </ul>
                            <a href="https://www.linkedin.com/pulse/journey-become-entreprenuer-chapter-1-start-side-hustling-kumar/?trackingId=5kmVmL3fR%2B29ky7fbctcOw%3D%3D" target="_blank">
                                <h1>
                                    <?php echo $blog->gallery_title;?>
                                </h1>
                            </a>
                            <p> <?php echo $blog->gallery_description;?></p>

                        </div>
                    </div>
                    <?php }?>
                
                </div>

            </div>

        </div>
</section>
<?php include 'footer.php';?>