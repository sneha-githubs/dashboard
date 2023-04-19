

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.DataTables'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Tables <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Bank List <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl.NO</th>
                                <th>Bank</th>
                                <th>Account</th>
                                <th>SMS Credits</th>
                                <th>SMS Header</th>
                                <th>Setup Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="layouts-horizontal">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Co-operative</td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Co-operative</td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Co-operative</td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Co-operative</td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Co-operative</td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Co-operative</td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                            </tr>
                    
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
    

    <!-- Buttons examples -->
    
    <script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
    
    

    <!-- Datatable init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DashAdmin\resources\views/bank-view.blade.php ENDPATH**/ ?>