

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Validation'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Forms <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Validation <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
              <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <div class="row">
                        <div class="col-md-4">
                                <div class="mb-3">
                                   <label for="choices-single-default" class="form-label font-size-13 text-muted">Bank</label>
                                    <select class="form-control" data-trigger name="choices-single-default"
                                        id="choices-single-default"
                                        placeholder="This is a search placeholder">
                                        <option value=""> </option>
                                        <option value="Choice 1">Bank 1</option>
                                        <option value="Choice 2">Bank 2</option>
                                        <option value="Choice 3">Bank 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please enter a Bank.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Branch Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Branch Name" value="" required>
                                    <div class="valid-feedback">
                                    Please enter a Branch name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
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
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Password</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Password" required>
                                    <div class="invalid-feedback">
                                        Please enter a Password.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DashAdmin\resources\views/maps-google.blade.php ENDPATH**/ ?>