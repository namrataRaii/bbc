<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">

                <?php


                function generateProfileImage($email)
                {
                    // Create a blank image with a white background
                    $image = imagecreatetruecolor(100, 100);
                    $background_color = imagecolorallocate($image, 255, 255, 255);
                    imagefill($image, 0, 0, $background_color);

                    // Define the text color (you can customize this)
                    $text_color = imagecolorallocate($image, 0, 0, 0);

                    // Extract the first letter of the email
                    $email = strtolower($email);
                    $emailParts = explode('@', $email);
                    $first_letter = $emailParts[0][0];

                    // Calculate the position to center the text
                    $text_x = 40;
                    $text_y = 60;

                    // Add the first letter of the email to the image
                    imagestring($image, 5, $text_x, $text_y, $first_letter, $text_color);

                    // Set the content type header
                    header('Content-type: image/png');

                    // Output the image
                    imagepng($image);

                    // Clean up resources
                    imagedestroy($image);
                }
                // generateProfileImage('ubaid@gmail.com');
                ?>
                <script>
                    document.write(new Date().getFullYear())
                </script> © Being Billionaier Consultancy..
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Crafted with <i class="mdi mdi-heart text-danger"></i> by BFC Softtech
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->


<!-- Right bar overlay-->
<!-- <div class="rightbar-overlay"></div> -->

<!-- JAVASCRIPT -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.14.1/jquery.timepicker.min.css" integrity="sha512-WlaNl0+Upj44uL9cq9cgIWSobsjEOD1H7GK1Ny1gmwl43sO0QAUxVpvX2x+5iQz/C60J3+bM7V07aC/CNWt/Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="<?= base_url('assets') ?>/libs/jquery/jquery.min.js"></script>

<script src="<?= base_url('assets') ?>/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/metismenu/metisMenu.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/simplebar/simplebar.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/node-waves/waves.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- apexcharts -->
<script src="<?= base_url('assets') ?>/libs/apexcharts/apexcharts.min.js"></script>

<!-- jquery.vectormap map -->
<script src="<?= base_url('assets') ?>/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

<!-- Required datatable js -->
<script src="<?= base_url('assets') ?>/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="<?= base_url('assets') ?>/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script src="<?= base_url('assets') ?>/js/pages/dashboard.init.js"></script>
<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url('assets') ?>/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= base_url('assets') ?>/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<script src="<?= base_url('assets') ?>/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/datatables.net-select/js/dataTables.select.min.js"></script>

<!-- Responsive examples -->
<script src="<?= base_url('assets') ?>/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?= base_url('assets') ?>/js/pages/datatables.init.js"></script>
<!-- App js -->
<script src="<?= base_url('assets') ?>/js/app.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.6.1/toastify.min.css" integrity="sha512-UiKdzM5DL+I+2YFxK+7TDedVyVm7HMp/bN85NeWMJNYortoll+Nd6PU9ZDrZiaOsdarOyk9egQm6LOJZi36L2g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.6.1/toastify.min.js" integrity="sha512-79j1YQOJuI8mLseq9icSQKT6bLlLtWknKwj1OpJZMdPt2pFBry3vQTt+NZuJw7NSd1pHhZlu0s12Ngqfa371EA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<!-- Plugin -->
<script>
    $('input').keypress(function(e) {
        if (this.value.length === 0 && e.which === 32) e.preventDefault();
    });
    $('textarea').keypress(function(e) {
        if (this.value.length === 0 && e.which === 32) e.preventDefault();
    });
</script>

<div class="modal fade add-publication" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Publication</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?= form_open('Website/updateProfile/addPublication', ['id' => 'publicationForm']) ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <label for="">Thumbnail</label>
                        <input type="file" class="form-control dropify" data-height="100" name="publication_thumbnail">
                        <span style="font-size: small;font-weight:700;color:#1291CF !important" class="mb-3">Accepted
                            formats: JPG, JPEG, PNG (Upload Max Size 3MB)</span>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-sm-12">
                        <label for="">Title</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" id="" name="publication_title">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-sm-12">
                        <label for="">Co-Author</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" id="" name="publication_coauthor">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-sm-12">
                        <label for="">Type</label>
                        <select class="form-select" name="publication_type">
                            <option selected>Select Type</option>
                            <option value="Publication">Publication</option>
                            <option value="Blog">Blog</option>
                            <option value="Toolkit">Toolkit</option>
                        </select>
                    </div>
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <label for="">Language</label>
                            <select class="form-select" name="publication_language">
                                <option selected>Select Language</option>
                                <option value="Hindi">Hindi</option>
                                <option value="English">English</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <label for="">Focus Area (Category) </label> <span class="text-danger">*</span>
                            <select id="" class="form-select " name="publication_category" onchange="getSubCategory(this.value)" required>
                                <option value="not">Select Category</option>
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?= $category->id ?>">
                                        <?= $category->category_name; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <label for="">Sub-Category</label>
                            <select class="sub_category form-select" onchange="otherSpecifyPub(this.value)" name="publication_subcategory" required>
                                <option>Select Sub-Category</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-1" id="otherspublication">
                        <div class="col-sm-12">
                            <label for="">Others (Specify)</label>
                            <input type="text" class="form-control" id="publication_subcat" name="publication_subcat">
                        </div>
                    </div>
                    <!-- <div class="row mt-1">
                    <div class="col-sm-12">
                        <label for="">Keywords</label>
                        <input type="text" class="form-control" id="" name="publication_keywords[]"
                            data-role="tagsinput">
                        <div id="emailHelp" class="form-text">Enter multiple keywords separated by comma</div>
                    </div>
                </div> -->
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <label for="">Document</label>
                            <input type="file" class="form-control dropify" data-height="100" name="publication_document">

                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <label for="">ISBN</label>
                            <input type="text" class="form-control" id="" name="publication_isbn">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <label for="">Description</label>
                            <textarea class="form-control summernotee" name="publication_description" id=""></textarea>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <button class="mt-3 btn btn-primary w-100 p-2 form-btn" id="publicationBtn">Upload <i class="fa fa-spin fa-spinner" id="publicationSpin" style="display:none;"></i></button>
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.carousel').carousel();
            $('#otherspublication').css('display', 'none');
            $('.summernote').summernote({
                tabsize: 2,
                height: 100,
                toolbar: [
                    ['font', ['bold', 'italic', 'underline']],
                    ['para', ['ul', 'ol']],
                    ['insert', ['hr']],
                ],
            });
            $('.news').summernote({
                tabsize: 2,
                height: 250,
                toolbar: [
                    ['font', ['bold', 'italic', 'underline']],
                    ['para', ['ul', 'ol']],
                    ['insert', ['hr']],
                ],
            });


            // $(".note-editable").attr("contenteditable", "false");
        });

        function deleteUsers(userid) {
            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo base_url('Admin/deleteUser'); ?>",
                        type: "post",
                        data: {
                            'userid': userid,
                        },
                        success: function(r) {
                            if (r == "success") {

                                swal.fire({
                                    title: "Deleted",
                                    text: "Data Deleted Successfully.",
                                    type: "success",
                                });
                                setTimeout(function() {
                                    window.location.reload();
                                }, 1000);
                            } else {
                                swal.fire({
                                    title: "Error",
                                    text: "Data Not Deleted.",
                                    type: "error",
                                });
                            }

                        }
                    });
                } else {
                    swal.fire("Cancelled", "Data is safe.", "error");
                }
            })

            return false;
        }

        function fullViewOfevent(eventid) {
            var encodedId = eventid; // Encode the ID using Base64 encoding
            window.location.href = "<?= base_url('Admin/events/edit/') ?>" + encodedId;
        }

        function fullViewOfjob(eventid) {
            var encodedId = eventid; // Encode the ID using Base64 encoding
            window.location.href = "<?= base_url('Admin/job/edit/') ?>" + encodedId;
        }

        function fullViewOfnews(eventid) {
            var encodedId = eventid; // Encode the ID using Base64 encoding
            window.location.href = "<?= base_url('Admin/news/edit/') ?>" + encodedId;
        }

        function editGallery(eventid) {
            var encodedId = eventid; // Encode the ID using Base64 encoding
            // alert(encode)
            window.location.href = "<?= base_url('Admin/blog/edit/') ?>" + encodedId;
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.css" integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



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

        $('#imageForm').on('submit', function(e) {
            var formAction = $(this);
            var btnAction = $('#videoBtn');
            var spinAction = $('#videoSpin');
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
                        // console.log(response);
                        var response = JSON.parse(response);
                        $(btnAction).removeAttr("disabled");
                        $(spinAction).hide();
                        if (response[0].res == 'success') {
                            Toastify({
                                text: response[0].msg,
                                duration: 3000, // Duration in milliseconds
                                newWindow: true, // Open in a new window/tab
                                close: true, // Show a close button to close the toast
                                gravity: "top", // Position: top, center, or bottom
                                position: "right", // Position: left, right, or center
                                backgroundColor: "green", // Success color
                                stopOnFocus: true, // Stop the timer when the toast is hovered or clicked
                            }).showToast();
                            if (response[0].redirect) {
                                window.setTimeout(function() {
                                    window.location.href = response[0].redirect;
                                }, 1000);
                            }
                        } else if (response[0].res == 'error') {
                            Toastify({
                                text: response[0].msg,
                                duration: 3000, // Duration in milliseconds
                                newWindow: true, // Open in a new window/tab
                                close: true, // Show a close button to close the toast
                                gravity: "top", // Position: top, center, or bottom
                                position: "right", // Position: left, right, or center
                                backgroundColor: "danger", // Success color
                                stopOnFocus: true, // Stop the timer when the toast is hovered or clicked
                            }).showToast();
                        }
                    },
                    error: function() {
                        // window.location.reload();
                    }
                });
            }
        });
    </script>
    <script>
        function sendEmail(userid, id) {
            $('#' + id).show();
            $.ajax({
                type: 'POST',
                url: "<?= base_url('Admin/resendMail/') ?>" + userid,
                cache: false,
                contentType: false,
                processData: false,
                // beforeSend: function () {
                //         $(spinAction).show();
                //     },
                success: function(response) {
                    $('#' + id).hide();
                    if (response == 'success') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Email Resent Successfully.", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Failed To Resend Email.", "error");
                    }
                },
                error: function(response) {
                    // window.location.reload();
                }
            });
        }

        function sendPublication(userid, id, action) {
            $('#' + id).show();
            $.ajax({
                type: 'POST',
                url: "<?= base_url('Admin/statusUpdate/') ?>" + userid + action,
                cache: false,
                contentType: false,
                processData: false,
                // beforeSend: function () {
                //         $(spinAction).show();
                //     },
                success: function(response) {
                    $('#' + id).hide();
                    if (response == 'success') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Published Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else if (response == 'published') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Inactivated Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Failed To Published", "error");
                    }
                },
                error: function(response) {
                    // window.location.reload();
                }
            });
        }

        function sendnews(userid, id, action) {
            $('#' + id).show();
            $.ajax({
                type: 'POST',
                url: "<?= base_url('Admin/statusUpdateNews/') ?>" + userid + action,
                cache: false,
                contentType: false,
                processData: false,
                // beforeSend: function () {
                //         $(spinAction).show();
                //     },
                success: function(response) {
                    $('#' + id).hide();
                    if (response == 'success') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Published Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else if (response == 'published') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Inactivated Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Failed To Published", "error");
                    }
                },
                error: function(response) {
                    // window.location.reload();
                }
            });
        }

        function sendGallery(userid, id, action) {
            $('#' + id).show();
            $.ajax({
                type: 'POST',
                url: "<?= base_url('Admin/statusUpdateGallery/') ?>" + userid + action,
                cache: false,
                contentType: false,
                processData: false,
                // beforeSend: function () {
                //         $(spinAction).show();
                //     },
                success: function(response) {
                    $('#' + id).hide();
                    if (response == 'success') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Activated Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else if (response == 'published') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Inactivated Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Failed To Active", "error");
                    }
                },
                error: function(response) {
                    // window.location.reload();
                }
            });
        }

        function sendBlog(userid, id, action) {
            $('#' + id).show();
            $.ajax({
                type: 'POST',
                url: "<?= base_url('Admin/statusUpdateBlog/') ?>" + userid + '/' + action,
                cache: false,
                contentType: false,
                processData: false,
                // beforeSend: function () {
                //         $(spinAction).show();
                //     },
                success: function(response) {
                    $('#' + id).hide();
                    if (response == 'success') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Published Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else if (response == 'published') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Inactivated Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Failed To Published", "error");
                    }
                },
                error: function(response) {
                    // window.location.reload();
                }
            });
        }

        function sendevent(userid, id, action) {
            $('#' + id).show();
            $.ajax({
                type: 'POST',
                url: "<?= base_url('Admin/statusUpdateEvent/') ?>" + userid + '/' + action,
                cache: false,
                contentType: false,
                processData: false,
                // beforeSend: function () {
                //         $(spinAction).show();
                //     },
                success: function(response) {
                    $('#' + id).hide();
                    if (response == 'success') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Activated Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else if (response == 'published') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Inactivated Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Failed To Activate", "error");
                    }
                },
                error: function(response) {
                    // window.location.reload();
                }
            });
        }

        function sendToolkit(userid, id, action) {
            $('#' + id).show();
            $.ajax({
                type: 'POST',
                url: "<?= base_url('Admin/statusUpdateToolkit/') ?>" + userid + '/' + action,
                cache: false,
                contentType: false,
                processData: false,
                // beforeSend: function () {
                //         $(spinAction).show();
                //     },
                success: function(response) {
                    $('#' + id).hide();
                    if (response == 'success') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Published Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else if (response == 'published') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Inactivated Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Failed To Published", "error");
                    }
                },
                error: function(response) {
                    // window.location.reload();
                }
            });
        }

        function sendMuseum(userid, id, action) {
            $('#' + id).show();
            $.ajax({
                type: 'POST',
                url: "<?= base_url('Admin/statusUpdateMuseum/') ?>" + userid + '/' + action,
                cache: false,
                contentType: false,
                processData: false,
                // beforeSend: function () {
                //         $(spinAction).show();
                //     },
                success: function(response) {
                    $('#' + id).hide();
                    if (response == 'success') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Published Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else if (response == 'published') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Inactivated Successfully", "success");
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        $('.notifyjs-wrapper').remove();
                        $.notify("Failed To Published", "error");
                    }
                },
                error: function(response) {
                    // window.location.reload();
                }
            });
        }

        window.onload = function() {
            var recaptcha = document.forms["addForm"]["g-recaptcha-response"];
            recaptcha.required = true;
            recaptcha.oninvalid = function(e) {
                // do something
                alert("Please complete the captcha");
            }
        }
        // 
        function deleteData(videoid, table_name) {
            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?= base_url() ?>Admin/deleteData/" + videoid,
                        type: "post",
                        data: {
                            'userid': videoid,
                            'table': table_name,
                        },
                        success: function(r) {
                            if (r == "success") {

                                swal.fire({
                                    title: "Deleted",
                                    text: "Deleted Successfully.",
                                    type: "success",
                                });
                                setTimeout(function() {
                                    window.location.reload();
                                }, 1000);
                            } else {
                                swal.fire({
                                    title: "Error",
                                    text: "Not Deleted.",
                                    type: "error",
                                });
                            }

                        }
                    });
                } else {
                    swal.fire("Cancelled", "Data is safe.", "error");
                }
            })

            return false;
        }
        document.addEventListener('DOMContentLoaded', function() {
            const article = document.getElementById('article');
            const showMore = document.getElementById('show-more');
            const showLess = document.getElementById('show-less');
            const text = article.textContent;
            const maxLength = 10; // Number of characters to display initially

            // Display the text up to the maxLength
            article.textContent = text.substring(0, maxLength);

            // Add an event listener to show the full text when "Show All" is clicked
            showMore.addEventListener('click', function(event) {
                event.preventDefault();
                article.textContent = text;
                showMore.style.display = 'none'; // Hide the "Show All" link
                showLess.style.display = 'inline'; // Show the "Show Less" link
            });

            // Add an event listener to show the truncated text when "Show Less" is clicked
            showLess.addEventListener('click', function(event) {
                event.preventDefault();
                article.textContent = text.substring(0, maxLength);
                showMore.style.display = 'inline'; // Show the "Show All" link
                showLess.style.display = 'none'; // Hide the "Show Less" link
            });
        });

        function fullViewOfPublication(id) {

            window.location.href = "<?= base_url('Admin/fullviewPublication/') ?>" + id;
        }
    </script>
    <script type="text/javascript">
        // $(".datetimepicker").each(function () {
        //     $(this).datetimepicker();
        // });
        $('#datetime-s').datetimepicker({
            sideBySide: true,
            format: 'YYYY-MM-DD hh:mm A',
            widgetPositioning: {
                horizontal: 'auto',
                vertical: 'bottom'
            }
        }).on('dp.change', function(e) {
            // Set the minimum date for datetime-e when datetime-s changes
            $('#datetime-e').data('DateTimePicker').minDate(e.date);
        });

        $('#datetime-e').datetimepicker({
            sideBySide: true,
            format: 'YYYY-MM-DD hh:mm A',
            widgetPositioning: {
                horizontal: 'auto',
                vertical: 'bottom'
            }
        });
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });


        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('file-input');
            const imagePreview = document.getElementById('image-preview');
            const clearPreviewButton = document.getElementById('clear-preview');

            fileInput.addEventListener('change', function(e) {
                const files = e.target.files;

                Array.from(files).forEach((file) => {
                    if (file.type.match('image.*')) {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            const image = new Image();
                            image.src = e.target.result;
                            const imageContainer = document.createElement('div');
                            imageContainer.className = 'image-container';

                            const deleteButton = document.createElement('button');
                            deleteButton.textContent = 'Delete';
                            deleteButton.className = 'delete-button';
                            deleteButton.addEventListener('click', function() {
                                imageContainer.remove();
                            });

                            imageContainer.appendChild(image);
                            imageContainer.appendChild(deleteButton);
                            imagePreview.appendChild(imageContainer);
                        };

                        reader.readAsDataURL(file);
                    }
                });
            });

            clearPreviewButton.addEventListener('click', function() {
                imagePreview.innerHTML = '';
                fileInput.value = '';
            });
        });
    </script>

    <script>
        $('input[name="mobile"]').on('input', function() {
            $(this).val($(this).val().replace(/\D/g, '')); // Remove non-digits
            if ($(this).val().length > 10) {
                $(this).val($(this).val().substr(0, 10)); // Limit to 10 digits
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#imageInput').change(function(event) {
                var formData = new FormData($('#updateProfileForm')[0]); // Create FormData object

                $.ajax({
                    url: $('#updateProfileForm').attr('action'),
                    type: 'POST',
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                    console.log(response);

                    var response = JSON.parse(response);
                   
                    if (response[0].res == 'success') {
                        $('.notifyjs-wrapper').remove();
                        $.notify("" + response[0].msg + "", "success");
                        if (response[0].redirect) {
                            window.setTimeout(function() {
                                window.location.href = response[0].redirect;
                            }, 800);
                        }

                    } else if (response[0].res == 'error') {
    // Remove existing notifications
    $('.notifyjs-wrapper').remove();
    
    // Create a temporary div element to strip HTML tags
    var tempDiv = $('<div>').html(response[0].msg);
    
    // Get the text content without HTML tags
    var errorMsg = tempDiv.text();
    
    // Display the error message
    $.notify(errorMsg, "error");
}
                },
                error: function() {
                    window.location.reload();
                }
                });
            });
        });
    </script>
    </body>

    </html>