

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Leaflet'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

    <!-- leaflet Css -->
    <link href="<?php echo e(URL::asset('/assets/libs/leaflet/leaflet.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Maps <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Leaflet Maps <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Example</h4>
                </div>
                <div class="card-body">
                    <div id="leaflet-map" class="leaflet-map"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Markers, circles and polygons</h4>
                </div>
                <div class="card-body">
                    <div id="leaflet-map-marker" class="leaflet-map"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Working with popups</h4>
                </div>
                <div class="card-body">
                    <div id="leaflet-map-popup" class="leaflet-map"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Markers with Custom Icons</h4>
                </div>
                <div class="card-body">
                    <div id="leaflet-map-custom-icons" class="leaflet-map"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Interactive Choropleth Map</h4>
                </div>
                <div class="card-body">
                    <div id="leaflet-map-interactive-map" class="leaflet-map"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Layer Groups and Layers Control</h4>
                </div>
                <div class="card-body">
                    <div id="leaflet-map-group-control" class="leaflet-map"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- leaflet plugin -->
    <script src="<?php echo e(URL::asset('/assets/libs/leaflet/leaflet.min.js')); ?>"></script>

    <!-- leaflet map.init -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/leaflet-us-states.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/pages/leaflet-map.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DashAdmin\resources\views/maps-leaflet.blade.php ENDPATH**/ ?>