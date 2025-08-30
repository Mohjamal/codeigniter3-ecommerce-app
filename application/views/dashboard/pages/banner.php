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
                                        <input type="file" class="form-control" name="bann_image" id="" placeholder="">
                                        <label for="floatingFirstNameInput">Banner Image</label>
                                    </div>
                                    <?= form_error('bann_image') ?>
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