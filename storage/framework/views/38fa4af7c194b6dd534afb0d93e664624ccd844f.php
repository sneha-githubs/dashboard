

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboard'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

    <link href="<?php echo e(URL::asset('assets/libs/jquery-vectormap/jquery-vectormap.min.css')); ?>" rel="stylesheet"
        type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-4 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">No.of Banks</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="865"></span>
                            </h4>
                        </div>

                        <div class="col-6">
                            <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                   
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-4 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">No.of Branch</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="6258">0</span>
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                   
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col-->

        <div class="col-xl-4 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">No.of Agents</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="4.32">0</span>
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                    
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6" style="display:none;">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Profit Ration</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="12.57">0</span>%
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                   
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row-->

    <div class="row">
        <div class="col-xl-7">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <h5>Bank list</h5>
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl.NO</th>
                                <th>Bank</th>
                                <th>Account</th>
                                <th>SMS Credits</th>
                                <th>SMS Header</th>
                                <th>Setup Date</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                                
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                               
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                               
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                                
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                                
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                               
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                               
                            </tr>
                    
                        </tbody>
                    </table>
                    <div class="row align-items-center" style="display:none;">
                        <div class="col-sm">
                            <div id="wallet-balance" data-colors='["#777aca", "#5156be", "#a8aada"]' class="apex-charts">
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-5">
            <div class="row">
                <div class="col-xl-12">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <h5 class="card-title me-2">Banks</h5>
                                <div class="ms-auto">
                                    <select class="form-select form-select-sm">
                                        <option value="MAY" selected="">Bank 1</option>
                                        <option value="AP">Bank 1</option>
                                        <option value="MA">Bank 1</option>
                                        <option value="FE">Bank 1</option>
                                        <option value="JA">Bank 1</option>
                                        <option value="DE">Bank 1</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-sm">
                                    <div id="invested-overview" data-colors='["#5156be", "#34c38f"]' class="apex-charts">
                                    </div>
                                </div>
                                <div class="col-sm align-self-center">
                                    <div class="mt-4 mt-sm-0">
                                        <p class="mb-1">Bank name</p>
                                        <h4>Co operative</h4>


                                        <div class="mt-2">
                                            <a href="bank-view" class="btn btn-primary btn-sm">View more <i
                                                    class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

             
            </div>
            <!-- end row -->
        </div>
        <!-- end col -->
    </div> <!-- end row-->

    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <!-- Plugins js-->
    <script src="<?php echo e(URL::asset('assets/libs/jquery-vectormap/jquery-vectormap.min.js')); ?>"></script>
    
    <!-- dashboard init -->
    <script src="<?php echo e(URL::asset('assets/js/pages/dashboard.init.js')); ?>"></script>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DashAdmin\resources\views/bank-index.blade.php ENDPATH**/ ?>