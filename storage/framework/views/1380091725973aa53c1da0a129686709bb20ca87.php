 <?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.DataTables'); ?>
<?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?>

<!-- DataTables -->
<link
    href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>"
    rel="stylesheet"
    type="text/css"
/>
 <?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?> <?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Tables <?php $__env->endSlot(); ?> <?php $__env->slot('title'); ?>  Branch / Co operative bank <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="row justify-content-between align-items-center">
                        
                        <div class="col-sm-auto">
                            
                        </div>
                        <div class="col-sm-auto">
                            <div class="mb-4">
                                <span>SMS Credits: <b>13877</b></span>
                            <button type="button" class="ms-3 btn btn-light waves-effect waves-light"  data-bs-toggle="modal"
                                    data-bs-target="#credit"><i class="bx bx-plus me-1"></i> Add SMS Credit</button>
                                <button type="button" class="btn btn-light waves-effect waves-light"  data-bs-toggle="modal"
                                    data-bs-target="#addbranch"><i class="bx bx-plus me-1"></i> Add Branch</button>
                            </div>
                        </div>
                    </div>
                <table
                    id="datatable"
                    class="table table-bordered dt-responsive nowrap w-100"
                >
                    <thead>
                        <tr>
                            <th>Sl.NO</th>
                            <th>Branch Name</th>
                            <th>Username</th>
                            <th>Monitoring Enabled</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="device-view">Feroke</a></td>
                            <td>savings</td>
                            <td>Yes</td>
                            <td style="width: 100px">
                                <a
                                    class="btn btn-outline-secondary btn-sm edit"
                                    data-bs-toggle="modal"
                                    data-bs-target="#myModal addbranch"
                                    title="Edit"
                                >
                                    <i class="fas fa-pencil-alt"></i> Change
                                    Password
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="device-view">Karaparamba</a></td>
                            <td>savings</td>
                            <td>Yes</td>
                            <td style="width: 100px">
                                <a
                                    class="btn btn-outline-secondary btn-sm edit"
                                    title="Edit"
                                >
                                    <i class="fas fa-pencil-alt"></i> Change
                                    Password
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="device-view">Feroke</a></td>
                            <td>savings</td>
                            <td>Yes</td>
                            <td style="width: 100px">
                                <a
                                    class="btn btn-outline-secondary btn-sm edit"
                                    title="Edit"
                                >
                                    <i class="fas fa-pencil-alt"></i> Change
                                    Password
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="device-view">Karaparamba</a></td>
                            <td>savings</td>
                            <td>Yes</td>
                            <td style="width: 100px">
                                <a
                                    class="btn btn-outline-secondary btn-sm edit"
                                    title="Edit"
                                >
                                    <i class="fas fa-pencil-alt"></i> Change
                                    Password
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="device-view">Feroke</a></td>
                            <td>savings</td>
                            <td>Yes</td>
                            <td style="width: 100px">
                                <a
                                    class="btn btn-outline-secondary btn-sm edit"
                                    title="Edit"
                                >
                                    <i class="fas fa-pencil-alt"></i> Change
                                    Password
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="device-view">Karaparamba</td>
                            <td>savings</td>
                            <td>Yes</td>
                            <td style="width: 100px">
                                <a
                                    class="btn btn-outline-secondary btn-sm edit"
                                    title="Edit"
                                >
                                    <i class="fas fa-pencil-alt"></i> Change
                                    Password
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<!-- sample modal content -->
<div
    id="myModal"
    class="modal fade"
    tabindex="-1"
    aria-labelledby="myModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Change Password</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label
                                    class="form-label"
                                    for="validationCustom01"
                                    >New password</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="validationCustom01"
                                    placeholder="New password"
                                    value=""
                                    required
                                />
                                <div class="valid-feedback">
                                    Please enter a New password
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">
                        Submit
                    </button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- sample modal content -->
<div
    id="addbranch"
    class="modal fade"
    tabindex="-1"
    aria-labelledby="myModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Branch</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
            <form class="needs-validation" novalidate>
                        <div class="row">
                       
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Branch Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Branch Name" value="" required>
                                    <div class="valid-feedback">
                                    Please enter a Branch name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Username</label>
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Username" value="" required>
                                    <div class="valid-feedback">
                                    Please enter a username
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Password</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Password" required>
                                    <div class="invalid-feedback">
                                        Please enter a Password.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom04">Confirm Password</label>
                                    <input type="text" class="form-control" id="validationCustom04" placeholder="Confirm Password" required>
                                    <div class="invalid-feedback">
                                        Please enter a Confirm Password.
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- sample modal content -->
<div
    id="credit"
    class="modal fade"
    tabindex="-1"
    aria-labelledby="myModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add SMS Credit - bank name</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label
                                    class="form-label"
                                    for="validationCustom01"
                                    >SMS Credit</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="validationCustom01"
                                    placeholder="New password"
                                    value=""
                                    required
                                />
                                <div class="valid-feedback">
                                    Please enter a SMS Credit
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">
                        Submit
                    </button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php $__env->stopSection(); ?> <?php $__env->startSection('script'); ?>

<!-- Required datatable js -->
<script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>


<!-- Buttons examples -->

<script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
 

<!-- Datatable init js -->
<script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DashAdmin\resources\views/branch-view.blade.php ENDPATH**/ ?>