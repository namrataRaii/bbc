<?php include 'header.php';?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    b {
        font-weight: 500 !important;
    }
</style>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12" style="display: flex;justify-content: space-between;">
                                    <h4 class="card-title">Blog</h4>
                                    <a href="<?= base_url('Admin/blog/add') ?>">
                                        <button class="btn btn-outline-primary"> Add Blog</button>
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive m-2">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>SR. NO.</th>
                                            <th>Title</th>
                                            <th>Thumbnail</th>
                                            <th>Images</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sr = 1;
                                        foreach ($blogs as $blog) { ?>
                                            <tr>
                                                <th scope="row">
                                                    <?= $sr ?>
                                                </th>
                                                <td>
                                                    <?= $blog->gallery_title ?>
                                                </td>
                                                <td>
                                                    <img src="<?= base_url('uploads/' . $blog->gallery_thumbnail) ?>" alt=""
                                                        height="80" width="100"> <br>
                                                      <span>Created At :  
                                                        <?php
                                                      $dateString = $blog->created_at;
                                                    $timestamp = strtotime($dateString);
                                                    $formattedDate = date("F j, Y", $timestamp);
                                                    echo $formattedDate;  ?>   
                                                    </span> 
                                                </td>

                                                <td>
                                                    <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                        data-bs-ride="carousel" data-bs-interval="3000">
                                                        <div class="carousel-inner">
                                                            <?php
                                                            $allimages = explode(",", $blog->gallery_images);
                                                            $sr = 1;
                                                            foreach ($allimages as $image) {
                                                                ?>
                                                                <div class="carousel-item <?php if ($sr == 1) {
                                                                    echo 'active';
                                                                } ?>">
                                                                    <img class="d-block img-fluid"
                                                                        src="<?= base_url('uploads/' . $image) ?>" alt="slide"
                                                                        height="90" width="100">
                                                                </div>
                                                                <?php $sr++;
                                                            } ?>
                                                        </div>
                                                    </div>

                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    if ($blog->status == 'Published') {
                                                        echo "
                                                    <div class='dropdown d-inline-block user-dropdown'>
                                                    <button type='button' class='btn text-dark waves-effect'
                                                        id='page-header-user-dropdown' data-bs-toggle='dropdown'
                                                        aria-haspopup='true' aria-expanded='false'>
                                                        <div class='badge bg-success-subtle text-success font-size-12'><i class='fa fa-spin fa-spinner' style='display:none' id='PendingSpin" . $blog->id . "'></i>Active</div>
                                                        </span>
                                                        <i class='mdi mdi-chevron-down  d-xl-inline-block'></i>
                                                    </button>
                                                    <div class='dropdown-menu dropdown-menu-end'>
                                                        
                                                        <a class='dropdown-item' style='cursor:pointer;' onclick='sendGallery(\"" . $blog->id . "\", \"PendingSpin" . $blog->id . "\", \"/pending\")'> Inactive</a> 
                                                    </div>
                                                </div>";
                                                    } else {
                                                        echo "<div class='dropdown d-inline-block user-dropdown'>
                                                    <button type='button' class='btn text-dark waves-effect'
                                                        id='page-header-user-dropdown' data-bs-toggle='dropdown'
                                                        aria-haspopup='true' aria-expanded='false'>
                                                        <span class=' d-xl-inline-block ms-1'>
                                                        <div class='badge bg-danger-subtle text-danger font-size-12'><i class='fa fa-spin fa-spinner' style='display:none' id='publicationSpin" . $blog->id . "'></i> Inactive</div>
                                                        </span>
                                                        <i class='mdi mdi-chevron-down  d-xl-inline-block'></i>
                                                    </button>
                                                    <div class='dropdown-menu dropdown-menu-end'>
                                                    <a class='dropdown-item' style='cursor:pointer;' onclick='sendGallery(\"" . $blog->id . "\", \"publicationSpin" . $blog->id . "\", \"/new\")'> Active</a>


                                                        
                                                    </div>
                                                </div>";
                                                    }
                                                    ?>

                                                </td>
                                                <td class="">
                                                    <div class="dropdown d-inline-block user-dropdown">
                                                        <button type="button" class="btn text-dark waves-effect"
                                                            id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <span class=" d-xl-inline-block ms-1">
                                                                <div class="badge bg-info-subtle text-info  font-size-12"><i
                                                                        class="ri-settings-2-line"></i></div>
                                                            </span>
                                                            <i class="mdi mdi-chevron-down  d-xl-inline-block"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                                            <!-- <a class='dropdown-item' href='#'> <i class="ri-pencil-fill"></i>
                                                            Edit</a> -->
                                                            <a style="cursor:pointer" class="dropdown-item" onclick="editGallery('<?=base64_encode($blog->id)?>')">
                                                                <i class="mdi mdi-pencil-outline" ></i> Edit</a>
                                                            <a style="cursor:pointer" class="dropdown-item"
                                                                onclick="deleteData('<?= $blog->id ?>','tbl_blog')"> <i
                                                                    class="mdi mdi-trash-can-outline"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $sr++;
                                        } ?>
                                    </tbody>
                                </table>
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