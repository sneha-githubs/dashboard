 <?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.DataTables'); ?>
<?php $__env->stopSection(); ?> <?php $__env->startSection('css'); ?>

<!-- DataTables -->
<link
    href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>"
    rel="stylesheet"
    type="text/css"
/>
 <?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?> <?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Tables <?php $__env->endSlot(); ?> <?php $__env->slot('title'); ?> View Branches <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table
                    id="datatable"
                    class="table table-bordered dt-responsive nowrap w-100"
                >
                    <thead>
                        <tr>
                            <th>Sl.NO</th>
                            <th>Bank</th>
                            <th>Branch Name</th>
                            <th>Username</th>
                            <th>Monitoring Enabled</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="">Co-operative</a></td>
                            <td><a href="">Feroke</a></td>
                            <td>savings</td>
                            <td>Yes</td>
                            <td style="width: 100px">
                                <a
                                    class="btn btn-outline-secondary btn-sm edit"
                                    data-bs-toggle="modal"
                                    data-bs-target="#myModal"
                                    title="Edit"
                                >
                                    <i class="fas fa-pencil-alt"></i> Change
                                    Password
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Co-operative</td>
                            <td>Karaparamba</td>
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
                            <td>Co-operative</td>
                            <td>Feroke</td>
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
                            <td>Co-operative</td>
                            <td>Karaparamba</td>
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
                            <td>Co-operative</td>
                            <td>Feroke</td>
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
                            <td>Co-operative</td>
                            <td>Karaparamba</td>
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