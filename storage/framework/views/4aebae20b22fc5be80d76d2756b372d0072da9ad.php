<?php $__env->startSection('title'); ?> Bank <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

    <!-- datepicker css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('/assets/libs/flatpickr/flatpickr.min.css')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Forms <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Add Bank <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
              <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Bank Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                    <div class="valid-feedback">
                                    Please enter a bank name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Username</label>
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                    <div class="valid-feedback">
                                    Please enter a username
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->

        
    </div>
    <!-- end row -->

    

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
 <!-- datepicker js -->
 <script src="<?php echo e(URL::asset('/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>
    <!-- pristine js -->
    <script src="<?php echo e(URL::asset('/assets/libs/pristinejs/pristinejs.min.js')); ?>"></script>
    <!-- form validation -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/form-validation.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DashAdmin\resources\views/upload.blade.php ENDPATH**/ ?>