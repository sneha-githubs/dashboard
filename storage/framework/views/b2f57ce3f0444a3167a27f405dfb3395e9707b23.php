

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Invoice_List'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

    <!-- flatpickr css -->
    <link href="<?php echo e(URL::asset('/assets/libs/flatpickr/flatpickr.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Invoices <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Agent name / Branch Name <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center">
                        
                        <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-1 mb-4">
                                <div class="input-group datepicker-range align-items-end">
                                <div class="">
                                    <label class="form-label">Uploads</label>
                                    <select class="form-select">
                                        <option>8/9/2023 23:45:87</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                                    <button type="button" class="ms-3 btn btn-light waves-effect waves-light">Move</button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="mb-4">
                            <span>Total Collection: <b>Rs. 13877</b></span>
                                <button type="button" class="ms-3 btn btn-light waves-effect waves-light"><i class="bx bx-download me-1"></i> Download</button>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="table-responsive ">
                        <table class="table table-bordered align-middle datatable dt-responsive table-check nowrap">
                            <thead>
                                <tr class="bg-transparent">
                                    <th style="width: 30px;">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th style="width: 120px;">Receipt Number</th>
                                    <th>Transaction #</th>
                                    <th>Account</th>
                                    <th>Name</th>
                                    <th>Opening Balance</th>
                                    <th>Amount Paid</th>
                                    <th>Mobile</th>
                                    <th>Collection Time</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>

                                    <td><a href="javascript: void(0);" class="text-dark fw-medium">#MN0215</a> </td>
                                    <td>
                                        12 Oct, 2020
                                    </td>
                                    <td>Connie Franco</td>

                                    <td>
                                        $26.30
                                    </td>
                                    <td>
                                       tyh
                                    </td>
                                    <td>
                                       demo
                                    </td>
                                   
                                    <td>
                                       demo
                                    </td>
                                    <td>
                                    2023-04-19 15:51:26
                                    </td>
                                    <td>
                                        <div class="badge badge-soft-danger font-size-12">Cancelled</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>

                                    <td><a href="javascript: void(0);" class="text-dark fw-medium">#MN0215</a> </td>
                                    <td>
                                        12 Oct, 2020
                                    </td>
                                    <td>Connie Franco</td>

                                    <td>
                                        $26.30
                                    </td>
                                    <td>
                                       tyh
                                    </td>
                                    <td>
                                       demo
                                    </td>
                                    
                                    <td>
                                       demo
                                    </td>
                                    <td>
                                    2023-04-19 15:51:26
                                    </td>
                                    <td>
                                        <a href="#" class="font-size-12">Cancel</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>

                                    <td><a href="javascript: void(0);" class="text-dark fw-medium">#MN0215</a> </td>
                                    <td>
                                        12 Oct, 2020
                                    </td>
                                    <td>Connie Franco</td>

                                    <td>
                                        $26.30
                                    </td>
                                    <td>
                                       tyh
                                    </td>
                                    <td>
                                       demo
                                    </td>
                                  
                                    <td>
                                       demo
                                    </td>
                                    <td>
                                    2023-04-19 15:51:26
                                    </td>
                                    <td>
                                        <div class="badge badge-soft-danger font-size-12">Cancelled</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>

                                    <td><a href="javascript: void(0);" class="text-dark fw-medium">#MN0215</a> </td>
                                    <td>
                                        12 Oct, 2020
                                    </td>
                                    <td>Connie Franco</td>

                                    <td>
                                        $26.30
                                    </td>
                                    <td>
                                       tyh
                                    </td>
                                    <td>
                                       demo
                                    </td>
                                   
                                    <td>
                                       demo
                                    </td> <td>
                                    2023-04-19 15:51:26
                                    </td>
                                    <td>
                                        <a href="#" class="font-size-12">Cancel</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table responsive -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- flatpickr js -->
    <script src="<?php echo e(URL::asset('/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>

    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>

    <!-- init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/invoices-list.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DashAdmin\resources\views/bank-agent.blade.php ENDPATH**/ ?>