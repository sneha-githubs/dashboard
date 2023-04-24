

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
                    

                    <div class="table-responsive ">
                        <table class="table table-bordered align-middle datatable dt-responsive table-check nowrap">
                            <thead>
                                <tr class="bg-transparent">
                                    
                                    <th style="width: 120px;">Account Number</th>
                                    <th>Name</th>
                                    <th>Opening Balance</th>
                                    <th>Fine Amount</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1967</td>

                                    <td>RAFEEQUE </td>
                                    <td>
                                    ₹ 1525
                                    </td>
                                    <td>₹ 1525</td>
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

<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DashAdmin\resources\views/admin-record.blade.php ENDPATH**/ ?>