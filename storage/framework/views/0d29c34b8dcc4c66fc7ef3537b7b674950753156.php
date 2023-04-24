

<?php $__env->startSection('title'); ?> Branch <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Forms <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Customers <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
              <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <div class="row">
                       
                            <div class="col-md-8">
                               <div class="mb-3">
                                   <label for="choices-single-default" class="form-label font-size-13 text-muted">Device</label>
                                    <select class="form-control" data-trigger name="choices-single-default"
                                        id="choices-single-default"
                                        placeholder="This is a search placeholder">
                                        <option value=""> </option>
                                        <option value="Choice 1">Device 1</option>
                                        <option value="Choice 2">Device 2</option>
                                        <option value="Choice 3">Device 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please enter a Branch.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                     
                            <button class="btn btn-primary mt-4" type="submit">Submit</button></div>
                        </div>
                        
                        
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->

        
    </div>
    <!-- end row -->

    

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

    <!-- pristine js -->
    <script src="<?php echo e(URL::asset('/assets/libs/pristinejs/pristinejs.min.js')); ?>"></script>
    <!-- form validation -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/form-validation.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DashAdmin\resources\views/admin-customer.blade.php ENDPATH**/ ?>