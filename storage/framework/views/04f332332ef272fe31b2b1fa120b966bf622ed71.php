 <?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.DataTables'); ?>
<?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?>

<!-- DataTables -->
<link
    href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>"
    rel="stylesheet"
    type="text/css"
/>
 <?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?> <?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Tables <?php $__env->endSlot(); ?> <?php $__env->slot('title'); ?> Co oprative Bank / Karaparamba Branch  <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table
                    id="datatable"
                    class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Sl.NO</th>
                            <th>Device </th>
                            <th>Agent Name</th>
                            <th>Collection</th>
                            
                            
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="bank-agent">Aswin</a></td>
                            <td>Samsung</td>
                            <td>₹ 4110</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="bank-agent">Aswin</a></td>
                            <td>Samsung</td>
                            <td>₹ 4110</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="bank-agent">Aswin</a></td>
                            <td>Samsung</td>
                            <td>₹ 4110</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="bank-agent">Aswin</a></td>
                            <td>Samsung</td>
                            <td>₹ 4110</td>
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
    id="adddevice"
    class="modal fade"
    tabindex="-1"
    aria-labelledby="myModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Device</h5>
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
                            <div class="col-md-6 ">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="remember-check">
                                                        <label class="form-check-label" for="remember-check">
                                                        Allow Cancellation
                                                        </label>
                                                    </div>
                                                </div>
                        </div>
                        
                        <button class="btn btn-primary" type="submit">Submit</button>
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

<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DashAdmin\resources\views/bank-branch.blade.php ENDPATH**/ ?>