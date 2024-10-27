<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="<?php echo e(route('dashboard')); ?>"> <h1><?php echo e(__('Dashboard')); ?></h1></a>
        </li>

    </ul>
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4><?php echo e(__('Total Foreign Employees')); ?></h4>
                </div>
                <div class="card-body progressCounter">
                    <h2><?php echo e($result['totalEmployee']); ?></h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4>..</h4>
                </div>
                <div class="card-body progressCounter">
                    <h2>..</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4>..</h4>
                </div>
                <div class="card-body progressCounter">
                    <h2>..</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4>..</h4>
                </div>
                <div class="card-body progressCounter">
                    <h2><?php echo e(subscriptionPaymentSettings()['CURRENCY_SYMBOL'].$result['totalActiveEmployee']); ?></h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4>..</h4>
                </div>
                <div class="card-body progressCounter">
                    <h2>..</h2>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4>..</h4>
                </div>
                <div class="card-body progressCounter">
                    <h2>..</h2>
                </div>
            </div>
        </div>



        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/manmohan/D25CA17B5CA15ACD/code&projectsDOC/2081/migration-tracking-system/resources/views/dashboard/super_admin.blade.php ENDPATH**/ ?>