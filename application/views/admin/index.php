
<?php include 'header.php';?>
<!-- ========== Left Sidebar Start ========== -->

<!-- Left Sidebar End -->


<style>
    .card{
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }
</style>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Nazox</a></li> -->
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="<?=base_url('Admin/job')?>">
                            <div class="card hvr-underline-from-left">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-1 overflow-hidden">
                                            <p class="text-truncate font-size-14 mb-2">Total Jobs</p>
                                            <h4 class="mb-0"><?=$total_jobs?></h4>
                                        </div>
                                        <div class="text-primary ms-auto">
                                            <i class="fa fa-users font-size-24"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body border-top py-3">
                                    <div class="text-truncate">
                                        <!-- <span class="badge bg-success-subtle text-success  font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                        <span class="text-muted ms-2">Total active  jobs role</span>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                        <a href="<?=base_url('Admin/blog')?>">
                            <div class="card hvr-underline-from-left">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-1 overflow-hidden">
                                            <p class="text-truncate font-size-14 mb-2">Total Blogs</p>
                                            <h4 class="mb-0"><?=$total_blog?></h4>
                                        </div>
                                        <div class="text-danger ms-auto">
                                            <!-- <i class="ri-store-2-line font-size-24"></i> -->
                                            <i class="ri-image-fill text-danger font-size-24"></i>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-top py-3">
                                    <div class="text-truncate">
                                        <!-- <span class="badge bg-success-subtle text-success  font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                        <span class="text-muted ms-2">Total active blogs</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                        <div class="col-md-4">
                        <a href="<?=base_url('Admin/news')?>">
                            <div class="card hvr-underline-from-left">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-1 overflow-hidden">
                                            <p class="text-truncate font-size-14 mb-2">Total News</p>
                                            <h4 class="mb-0"><?=$total_news?></h4>
                                        </div>
                                        <div class="text-primary ms-auto">
                                            <!-- <i class="ri-briefcase-4-line font-size-24"></i> -->
                                            <i class="ri-newspaper-line text-warning font-size-24"></i>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-top py-3">
                                    <div class="text-truncate">
                                        <!-- <span class="badge bg-success-subtle text-success  font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span> -->
                                        <span class="text-muted ms-2">Total active news</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <!-- end row -->

                    
                </div>
            </div>
        </div>          
        <!-- end row -->
    </div>
        
</div>
<!-- End Page-content -->
<?php include 'footer.php';?>
    
