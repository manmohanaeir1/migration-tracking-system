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
            <canvas id="employeeChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

 <script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('employeeChart').getContext('2d');
        var employeeChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Active Employees', 'Inactive Employees'],
                datasets: [{
                    label: 'Employees',
                    data: [<?php echo e($totalActiveEmployees); ?>, <?php echo e($totalInactiveEmployees); ?>],
                    backgroundColor: ['#36a2eb', '#ff6384'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        // boldtitle 
                        display: true,
                        text: 'Employee Status',
                        font: {
                            size: 20
                        }
                                                  

                         
                    }
                }
            }
        });
    });
</script>
 
 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manmohan/Desktop/migration-tracking-system/resources/views/dashboard/super_admin.blade.php ENDPATH**/ ?>