<?php echo e(Form::open(array('url'=>'employee','method'=>'post', 'enctype' => "multipart/form-data"))); ?>

<div class="modal-body">
    <div class="row">
        <div class="form-group col-md-6">
            <?php echo e(Form::label('registration_id', __('Registration/ID'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('registration_id', null, array('class'=>'form-control', 'placeholder'=>__('Enter Registration/ID')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('foreign_employee_name', __('Foregin Employee Name'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('foreign_employee_name', null, array('class'=>'form-control', 'placeholder'=>__('Enter Foregin Employee Name')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('address', __('Address(Toll)'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('address', null, array('class'=>'form-control', 'placeholder'=>__('Enter Address(Toll)')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('age', __('Age'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::number('age', null, array('class'=>'form-control', 'placeholder'=>__('Enter Age')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('guardian_name', __('Guardian Name'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('guardian_name', null, array('class'=>'form-control', 'placeholder'=>__('Enter Guardian Name')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('guardian_contact', __('Guardian Contact'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('guardian_contact', null, array('class'=>'form-control', 'placeholder'=>__('Enter Guardian Contact')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('foreign_destination_country_city', __('Foregin Destination Country/City'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('foreign_destination_country_city', null, array('class'=>'form-control', 'placeholder'=>__('Enter Foregin Destination Country/City')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('destination_country_contact', __('Destination Country Contact'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('destination_country_contact', null, array('class'=>'form-control', 'placeholder'=>__('Enter Destination Country Contact')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('foreign_destination_job', __('Foregin Destination Job'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('foreign_destination_job', null, array('class'=>'form-control', 'placeholder'=>__('Enter Foregin Destination Job')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('foreign_job_finding_agent_name', __('Foregin Job Finding Agent Name'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('foreign_job_finding_agent_name', null, array('class'=>'form-control', 'placeholder'=>__('Enter Foregin Job Finding Agent Name')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('foreign_job_finding_agent_contact', __('Foregin Job Finding Agent Contact'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('foreign_job_finding_agent_contact', null, array('class'=>'form-control', 'placeholder'=>__('Enter Foregin Job Finding Agent Contact')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('date_of_heading_towards_foreign', __('Date of Heading Towards Foregin'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::date('date_of_heading_towards_foreign', null, array('class'=>'form-control'))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('duration_of_foreign_job', __('Duration of Foregin Job'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('duration_of_foreign_job', null, array('class'=>'form-control', 'placeholder'=>__('Enter Duration of Foregin Job')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('bank_account', __('Bank Account'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('bank_account', null, array('class'=>'form-control', 'placeholder'=>__('Enter Bank Account')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('skills', __('Skills'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::textarea('skills', null, array('class'=>'form-control', 'rows'=>3, 'placeholder'=>__('Enter Remarks')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('return_date', __('Return Date'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::date('return_date', null, array('class'=>'form-control'))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('remarks', __('Remarks'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::textarea('remarks', null, array('class'=>'form-control', 'rows'=>3, 'placeholder'=>__('Enter Remarks')))); ?>

          </div>
          <div class="form-group col-md-6">
            <?php echo e(Form::label('status', __('Status'), array('class'=>'form-label'))); ?>

            <?php echo e(Form::select('status', ['Active' => 'Active', 'Inactive' => 'Inactive'], null, array('class'=>'form-control'))); ?>

          </div>
        </div>

        
 
    </div>
</div>
<div class="modal-footer">
    <?php echo e(Form::submit(__('Create'),array('class'=>'btn btn-primary btn-rounded'))); ?>

</div>
<?php echo e(Form::close()); ?>



<?php /**PATH /media/manmohan/D25CA17B5CA15ACD/code&projectsDOC/2081/tracking/resources/views/employee/create.blade.php ENDPATH**/ ?>