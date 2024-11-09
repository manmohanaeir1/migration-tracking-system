<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3><?php echo e(__('Employee Details')); ?></h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th><?php echo e(__('Registration ID:')); ?></th>
                        <td><?php echo e($employee->registration_id); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Name:')); ?></th>
                        <td><?php echo e($employee->foreign_employee_name); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Address:')); ?></th>
                        <td><?php echo e($employee->address); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Age:')); ?></th>
                        <td><?php echo e($employee->age); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Guardian Name:')); ?></th>
                        <td><?php echo e($employee->guardian_name); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Guardian Contact:')); ?></th>
                        <td><?php echo e($employee->guardian_contact); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Destination Country/City:')); ?></th>
                        <td><?php echo e($employee->foreign_destination_country_city); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Destination Country Contact:')); ?></th>
                        <td><?php echo e($employee->destination_country_contact); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Destination Job:')); ?></th>
                        <td><?php echo e($employee->foreign_destination_job); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Job Finding Agent Name:')); ?></th>
                        <td><?php echo e($employee->foreign_job_finding_agent_name); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Job Finding Agent Contact:')); ?></th>
                        <td><?php echo e($employee->foreign_job_finding_agent_contact); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Date of Heading Towards Foreign:')); ?></th>
                        <td><?php echo e($employee->date_of_heading_towards_foreign); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Duration of Foreign Job:')); ?></th>
                        <td><?php echo e($employee->duration_of_foreign_job); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Bank Account:')); ?></th>
                        <td><?php echo e($employee->bank_account); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Skills:')); ?></th>
                        <td><?php echo e($employee->skills); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(__('Return Date:')); ?></th>
                        <td><?php echo e($employee->return_date); ?></td>
                    </tr>
                   
                        <th><?php echo e(__('Remarks:')); ?></th>
                        <td><?php echo e($employee->remarks); ?></td>
                    </tr>
                    <tr>
                        <tr class="table-warning">
                        <th><?php echo e(__('Status:')); ?></th>
                        <td><?php echo e($employee->status == 1 ? 'Active' : 'Inactive'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
  
<a href="<?php echo e(route('employee.index')); ?>" class="btn btn-primary">Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manmohan/Desktop/migration-tracking-system/resources/views/employee/show.blade.php ENDPATH**/ ?>