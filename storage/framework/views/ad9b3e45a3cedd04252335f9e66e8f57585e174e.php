

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.File_Upload'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

    <!-- dropzone css -->
    <link href="<?php echo e(URL::asset('/assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Forms <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> File Upload <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dropzone</h4>
                    <p class="card-title-desc">DropzoneJS is an open source library
                        that provides drag’n’drop file uploads with image previews.
                    </p>
                </div>
                <div class="card-body">

                    <div>
                        <form action="#" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted bx bx-cloud-upload"></i>
                                </div>

                                <h5>Drop files here or click to upload.</h5>
                            </div>
                        </form>
                    </div>

                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary waves-effect waves-light">Send
                            Files</button>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- dropzone js -->
    <script src="<?php echo e(URL::asset('/assets/libs/dropzone/dropzone.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DashAdmin\resources\views/form-uploads.blade.php ENDPATH**/ ?>