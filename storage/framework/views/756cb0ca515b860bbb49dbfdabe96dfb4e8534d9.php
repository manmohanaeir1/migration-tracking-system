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
           data-title="<?php echo e(__('create employee')); ?>">
            <i class="ti-plus mr-5"></i><?php echo e(__('create employee')); ?></a>
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
                            <th><?php echo e(__('Foregin Destination Country/City')); ?></th>
                            <th><?php echo e(__('Destination Country Contact')); ?></th>
                            <th><?php echo e(__('Foregin Destination Job')); ?></th>
                            <th><?php echo e(__('Foregin Job Finding Agent Name')); ?></th>
                            <th><?php echo e(__('Foregin Job Finding Agent Contact')); ?></th>
                            <th><?php echo e(__('Date of Heading Towards Foregin')); ?></th>
                            <th><?php echo e(__('Duration of Foregin Job')); ?></th>
                            <th><?php echo e(__('Bank Account')); ?></th>
                            <th><?php echo e(__('Skills')); ?></th>
                            <th><?php echo e(__('Return Date')); ?></th>
                            <th><?php echo e(__('Remarks')); ?></th>
                            <th><?php echo e(__('Status')); ?></th>


                            
                            <?php if(Gate::check('edit employee') ||  Gate::check('delete employee') ||  Gate::check('show employee')): ?>
                                <th class="text-right"><?php echo e(__('Action')); ?></th>
                            <?php endif; ?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($employee->registration_id); ?></td>
                                <td><?php echo e($employee->foreign_employee_name); ?></td>
                                <td><?php echo e($employee->address); ?></td>
                                <td><?php echo e($employee->age); ?></td>
                                <td><?php echo e($employee->guardian_name); ?></td>
                                <td><?php echo e($employee->guardian_contact); ?></td>
                                <td><?php echo e($employee->foreign_destination_country_city); ?></td>
                                <td><?php echo e($employee->destination_country_contact); ?></td>
                                <td><?php echo e($employee->foreign_destination_job); ?></td>
                                <td><?php echo e($employee->foreign_job_finding_agent_name); ?></td>
                                <td><?php echo e($employee->foreign_job_finding_agent_contact); ?></td>
                                <td><?php echo e($employee->date_of_heading_towards_foreign); ?></td>
                                <td><?php echo e($employee->duration_of_foreign_job); ?></td>
                                <td><?php echo e($employee->bank_account); ?></td>
                                <td><?php echo e($employee->skills); ?></td>
                                <td><?php echo e($employee->return_date); ?></td>
                                <td><?php echo e($employee->remarks); ?></td>
                                <td>

                                    
                                    <?php if($employee->status == 1): ?>
                                        <span class="badge badge-success"><?php echo e(__('Active')); ?></span>
                                    <?php else: ?>
                                        <span class="badge badge-danger"><?php echo e(__('Inactive')); ?></span>  
                                    <?php endif; ?>
                                </td>

 

                                <?php if(Gate::check('edit employee') ||  Gate::check('delete employee') ||  Gate::check('show employee')): ?>
                                        <td>
                                            <div class="cart-action">
                                                <?php echo Form::open(['method' => 'DELETE', 'route' => ['employee.destroy', $employee->id]]); ?>

                                                <?php if(Gate::check('show employee')): ?>
                                                    <a href="<?php echo e(route('employee.show',$employee->id)); ?>" class="action-item"
                                                       data-toggle="tooltip" data-original-title="<?php echo e(__('Show')); ?>">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                <?php endif; ?>

                   
                                                <?php if(Gate::check('edit employee') || \Auth::user()->type=='super admin'): ?>
                                                <a class="text-success customModal" data-bs-toggle="tooltip"
                                                   data-bs-original-title="<?php echo e(__('Edit')); ?>" href="#"
                                                   data-url="<?php echo e(route('employee.edit',$employee->id)); ?>"
                                                   data-title="<?php echo e(__('Edit Employee')); ?>"> <i data-feather="edit"></i></a>
                                            <?php endif; ?>
                                            

                                            <?php if(Gate::check('delete employee') || \Auth::user()->type=='super admin'): ?>
                                                <a class=" text-danger confirm_dialog" data-bs-toggle="tooltip"
                                                   data-bs-original-title="<?php echo e(__('Detete')); ?>" href="#"> <i
                                                        data-feather="trash-2"></i></a>
                                            <?php endif; ?>
                                                <?php echo Form::close(); ?>

                                            </div>
                                        </td>
                                     
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/manmohan/D25CA17B5CA15ACD/code&projectsDOC/2081/tracking/resources/views/employee/index.blade.php ENDPATH**/ ?>