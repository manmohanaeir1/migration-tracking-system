<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Jobs')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="<?php echo e(route('dashboard')); ?>"><h1><?php echo e(__('Dashboard')); ?></h1></a>
        </li>
        <li class="breadcrumb-item active">
            <a href="#"><?php echo e(__('Jobs')); ?></a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('card-action-btn'); ?>
    <?php if(Gate::check('manage job') || \Auth::user()->type=='super admin'): ?>
        <a class="btn btn-primary btn-sm ml-20 customModal" href="#" data-size="md"
           data-url="<?php echo e(route('job.create')); ?>"
           data-title="<?php echo e(__('Create Job')); ?>"> <i class="ti-plus mr-5"></i><?php echo e(__('Create Job')); ?></a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th><?php echo e(__('Job Title')); ?></th>
                                <th><?php echo e(__('Job Description')); ?></th>
                                <th><?php echo e(__('Image')); ?></th>
                                <th><?php echo e(__('Job Location')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($job->job_title); ?></td>
                                    <td><?php echo e($job->job_description); ?></td>
                                    <td><img src="<?php echo e(asset(Storage::url('uploads/job/'.$job->image))); ?>" class="img-fluid img-sm"></td>
                                    <td><?php echo e($job->job_location); ?></td>
                                    <td>
                                        <?php if(Gate::check('edit job') || \Auth::user()->type=='super admin'): ?>
                                            <a href="#" class="edit-icon customModal" data-url="<?php echo e(route('job.edit',$job->id)); ?>" data-size="md" data-title="<?php echo e(__('Edit Job')); ?>" title="<?php echo e(__('Edit Job')); ?>"><i class="fas fa-pencil-alt"></i></a>
                                        <?php endif; ?>
                                        <?php if(Gate::check('delete job') || \Auth::user()->type=='super admin'): ?>
                                            <a href="#" class="delete-icon" data-url="<?php echo e(route('job.destroy',$job->id)); ?>" data-title="<?php echo e(__('Delete Job')); ?>" data-toggle="tooltip" data-original-title="<?php echo e(__('Delete')); ?>"><i class="fas fa-trash"></i></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manmohan/Desktop/migration-tracking-system/resources/views/jobs/index.blade.php ENDPATH**/ ?>