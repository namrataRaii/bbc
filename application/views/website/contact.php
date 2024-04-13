<?php include 'header.php'; ?>
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Contact Us
                </h1>
                <p class="text-white link-nav"><a href="index">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="contact"> Contact Us</a></p>
            </div>
        </div>
    </div>
</section>




<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.781605982291!2d80.98850101137326!3d26.783230676627518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be519ee563bed%3A0x21d53eaf776d1d96!2sSkyline%20Plaza%201!5e0!3m2!1sen!2sin!4v1690804257051!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icons">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5>Lucknow, Uttar Pradesh, India</h5>
                        <p>13th floor, 1304, Skyline Plaza 1, Sushant Golf City, Lucknow,
                            Uttar Pradesh, 226030 </p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icons">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5>+91 70078 08908 </h5>
                        <p>Mon to Fri ( 9 am to 6 pm )</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icons">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5>contact@beingbillionaireconsultancy.com</h5>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="form-area " method="post" id="contact-form" class="contact-form text-right">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <div class="mb-20">
                                <input name="name" id="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input  form-control" type="text">
                                <span class="text-danger " id="error_name"> </span>
                            </div>
                            <div class="mb-20">
                                <input name="email" id="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input  form-control" type="email">
                                <span class="text-danger" id="error_email"> </span>
                            </div>
                            <div class="mb-20">
                                <input name="subject" id="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input  form-control" type="text">
                                <span class="text-danger" id="error_subject"> </span>
                            </div>
                            <div class="mt-20 alert-msg" style="text-align: left;"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="comments" id="comments" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'"></textarea>
                            <span class="text-danger" id="error_comments"> </span>
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-left: 70%;display:none;" id="messageshow">
                                <strong></strong>Contact submitted successfully
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-left: 70%;display:none;" id="messageshows">
                                <strong></strong>Contact not submitted 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <button class="primary-btn mt-20 text-white" style="float: right;" onclick="save_data(event)">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    function save_data(event) {
        event.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var comments = $("#comments").val();
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        // check name
        if (name == '') {
            $("#error_name").html("Please Enter Your name");
        } else {
            $("#error_name").html("");
        }
        // check email
        if (email == '') {
            $("#error_email").html("Please Enter Your Email");
        } else if (!pattern.test(email)) {
            $("#error_email").html("Please Enter Valid Email");
        } else {
            $("#error_email").html("");
        }
        // check Mobile Number
        if (subject == '') {
            $("#error_subject").html("Please Enter Subject");
        }
        if (comments == '') {
            $("#error_comments").html("Please Enter Message");
        } else {

            $("#error_comments").html("");
            $("#error_subject").html("");
            $("#error_email").html("");
            $("#error_name").html("");
            $.ajax({
                method: "POST",
                url: "<?= base_url('BbcWebsite/sendmail') ?>",
                data: {
                    name: name,
                    email: email,
                    subject: subject,
                    comments: comments
                },
                success: function(data) {
                    console.log(data);
                    if (data == '1') {
                        // alert(data);
                        $("#messageshow").css("display", "block");
                        setTimeout(function() {
                            $("#messageshow").css("display", "none");
                        }, 5000);

                    } else {
                        $("#messageshows").css("display", "block");
                        setTimeout(function() {
                            $("#messageshows").css("display", "none");
                        }, 5000);
                    }
                    $("#name").val('');
                    $("#email").val('');
                    $("#subject").val('');
                    $("#comments").val('');
                    $("#error_comments").html("");
                    $("#error_subject").html("");
                    $("#error_email").html("");
                    $("#error_name").html("");
                }
            });
        }
    }
</script>
<?php include 'footer.php'; ?>