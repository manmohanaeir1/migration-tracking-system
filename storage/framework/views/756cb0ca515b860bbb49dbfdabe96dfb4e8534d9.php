<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Employee')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="<?php echo e(route('dashboard')); ?>"><h1><?php echo e(__('Dashboard')); ?></h1></a>
        </li>
        <li class="breadcrumb-item active">
            <a href="#"><?php echo e(__('Employee')); ?></a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('card-action-btn'); ?>
    <?php if(Gate::check('create employee')): ?>
        <a class="btn btn-primary btn-sm ml-20 customModal" href="#" data-size="xl"
           data-url="<?php echo e(route('employee.create')); ?>"
           data-title="<?php echo e(__('Create Employee')); ?>"> <i class="ti-plus mr-5"></i><?php echo e(__('Register Employee')); ?></a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="display dataTable cell-border datatbl-advance">
                        <thead>
                        <tr>
                            <th><?php echo e(__('Registration/ID')); ?></th>
                            <th><?php echo e(__('Foregin Employee Name')); ?></th>
                            <th><?php echo e(__('Address(Toll))')); ?></th>
                            <th><?php echo e(__('Age')); ?></th>
                            <th><?php echo e(__('Guardian Name')); ?></th>
                            <th><?php echo e(__('Guardian Contact')); ?></th>
                            <th><?php echo e(__('Foregin Destination Country/City ')); ?></th>
                            <th><?php echo e(__('Destination Country Contact')); ?></th>
                            <th><?php echo e(__('Foregin Destination Job  ')); ?></th>
                            <th><?php echo e(__('Foregin Job Finding Agent Name  ')); ?></th>
                            <th><?php echo e(__('Foregin Job Finding Agent Contact  ')); ?></th>
                            <th><?php echo e(__('Date of Heading Towards Foregin  ')); ?></th>
                            <th><?php echo e(__('Duration of Foregin Job ')); ?></th>
                            <th><?php echo e(__('Bank Account')); ?></th>
                            <th><?php echo e(__('Skills')); ?></th>
                            <th><?php echo e(__('Return Date')); ?></th>
                            <th><?php echo e(__('Remarks')); ?></th>

                            




                            <th><?php echo e(__('Foregin Destination Job  ')); ?></th>
                            <?php if(Gate::check('edit employee') ||  Gate::check('delete employee') ||  Gate::check('show employee')): ?>
                                <th class="text-right"><?php echo e(__('Action')); ?></th>
                            <?php endif; ?>
                        </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/manmohan/D25CA17B5CA15ACD/code&projectsDOC/2081/tracking/resources/views/employee/index.blade.php ENDPATH**/ ?>