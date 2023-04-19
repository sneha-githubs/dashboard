

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Echarts'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Charts <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Echarts <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Line Chart</h4>
                </div>
                <div class="card-body">
                    <div id="line-chart" data-colors='["#2ab57d", "#ccc"]' class="e-charts"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Mix Line-Bar</h4>
                </div>
                <div class="card-body">
                    <div id="mix-line-bar" data-colors='["#2ab57d", "#5156be", "#fd625e"]' class="e-charts"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Doughnut Chart</h4>
                </div>
                <div class="card-body">
                    <div id="doughnut-chart" data-colors='["#5156be", "#ffbf53", "#fd625e", "#4ba6ef", "#2ab57d"]'
                        class="e-charts"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Pie Chart</h4>
                </div>
                <div class="card-body">
                    <div id="pie-chart" data-colors='["#fd625e", "#2ab57d", "#4ba6ef", "#ffbf53", "#5156be"]'
                        class="e-charts"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Scatter Chart</h4>
                </div>
                <div class="card-body">
                    <div id="scatter-chart" data-colors='["#2ab57d"]' class="e-charts"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Bubble Chart</h4>
                </div>
                <div class="card-body">
                    <div id="bubble-chart"
                        data-colors='["rgb(81, 86, 190)", "rgb(143, 148, 255)", "rgba(81, 86, 190, 0.5)", "rgb(42, 181, 125)", "rgb(111, 255, 203)",  "rgb(42, 181, 125, 0.5)"]'
                        class="e-charts"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Candlestick Chart</h4>
                </div>
                <div class="card-body">
                    <div id="candlestick-chart" data-colors='["#5156be", "#2ab57d"]' class="e-charts"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Gauge Chart</h4>
                </div>
                <div class="card-body">
                    <div id="gauge-chart" data-colors='["#2ab57d", "#5156be", "#fd625e"]' class="e-charts"></div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <!-- echarts js -->
    <script src="<?php echo e(URL::asset('/assets/libs/echarts/echarts.min.js')); ?>"></script>
    <!-- echarts init -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/echarts.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DashAdmin\resources\views/charts-echart.blade.php ENDPATH**/ ?>