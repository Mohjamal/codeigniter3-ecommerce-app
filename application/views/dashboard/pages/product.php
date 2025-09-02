<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesdesign.in/tocly/layouts/5.3.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Nov 2023 08:52:23 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Tocly - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
        content="Premium Multipurpose Admin & Dashboard Template"
        name="description" />
    <meta content="Themesdesign" name="author" />
    <base href="<?php echo base_url(); ?>">
    <?php $this->load->view("dashboard/layouts/links"); ?>
</head>

<?php $this->load->view("dashboard/layouts/header"); ?>


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <?php if ($this->session->flashdata('succMsg')) { ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('succMsg'); ?>
                </div>
            <?php } ?>

            <?php if ($this->session->flashdata('errMsg')) { ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('errMsg'); ?>
                </div>
            <?php } ?>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div
                            class="card-header border-0 align-items-center d-flex pb-0">
                            <h4 class="card-title mb-0 flex-grow-1">
                                Pincode
                            </h4>
                            <div>
                                <div class="dropdown">
                                    <a
                                        class="dropdown-toggle text-muted"
                                        href="#"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Today<i class="mdi mdi-chevron-down ms-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Yearly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Today</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Floating labels</h5>
                            <p class="card-title-desc">Create beautifully simple form labels that float over your input fields.</p>

                            <?= form_open_multipart() ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" name="prod_id" id="" value="<?= set_value('prod_id', $prod_id) ?>" placeholder="" readonly>
                                        <label for="floatingFirstnameInput">Product ID</label>
                                    </div>
                                    <?= form_error('prod_id') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="category" id="floatingSelectGrid" onchange="get_categories(this.value)">
                                            <option value="" selected>select</option>
                                            <?php foreach ($categories as $cat) { ?>
                                                <option value="<?= $cat->cat_id; ?>"><?= $cat->cat_name; ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="floatingSelectGrid">Category</label>
                                    </div>
                                    <?= form_error('category') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select sub_category" name="sub_category" id="floatingSelectGrid">
                                            <option value="" selected>select</option>
                                        </select>
                                        <label for="floatingSelectGrid">Sub Category</label>
                                    </div>
                                    <?= form_error('sub_category') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="prod_name" id="" placeholder="Product Name">
                                        <label for="floatingFirstnameInput">Product Name</label>
                                    </div>
                                    <?= form_error('prod_name') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="brand" id="" placeholder="Product Name">
                                        <label for="floatingFirstnameInput">Product Brand</label>
                                    </div>
                                    <?= form_error('brand') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="featured" id="floatingSelectGrid">
                                            <option value="" selected>select</option>
                                            <option value="1">Deal of The Month</option>
                                            <option value="2">New Arrival</option>
                                        </select>
                                        <label for="floatingSelectGrid">Featured</label>
                                    </div>
                                    <?= form_error('featured') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-select" name="highlights" id=""></textarea>
                                        <label for="floatingSelectGrid">Highlights</label>
                                    </div>
                                    <?= form_error('highlights') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-select" name="description" id=""></textarea>
                                        <label for="floatingSelectGrid">Description</label>
                                    </div>
                                    <?= form_error('description') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" name="stock" id="" placeholder="">
                                        <label for="floatingSelectGrid">Product Stock</label>
                                    </div>
                                    <?= form_error('stock') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" name="mrp" id="" placeholder="">
                                        <label for="floatingSelectGrid">Product MRP</label>
                                    </div>
                                    <?= form_error('mrp') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" name="selling_price" id="" placeholder="">
                                        <label for="floatingSelectGrid">Product Selling Price</label>
                                    </div>
                                    <?= form_error('selling_price') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="meta_title" id="" placeholder="">
                                        <label for="floatingFirstnameInput">Meta Title</label>
                                    </div>
                                    <?= form_error('meta_title') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="meta_keywords" id="" placeholder="">
                                        <label for="floatingFirstnameInput">Meta Keywords</label>
                                    </div>
                                    <?= form_error('meta_keywords') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="meta_desc" id="" placeholder="">
                                        <label for="floatingFirstnameInput">Meta Description</label>
                                    </div>
                                    <?= form_error('meta_desc') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="file" class="form-control" name="prod_main_image" id="" placeholder="">
                                        <label for="floatingFirstNameInput">Product Image</label>
                                    </div>
                                    <?= form_error('prod_main_image') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="file" class="form-control" name="gallery_image" id="" placeholder="">
                                        <label for="floatingFirstNameInput">Product Gallery Image</label>
                                    </div>
                                    <?= form_error('gallery_image') ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="status" id="floatingSelectGrid">
                                            <option value="" selected>select</option>
                                            <option value="1">Active</option>
                                            <option value="2">Deactive</option>
                                        </select>
                                        <label for="floatingSelectGrid">Status</label>
                                    </div>
                                    <?= form_error('status') ?>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                            <?= form_close() ?>

                        </div>
                    </div>
                </div>

            </div>
            <!-- END ROW -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php $this->load->view("dashboard/layouts/footer"); ?>