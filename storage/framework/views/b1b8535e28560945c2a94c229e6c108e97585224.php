
<?php echo e(Form::open(array('url'=>'job','method'=>'post'))); ?>

<div class="modal-body">
    <div class="row">
        <div class="form-group  col-md-12">
           
           
         
            <?php echo e(Form::label('job_title',__('Job Title'),array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('job_title',null,array('class'=>'form-control','placeholder'=>__('Enter job title')))); ?>

        </div>
        <div class="form-group  col-md-12">
            <?php echo e(Form::label('job_description',__('Job Description'),array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('job_description',null,array('class'=>'form-control','placeholder'=>__('Enter job description')))); ?>

        </div>  
        <div class="form-group  col-md-12">
            <?php echo e(Form::label('image',__('Image'),array('class'=>'form-label'))); ?>

            <?php echo e(Form::file('image',null,array('class'=>'form-control','placeholder'=>__('Upload image')))); ?>

        </div>
        
        <div class="form-group  col-md-12">
            <?php echo e(Form::label('job_location',__('Job Location'),array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('job_location',null,array('class'=>'form-control','placeholder'=>__('Enter job location')))); ?>

        </div>
       </div>
</div>
<div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
    <?php echo e(Form::submit(__('Create'),array('class'=>'btn btn-primary btn-rounded'))); ?>

</div>
<?php echo e(Form::close()); ?>



<?php /**PATH /home/manmohan/Desktop/migration-tracking-system/resources/views/jobs/create.blade.php ENDPATH**/ ?>