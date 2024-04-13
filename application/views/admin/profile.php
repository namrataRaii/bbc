<?php include 'header.php';?>
<style>
    .card-header:first-child {
        border-radius: 0.35rem 0.35rem 0 0;
    }

    .card-header {
        padding: 1rem 1.35rem;
        margin-bottom: 0;
        background-color: rgba(33, 40, 50, 0.03);
        border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }



    .file-upload {
        display: none;
    }

    .circle {
        border-radius: 100% !important;
        overflow: hidden;
        width: 128px;
        height: 128px;
        border: 2px solid rgba(255, 255, 255, 0.2);
        position: absolute;
        top: 72px;
    }

    .img-account-profile {
        width: 120px;
    height: 120px;

    }

    .profile-img-wrap.edit-img {
        border-radius: 50%;
        margin: 0 auto 30px;
        position: relative;
    }

    .profile-view .profile-img-wrap {
        height: 130px;
        width: 130px;
        position: absolute;
    }

    .profile-img-wrap {
        height: 120px;
        position: absolute;
        width: 120px;
        background: #ffffff;
        overflow: hidden;
    }

    .profile-img-wrap .fileupload {
        background: rgba(33, 33, 33, 0.5) !important;
        border: none !important;
        padding: 3px 10px !important;
        border-radius: 0 !important;
        position: absolute !important;
        right: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
    }

    .fileupload .upload {
        cursor: pointer;
        filter: alpha(opacity=0) !important;
        font-size: 20px;
        opacity: 0;
        margin: 0;
        padding: 5px;
        position: absolute;
        top: -3px;
        right: -3px;
    }
    .fileupload.btn:hover{
        color:white !important;
        font-weight: 600;
    }
</style>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="container-xl px-4 mt-4">


                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header">Profile Picture</div>
                                <!-- <?php var_dump($admin);?> -->
                                <div class="card-body text-center">
                                    <!-- Profile picture image-->
                                    <form id="updateProfileForm" method="POST" action="<?= base_url('admin/profile/update') ?>" enctype="multipart/form-data">
                                        <div class="profile-img-wrap edit-img">
                                         
                                            <a href="<?php echo base_url(!empty($admin->icon) ? 'uploads/'.$admin->icon : 'assets/images/users/user.png')?>" target="_blank"> <img class="img-account-profile rounded-circle mb-2 " src="<?php echo base_url(!empty($admin->icon) ? 'uploads/'.$admin->icon : 'assets/images/users/user.png')?>" alt=""></a>

                                            <div class="fileupload btn">
                                                <span class="btn-text">edit</span>
                                                <input id="imageInput" class="upload" type="file" name="icon">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <!-- Account details card-->
                            <div class="card mb-4">
                                <div class="card-header">Account Details</div>
                                <div class="card-body">
                                    <form method="post" id="imageForm" action="<?php echo base_url('Admin/profile/update'); ?>">
                                        <div class="row">
                                           
                                            <div class="col-sm-12 main-width-box w-100" id="l-section-list">

                                                <div class="row mb-3">
                                                    <div class="col-sm-6 ">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" value="<?= $admin->name;?>" >
                                                        <?php echo form_error('name', '<div class="error">', '</div>'); ?>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email" value="<?= $admin->username; ?>">
                                                        <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-sm-6">
                                                        <label>Address</label>
                                                        <textarea class="form-control" name="address" style="height:70px;"><?= $admin->address;?></textarea>
                                                        <?php echo form_error('address', '<div class="error">', '</div>'); ?>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Mobile</label>
                                                        <input type="text" class="form-control" name="mobile" value="<?= $admin->mobile; ?>">
                                                        <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                        <div class="row m-2">
                                            <div class="col-md-12">
                                                <button class="mt-3 btn btn-primary  p-2 form-btn" id="videoBtn">SAVE <i class="fa fa-spin fa-spinner" id="videoSpin" style="display:none;"></i></button>
                                                <button class="mt-3 btn btn-danger  p-2 form-btn" id=""><a class="text-white" href="<?= base_url('Admin/profile') ?>">Cancel</a></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
</div>
<?php include 'footer.php';?>